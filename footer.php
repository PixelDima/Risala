<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risala
 */

?>
<?php do_action('dima_action_before_footer')?>
<?php
$clm = is_active_sidebar('footer-1') + is_active_sidebar('footer-2') + is_active_sidebar('footer-3') + is_active_sidebar('footer-4');
?>
<footer id="colophon" class="footer-container site-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
	<?php if ($clm != 0 ) { ?>
	<div class="container top-footer clm-<?php echo esc_attr($clm)?>">
	<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
			<div class="footer-widgets">
				<?php if (is_active_sidebar('footer-1')) {?>
					<div class="footer-column">
						<?php dynamic_sidebar('footer-1');?>
					</div>
				<?php }?>

				<?php if (is_active_sidebar('footer-2')) {?>
					<div class="footer-column">
						<?php dynamic_sidebar('footer-2');?>
					</div>
				<?php }?>

				<?php if (is_active_sidebar('footer-3')) {?>
					<div class="footer-column">
						<?php dynamic_sidebar('footer-3');?>
					</div>
				<?php }?>
				<?php if (is_active_sidebar('footer-4')) {?>
					<div class="footer-column">
						<?php dynamic_sidebar('footer-4');?>
					</div>
				<?php }?>

			</div>
	<?php endif;?>
	</div><!-- .top-footer -->
	<?php } ?>
	<div class="footer-bottom">
	<div class="container">
			<div class="copyright">
				<?php
				$dima_copyright    = dima_helper::dima_get_option( 'dima_footer_content_text' );
				$allowed_tags = array(
					'strong' => array(),
					'br'     => array(),
					'em'     => array(),
					'p'      => array( 'a' => true ),
					'a'      => array(
						'href'   => true,
						'target' => true,
						'title'  => true,
					)
				);
				
				echo wp_kses( $dima_copyright, $allowed_tags );
				?>
			</div>
			<?php if ( has_nav_menu( 'social' ) ) { ?>
				<nav class="social-navigation">
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'fallback_cb'    => false
					) );?>
				</nav><!-- .social-navigation -->
			<?php } ?>
			</div>
    </div>

</footer><!-- #colophon -->
<?php do_action('dima_action_after_footer')?>
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
