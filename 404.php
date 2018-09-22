<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package risala
 */

get_header(); ?>
<div class="container">
    <div class="page-section-content">
	<main id="primary" class="site-main">

		<section class="error-404 not-found risala-box text-center">

			<div class="page-content">
				<h4><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'risala' ); ?></h4>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'risala' ); ?></p>
				<h4 class="page-404"><?php esc_html_e( '404', 'risala' ); ?></h4>
				<?php
					dima_get_search_form();
				?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #primary -->
	</div>
</div>
<?php
get_footer();
