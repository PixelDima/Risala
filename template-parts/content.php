<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package risala
 */

?>
<?php
if ( !dima_is_it_clean() ) {
	$text_ali = 'text-center';
} else {
	$text_ali = 'text-start';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	if(!dima_is_it_clean()){
			dima_get_post_featured_image();
	} 
	?>

    <div class="entry-post-content">

    <header>
		<?php
		$categories        = get_the_category();
		$cat_nb            = sizeof( $categories );
		$categories_output = '';
		if ( $cat_nb >= 1 ) {
			if(dima_is_it_clean() && is_single() && is_singular() || !dima_is_it_clean()){
				$categories_output .= '<a class="text-center meta-cat" href="'
				. get_category_link( $categories[0]->term_id )
				. '" title="'
				. esc_attr( sprintf( esc_html__( "View all posts in: &ldquo;%s&rdquo;", 'risala' ), $categories[0]->name ) )
				. '" rel="category tag"> '
				. $categories[0]->name
				. '</a>';
			}

		}
		echo wp_kses( $categories_output, dima_helper::dima_get_allowed_html_tag() );
		if ( is_single() ) {
			?>
			<h1 class="entry-title single-post-title <?php echo esc_attr( $text_ali ) ?>">
			<span class="icon_edit"><?php echo dima_helper::dima_get_admin_edit() ?></span>
			<?php the_title(); ?>
			</h1>
			<?php
		} else { ?>
			<h2 class="entry-title <?php echo esc_attr( $text_ali ) ?>">
			<span class="icon_edit"><?php echo dima_helper::dima_get_admin_edit() ?></span>
                <a href="<?php the_permalink(); ?>"
                   title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to: "%s"', 'risala' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php echo get_the_title(); ?>
                </a>
            </h2>
		<?php } ?>

		<?php
		dima_get_entry_meta( true, get_post_format( get_the_ID() ) );
		?>
				
	</header>
	<?php 
		if(dima_is_it_clean()){
			dima_get_post_featured_image();
		}	
	?>
	
	<div class="<?php dima_pots_content_class(); ?>">
			<?php 
			dima_get_post_content( true, 50 ); 
			?>
			<?php if(is_single() && is_singular()){ ?>
				<div class="post-tags clearfix">
					<?php the_tags(); ?>
				</div>
			<?php } ?>
	</div>


	</div><!-- .entry-content -->	

</article><!-- #post-<?php the_ID(); ?> -->
