<?php
/**
 * Class DIMA_About_Me_Widget.
 *
 * @package Dima Framework
 * @subpackage Widget
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */
/*  Creating the widget  */

class DIMA_About_Me_Widget extends WP_Widget {
	function __construct() {
		$widget_ops  = array(
			'description' => esc_html__( 'Displays About Me Information', 'risala' ),
			'classname'   => 'dima-widget-author-box'
		);
		$control_ops = array( 'width' => 250, 'height' => 400 );
		parent::__construct( false, $name = DIMA_THEME_NAME . ' - ' . esc_html__( 'About Me', 'risala' ), $widget_ops, $control_ops );
	}

	/**
	 * Creating widget front-end / This is where the action happens
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );
		$title         = empty( $instance['title'] ) ? esc_html__( 'About Me', 'risala' ) : apply_filters( 'widget_title', $instance['title'] );
		$image_url     = empty( $instance['image_url'] ) ? '' : $instance['image_url'];
		$name          = empty( $instance['name'] ) ? '' : $instance['name'];
		$about_me_text = empty( $instance['aboutText'] ) ? '' : wp_kses( $instance['aboutText'], dima_helper::dima_get_allowed_html_tag() );

		echo wp_kses_post( $before_widget );

		if ( $title ) {
			echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );
		} ?>

        <div class="clearfix">
			<?php if ( ! empty( $image_url ) ): ?>
                <div class="dima-about-image">
                    <img src="<?php echo esc_url( $image_url ); ?>"
                         id="about-image" alt="<?php echo wp_kses_post( esc_attr( $name ) ) ?>"/>
                </div>
				<?php
			endif;
			?>
            <div class="dima-author-info text-center">
                <h5 class="dima-author-name"><?php echo wp_kses_post( esc_attr( $name ) ) ?></h5>
				<?php echo wp_kses_post( $about_me_text ) ?>
                <div class="clear"></div>
            </div>
        </div>
		<?php
		echo wp_kses_post( $after_widget );
	}


	/**
	 * Updating widget replacing old instances with new
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['image_url'] = esc_url( $new_instance['image_url'] );
		$instance['name']      = sanitize_text_field( $new_instance['name'] );
		$instance['aboutText'] = current_user_can( 'unfiltered_html' ) ? $new_instance['aboutText'] : stripslashes( wp_filter_post_kses( addslashes( $new_instance['aboutText'] ) ) );

		return $instance;
	}

	/**
	 * Creates the form for the widget
	 */
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array(
			'title'     => esc_html__( 'About Me', 'risala' ),
			'image_url' => '',
			'aboutText' => ''
		) );

		$title         = $instance['title'];
		$image_url     = $instance['image_url'];
		$name          = empty( $instance['name'] ) ? '' : $instance['name'];
		$about_me_text = $instance['aboutText'];

		echo '<p><label for="' . esc_attr( $this->get_field_id( 'title' ) ) . '">' . esc_html__( 'Title', 'risala' ) . ':' . '</label><input class="widefat" id="' . esc_attr( $this->get_field_id( 'title' ) ) . '" name="' . esc_attr( $this->get_field_name( 'title' ) ) . '" type="text" value="' . esc_attr( $title ) . '" /></p>';
		echo '<p><label for="' . esc_url( $this->get_field_id( 'image_url' ) ) . '">' . esc_html__( 'Image', 'risala' ) . ':' . '</label><textarea cols="20" rows="2" class="widefat" id="' . esc_attr( $this->get_field_id( 'image_url' ) ) . '" name="' . esc_attr( $this->get_field_name( 'image_url' ) ) . '">' . esc_url( $image_url ) . '</textarea></p>';
		echo '<p><label for="' . esc_attr( $this->get_field_id( 'name' ) ) . '">' . esc_html__( 'Name', 'risala' ) . ':' . '</label><textarea cols="20" rows="2" class="widefat" id="' . esc_attr( $this->get_field_id( 'name' ) ) . '" name="' . esc_attr( $this->get_field_name( 'name' ) ) . '">' . esc_attr( $name ) . '</textarea></p>';
		echo '<p><label for="' . esc_attr( $this->get_field_id( 'aboutText' ) ) . '">' . esc_html__( 'Text', 'risala' ) . ':' . '</label><textarea cols="20" rows="5" class="widefat" id="' . esc_attr( $this->get_field_id( 'aboutText' ) ) . '" name="' . esc_attr( $this->get_field_name( 'aboutText' ) ) . '">' . esc_textarea( $about_me_text ) . '</textarea></p>';
	}

}

/**
 * Register and load the widget
 */
function DIMA_About_Me_Widget_Register() {
	register_widget( 'DIMA_About_Me_Widget' );
}

add_action( 'widgets_init', 'DIMA_About_Me_Widget_Register' );