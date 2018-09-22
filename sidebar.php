<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Risala
 */
?>


<?php
/*------------------------------------------------------------*/
# Require Files
# With require_once you can override these files with child theme it uses
# load_template() to include the files which uses require_once()
/*------------------------------------------------------------*/
if (dima_get_content_layout() != 'no-sidebar' && dima_get_content_layout() != 'mini'):

?>

				<aside id="sidebar"	class="<?php dima_sidebar_class();?>" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
				<?php
				do_action('risala_above_sidebar');
				dynamic_sidebar('sidebar-main');
				do_action('risala_below_sidebar');
				?>
			    </aside>

			<?php
endif;