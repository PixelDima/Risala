<?php

/**
 * Rich Snippets.
 *
 * @package Dima Framework
 * @subpackage Functions
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*-----------------------------------------------------------------------------------*/
# get terms as plain text seprated with commas
/*-----------------------------------------------------------------------------------*/
function dima_get_plain_terms( $post_id, $term ) {

	$post_terms = get_the_terms( $post_id, $term );

	$terms = array();

	if ( ! empty( $post_terms ) && is_array( $post_terms ) ) {
		foreach ( $post_terms as $term ) {
			$terms[] = $term->name;
		}

		$terms = implode( ',', $terms );
	}

	return $terms;
}

/*-----------------------------------------------------------------------------------*/
# Get socials
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_get_array_of_socials' ) ) {
	function dima_get_array_of_socials() {
		# Social links ----------
		$options = array();
		if ( has_nav_menu( 'social' ) ) { 
			$ordered_menu_items = wp_get_nav_menu_items('social');
			foreach ( $ordered_menu_items as $menu_item ) {						
				array_push( $options, $menu_item->url );					
			}
		}

		return $options;
	}
}

/*-----------------------------------------------------------------------------------*/
# Rich Snippets
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_article_schemas' ) ) {

	add_action( 'dima_end_of_post', 'dima_article_schemas' );

	function dima_article_schemas() {

		if ( ! dima_helper::dima_get_option( 'dima_structure_data' ) ) {
			return false;
		}

		$post        = get_post();
		$post_id     = $post->ID;
		$schema_type = dima_helper::dima_get_option( 'dima_schema_type', 'Article' );

		# Site Logo ----------
		$site_logo ='';
		if ( function_exists( 'the_custom_logo' ) ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$site_logo = wp_get_attachment_image_src( $custom_logo_id, 'full', false );
		}

		# Tags and Categories ----------
		$tags = dima_get_plain_terms( $post_id, 'post_tag' );
		$cats = dima_get_plain_terms( $post_id, 'category' );

		# Post data ----------
		$article_body   = strip_tags( strip_shortcodes( apply_filters( 'dima_exclude_content', $post->post_content ) ) );
		$description    = wp_html_excerpt( $article_body, 200 );
		$puplished_date = ( get_the_time( 'c' ) ) ? get_the_time( 'c' ) : get_the_modified_date( 'c' );
		$modified_date  = ( get_the_modified_date( 'c' ) ) ? get_the_modified_date( 'c' ) : $puplished_date;

		# The Scemas Array ----------
		$schema = array(
			'@context'           => 'http://schema.org',
			'@type'              => $schema_type,
			'dateCreated'        => $puplished_date,
			'datePublished'      => $puplished_date,
			'dateModified'       => $modified_date,
			'headline'           => get_the_title(),
			'name'               => get_the_title(),
			'keywords'           => $tags,
			'url'                => get_permalink(),
			'description'        => $description,
			'copyrightYear'      => get_the_time( 'Y' ),
			'publisher'     	 =>  array(
				'@id'   => '#Publisher',
				'@type' => 'Organization',
				'name'  => get_bloginfo()
			),
			'sourceOrganization' => array(
				'@id' => '#Publisher'
			),
			'copyrightHolder'    => array(
				'@id' => '#Publisher'
			),
			'mainEntityOfPage'   => array(
				'@type' => 'WebPage',
				'@id'   => get_permalink( $post->ID ),
			),
			'author'             => array(
				'@type' => 'Person',
				'name'  => get_the_author(),
				'url'   => get_author_posts_url( get_the_author_meta( 'ID' ) ),
			),
		);
		if($site_logo != '') {
			$schema['publisher']['logo'] = array(
				'@type' => 'ImageObject',
				'url'   => $site_logo,
			);
		}
	

		$social = dima_get_array_of_socials();
		if ( ! empty( $social ) && is_array( $social ) ) {
			$schema['publisher']['sameAs'] = array_values( $social );
		}

		$schema['articleSection'] = $cats;
		$schema['articleBody']    = $article_body;

		# Post image ----------
		$image_id   = get_post_thumbnail_id();
		$image_data = wp_get_attachment_image_src( $image_id, 'full' );

		if ( ! empty( $image_data ) ) {
			$schema['image'] = array(
				'@type'  => 'ImageObject',
				'url'    => $image_data[0],
				'width'  => ( $image_data[1] > 696 ) ? $image_data[1] : 696,
				'height' => $image_data[2],
			);

			if ( ! empty( $has_review ) ) {
				$schema['itemReviewed']['image'] = $image_data[0];
			}
		}

		# Print the schema ----------
		echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>';
	}
}

if ( ! function_exists( 'dima_website_schemas' ) ) {

	add_action( 'dima_website_schemas', 'dima_website_schemas' );

	function dima_website_schemas() {

		if ( ! dima_helper::dima_get_option( 'dima_structure_data' ) || ! is_front_page() ) {
			return false;
		}

		$schema = array(
			'@context'        => 'http://schema.org',
			'@type'           => 'WebSite',
			'name'            => get_bloginfo( 'name' ),
			'url'             => home_url(),
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => home_url( '?s={search_term_string}&post_type=product' ),
				'query-input' => 'required name=search_term_string',
			),
		);

		# Print the schema ----------
		echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>';
	}
}

if ( ! function_exists( 'dima_organization_schemas' ) ) {

	add_action( 'dima_action_organization_schemas', 'dima_organization_schemas' );

	function dima_organization_schemas() {

		if ( ! dima_helper::dima_get_option( 'dima_structure_data' ) ) {
			return false;
		}

		if ( is_single( 'post' ) ) {
			return false;
		}

		# Site Logo ----------
		$site_logo ='';
		if ( function_exists( 'the_custom_logo' ) ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$site_logo = wp_get_attachment_image_src( $custom_logo_id, 'full', false );
		}

		$schema = array(
			'@context'        => 'http://schema.org',
			'@type'           => 'Organization',
			'@id'             => home_url() . '/#organization',
			'name'            => get_bloginfo( 'name' ),
			'url'             => home_url(),
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => home_url( '?s={search_term_string}' ),
				'query-input' => 'required name=search_term_string',
			),
		);

		if($site_logo != ''){
			$schema['logo'] = $site_logo;
		}


		# Social the schema ----------
		$social = dima_get_array_of_socials();
		if ( ! empty( $social ) && is_array( $social ) ) {
			$schema['sameAs'] = array_values( $social );
		}

		# Print the schema ----------
		echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>';
	}
}