<?php
/**
 * Template Name: Full Width
 */

get_header(); ?>
<div class="container">
	<div class="page-section-content">
			<main id="primary" class="dima-container full">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
					get_template_part( 'template-parts/content-page' );

					// Comments template

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</main><!-- #primary -->
	</div>
</div>
<?php
get_footer();

