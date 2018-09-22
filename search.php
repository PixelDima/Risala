<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package risala
 */

get_header(); ?>

	<div class="container">
        <div class="page-section-content">			
			<main id="primary" class="<?php dima_main_content_class(); ?>">
			<?php
				if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-search' );

				endwhile;

				else : ?>
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'risala' ); ?></p>
				<?php endif;

				 the_posts_pagination(); 
			?>
			</main><!-- #primary -->
			<?php get_sidebar(); ?>
		</div>		
	</div><!-- #primary -->

<?php
get_footer();
