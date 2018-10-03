<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Risala
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <!--[if IE ]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
	
	<div class="dima-navbar-wrap desk-nav">
		<?php do_action( 'dima_action_before_navbar' ) ?>
		<div class="dima-navbar">
			<div class="dima-navbar-global container">
				<div class="logo">
					<?php dima_title_logo() ?>
				</div><!-- .Logo -->

				<nav class="dima-nav-tag dima-tag-primary-menu text-end clearfix">
					<?php dima_output_primary_navigation() ?>
				</nav><!-- .dima-nav-tag -->

				<?php dima_get_search_form(true); ?>

			</div><!-- .dima-navbar-global -->
		</div><!-- .dima-navbar -->
		<?php do_action( 'dima_action_after_navbar' ) ?>
	</div>

	<!-- Mobile Menu -->
	<div class="dima-navbar-wrap mobile-nav">
		<?php do_action( 'dima_action_before_navbar' ) ?>
		<div class="dima-navbar">
			<div class="mobile-nav-head">

				<?php dima_get_search_form(true); ?>

				<!-- Nav bar button -->
				<a class="dima-btn-nav" href="#">
					<span class="menu_icon_item"><?php echo dima_get_svg_icon( "ic_menu" ) ?></span>
					<span class="menu_icon_item sort_ic"><?php echo dima_get_svg_icon( "ic_clear" ) ?></span>
				</a>
				
				<!-- LOGO -->
				<div class="logo">
					<?php dima_title_logo() ?>
				</div>

				

			</div>
			<!-- Manue -->

			<nav class="dima-nav-tag dima-tag-primary-menu clearfix">
				<?php dima_output_primary_navigation(true) ?>
			</nav><!-- .dima-nav-tag -->

		</div>
		<!-- container -->
		<?php do_action( 'dima_action_after_navbar' ) ?>
	</div>
	<!-- !Mobile Menu -->

		<!-- Get the archive page titles -->
		<?php 
		$page_template="";
		if(isset($post->ID)){
			$page_template = get_post_meta( $post->ID, '_wp_page_template', true );
		}

		if(( is_archive() || is_search() || is_404() || is_page()) && ! is_front_page() &&  $page_template != 'templates/template-page-builder.php') { ?>
		<div class="header-page-title">
			<div class="container text-center">
				<?php dima_page_titles(); ?>
			</div><!-- .header-text -->
		</div><!-- .text-container -->
	<?php } ?>

</header><!-- .site-header -->


<div id="page" class="site all_content">
	<div id="content" class="site-content dima-main clearfix">