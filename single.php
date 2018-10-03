<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package risala
 */

get_header(); ?>
<div class="container">
	<div class="page-section-content">
			<main id="primary" class="<?php dima_main_content_class(); ?>">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				dima_get_author_box();
				
				dima_post_navigation();

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
if ( is_single() ):
	// Call article schemas
	// !☺: It will work if the option is on from cuzmezer.
	do_action( 'dima_end_of_post' );
	// Call Pagination.
	dima_post_navigation();
endif;

get_footer();
