<?php
/**
 * Template Name: Page Builder
 *
 * This template has width, margin and padding containers removed for use with page builder plugins.
 */

get_header(); ?>
<div class="container-builder">
			<main id="primary" class="page-builder">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
					get_template_part( 'template-parts/content-page' );
				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</main><!-- #primary -->
</div>
<?php
get_footer();

