<?php
/**
 * Open graph functions
 *
 * @package Noor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/*-----------------------------------------------------------------------------------*/
# Open Graph Meta for posts
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_opengraph' ) ) {
	add_action( 'wp_head', 'dima_opengraph' );
	function dima_opengraph() {

		# Check if single and og is active and there is no OG plugin is active ----------
		if ( dima_is_opengraph_active() || ! dima_helper::dima_am_i_true( dima_helper::dima_get_option( 'dima_open_graph_meta_tag' ) ) ) {
			return;
		}

		$post     = get_post();
		$og_title = the_title_attribute( 'echo=0' ) . ' - ' . get_bloginfo( 'name' );
		if ( $post != null ) {
			$og_description = dima_get_content_stripped_and_excerpted( 50, $post->post_content );
		} else {
			$og_description = get_bloginfo( 'description' );
		}
		$og_type = 'article';
		$og_img  = dima_get_featured_and_opengraph_image();

		if ( is_home() || is_front_page() || empty( $og_description ) ) {
			$og_title       = get_bloginfo( 'name' );
			$og_description = get_bloginfo( 'description' );
			$og_type        = 'website';
		}

		$fc_pages_ids = dima_helper::dima_get_option( 'dima_facebook_page_id' );

		echo '
			<meta property="og:title" content="' . esc_html( $og_title ) . '" />
			<meta property="og:type" content="' . esc_html( $og_type ) . '" />
			<meta property="og:url" content="' . get_permalink() . '" />
			<meta property="og:site_name" content="' . get_bloginfo( 'name' ) . '" />
			<meta property="og:description" content="' . esc_attr( wp_html_excerpt( $og_description, 100 ) ) . '" />
		';
		$arr_pages_id = explode( ',', $fc_pages_ids );
		foreach ( $arr_pages_id as $key => $page_id ) {
			if ( is_numeric( $page_id ) ) {
				echo '<meta property="fb:pages" content="' . esc_html( $page_id ) . '" />';
			}
		}

		if ( ! empty( $og_img ) ) {
			if ( is_ssl() ) {
				echo '<meta property="og:image:secure_url" content="' . esc_url( $og_img ) . '" />';
			}
			echo '<meta property="og:image" content="' . esc_url( $og_img ) . '" />';
		}
	}
}

/*-----------------------------------------------------------------------------------*/
# Twitter Cards
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_twitter_cards' ) ) {
	add_action( 'wp_head', 'dima_twitter_cards' );
	function dima_twitter_cards() {

		# Check if single and og is active and there is no OG plugin is active ----------
		if ( dima_helper::dima_am_i_true( dima_helper::dima_get_option( 'dima_open_graph_meta_tag' ) ) ) {
			return;
		}

		$post     = get_post();
		$tw_title = the_title_attribute( 'echo=0' ) . ' - ' . get_bloginfo( 'name' );
		if ( $post != null ) {
			$tw_description = dima_get_content_stripped_and_excerpted( 50, $post->post_content );
		} else {
			$tw_description = get_bloginfo( 'description' );
		}
		$tw_img = dima_get_featured_and_opengraph_image();

		if ( is_home() || is_front_page() || empty( $tw_description ) ) {
			$tw_title       = get_bloginfo( 'name' );
			$tw_description = get_bloginfo( 'description' );
		}
		$tw_site       = dima_helper::dima_get_option( 'dima_twitter_username' );
		$tw_account_id = dima_helper::dima_get_option( 'dima_twitter_account_id' );

		echo '
		<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="' . $tw_title . '" />
<meta property="twitter:description" content="' . esc_attr( wp_html_excerpt( $tw_description, 100 ) ) . '" />
';

		if ( ! empty( $tw_site ) ) {
			echo '<meta property="twitter:site" content="' . esc_attr( $tw_site ) . '" />';
		}

		if ( ! empty( $tw_img ) ) {
			echo '<meta property="og:image" content="' . esc_url( $tw_img ) . '" />';
		}

		if ( ! empty( $tw_account_id ) ) {
			echo '<meta property="twitter:account_id" content="' . esc_attr( $tw_account_id ) . '" />';
		}
	}
}


/*-----------------------------------------------------------------------------------*/
# Add the opengraph namespace to the <html> tag
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_add_opengraph_namespace' ) ) {

	add_filter( 'language_attributes', 'dima_add_opengraph_namespace' );
	function dima_add_opengraph_namespace( $input ) {
		# Check if single and og is active and there is no OG plugin is active ----------
		if ( is_admin() || dima_is_opengraph_active() || ! is_singular() || ! dima_helper::dima_get_option( 'dima_open_graph_meta_tag' ) ) {
			return $input;
		}

		return $input . ' prefix="og: http://ogp.me/ns#"';
	}

}


/*-----------------------------------------------------------------------------------*/
# Check if a an open graph plugin active
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'dima_is_opengraph_active' ) ) {

	function dima_is_opengraph_active() {

		# Yoast SEO ----------
		if ( class_exists( 'WPSEO_Frontend' ) ) {
			$yoast = get_option( 'wpseo_social' );
			if ( ! empty( $yoast['opengraph'] ) ) {
				return true;
			}
		}

		# Jetpack ----------
		if ( DIMA_JETPACK_IS_ACTIVE && ( in_array( 'publicize', Jetpack::get_active_modules() ) || in_array( 'sharedaddy', Jetpack::get_active_modules() ) ) ) {
			return true;
		}

		# Else ----------
		return false;
	}

}

function dima_get_featured_and_opengraph_image( $size = 'dima-post-standard-image' ) {

	if ( has_post_thumbnail() ) {
		$featured_image_url = dima_helper::dima_get_featured_image_url( $size );
		$image_url          = $featured_image_url;
	} else {
		$image_url = dima_helper::dima_get_option( 'dima_opengraph_image' );
	}

	return $image_url;
}