<?php
/**
 * Template Name: Left Sidebar
 */

get_header(); ?>

<div class="container">
		<div class="page-section-content">
			<main id="primary" class="<?php dima_main_content_class(); ?>">

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
			<?php get_sidebar(); ?>
		</div>
</div>
<?php
get_footer();
