<?php
/**
 * Customizer Control: risala-upsell.
 *
 * @package     risala WordPress theme
 * @subpackage  Controls
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Upsell control
 */
class DIMA_Customizer_Upsell_Section_Control extends WP_Customize_Section {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'risala-upsell';
	public $url  = '';
	public $id = '';

	/**
	 * JSON.
	 */
	public function json() {
		$json 			= parent::json();
		$json['url'] 	= esc_url( $this->url );
		$json['id'] 	= $this->id;
		var_dump($json);
		return $json;
	}

	protected function render() {
		?>
		<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="accordion-section control-section control-section-<?php echo esc_attr( $this->type ); ?> cannot-expand">
			<h3>
				<a href="<?php echo esc_attr( $this->url ); ?>" target="_blank"><?php echo esc_attr( $this->title ); ?></a>
			</h3>
		</li>
		<?php
	}
}

/**
 * Enqueue control related scripts/styles.
 *
 * @access public
 */
function risala_upsell_enqueue() {
	?>
	        <script>
			! function (t, n) {
			n.sectionConstructor["risala-upsell"] = n.Section.extend({
				attachEvents: function () {},
				isContextuallyActive: function () {
					return !0
				}
			})
			}(jQuery, wp.customize);
			</script>
			
			<style>
			#customize-theme-controls #accordion-section-risala_upsell_section{display:block!important;border-top:1px solid #8bc34a;border-bottom:1px solid #8bc34a;}#accordion-section-risala_upsell_section h3{background-color:#8bc34a;padding:0;margin:0;border-left:4px solid #8bc34a;transition:.15s background-color ease-in-out,.15s border-color ease-in-out;outline:0}#accordion-section-risala_upsell_section h3:hover{background-color:#749c46;border-left-color:#3b5220}#accordion-section-risala_upsell_section h3 a{display:block;position:relative;color:#fff;padding:10px 10px 11px 14px;line-height:21px;text-decoration:none;box-shadow:none!important}#accordion-section-risala_upsell_section h3 a:after{content:'\f345';color:#fff;position:absolute;top:12px;right:10px;z-index:1;font:400 20px/1 dashicons;speak:none;display:block;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-decoration:none!important}.rtl #accordion-section-risala_upsell_section h3{border-left:none;border-right:4px solid #8bc34a}.rtl #accordion-section-risala_upsell_section h3:hover{border-right-color:#3b5220}.rtl #accordion-section-risala_upsell_section h3 a:after{content:'\f341';right:auto;left:10px}
			</style>

	<?php
}
add_action( 'customize_controls_enqueue_scripts', 'risala_upsell_enqueue' );