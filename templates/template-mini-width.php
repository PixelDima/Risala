<?php
/**
 * Template Name: Mini Width
 */

get_header(); ?>

<div class="container">
		<div class="page-section-content">
			<main id="primary" class="mini-width">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main><!-- #primary -->
		</div>
</div>
<?php
get_footer();
