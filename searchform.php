<?php
/**
 * This template displays the search form.
 *
 * @package Risala
 */
?>

<form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="search-field">
		<label class="screen-reader-text"><?php esc_html_e('Search for:', 'risala');?></label>
		<input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-input" placeholder="<?php esc_attr_e('Search here...', 'risala');?>" />
	</div>
	<div class="search-icon">
		<a href="#">
			<?php echo dima_get_svg_icon('ic_search') ?>
		</a>
	</div>
</form>