<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package risala
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function risala_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'risala_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details' => array(
			'stylesheet' => 'risala-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
	) );
}
add_action( 'after_setup_theme', 'risala_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function risala_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}


/**
 * Remove Related Posts CSS
 */
function risala_blocks_rp_css() {
	wp_deregister_style( 'jetpack_related-posts' );
}
add_action( 'wp_print_styles', 'risala_blocks_rp_css' );
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

/**
 * Changes the text of the "Older posts" button in infinite scroll
 */
function risala_blocks_infinite_scroll_button_text( $js_settings ) {
	$js_settings['text'] = esc_html__( 'Load more', 'risala' );
	return $js_settings;
}
add_filter( 'infinite_scroll_js_settings', 'risala_blocks_infinite_scroll_button_text' );