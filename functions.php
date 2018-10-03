<?php
/**
 * risala functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package risala
 */

 /*-----------------------------*/
# TMG
/*-----------------------------*/
$dima_tmg_path   = get_template_directory() . '/framework/functions/admin/includes/tmg';

require_once( $dima_tmg_path . '/class-tgm-plugin-activation.php' );
require_once( $dima_tmg_path . '/registration.php' );
require_once( $dima_tmg_path . '/updates.php' );

require_once 'framework/functions/helper.php';
require_once 'framework/functions/open-graph.php';
require_once 'framework/functions/rich-snippets.php';
require_once 'framework/functions/dynamic-styles.php';
require_once 'framework/functions/setup.php';

/*-----------------------------*/
# Enqueue scripts and styles.
/*-----------------------------*/
require_once 'framework/functions/styles.php';
require_once 'framework/functions/scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/framework/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/framework/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/framework/inc/template-functions.php';

/**
 * Customizer additions
 */
require_once 'framework/functions/admin/customizer/customizer-setup.php';

/*-----------------------------*/
# Widgets.
/*-----------------------------*/
require_once( 'framework/functions/widgets/widget-about.php' );

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/framework/inc/jetpack.php';
}

//==============================Classes

/*------------------------------*/
# Filter that return body class
/*------------------------------*/

if (!function_exists('dima_body_class')):
    function dima_body_class($output)
{

        $is_blog = is_home();
        $entry_id = get_the_ID();
        $layout_style = esc_attr(dima_helper::dima_get_option('dima_layout_style'));

        if ($layout_style != 'clean') {
            $output[] .= 'dima-site-cards';
        } else {
            $output[] .= 'dima-site-clean';
        }
        /**
         * Content layout.
         */
        switch (dima_get_content_layout()) {
            case 'right-sidebar':
                $output[] .= 'right-content-sidebar-active';
                break;
            case 'left-sidebar':
                $output[] .= 'left-content-sidebar-active';
                break;
            case 'full-width':
                $output[] .= 'dima-full-width-active';
                break;
            case 'mini':
                $output[] .= 'dima-mini-width-active';
                break;
        }

        $output[] = DIMA_THEME_FOLDER . '-ver-' . DIMA_VERSION;

        return $output;
    }

    add_filter('body_class', 'dima_body_class');
endif;

if (!function_exists('dima_post_class')):
    function dima_post_class($output)
{
        switch (has_post_thumbnail()) {
            case true:
                $output[] .= 'has-post-thumbnail';
                break;
            case false:
                $output[] .= 'no-post-thumbnail';
                break;
        }

        return $output;
    }

    add_filter('post_class', 'dima_post_class');
endif;

if (!function_exists('dima_main_content_class')):

    /**
     * [Get content classes based on options selected in customization and meta box']
     */
    function dima_main_content_class()
{
        switch (dima_get_content_layout()) {
            case 'full-width':
                $output = 'dima-container full';
                break;
            case 'right-sidebar':
                $output = 'dima-container float-start';
                break;
            case 'left-sidebar':
                $output = 'dima-container float-end';
                break;
            case 'mini':
                $output = 'mini-width';
                break;
            default:
                $output = 'dima-container full';
                break;
        }
        echo ($output);
    }
endif;

/**
 * Sidebar class
 */
if (!function_exists('dima_sidebar_class')):

    /**
     * [Get sidebar classes based on options selected in customization and metabox 'aside class dima_sidebar_class()']
     */
    function dima_sidebar_class()
{
        switch (dima_get_content_layout()) {
            case 'right-sidebar':
                $output = 'dima-sidebar hidden-tm hidden float-end';
                break;
            case 'left-sidebar':
                $output = 'dima-sidebar hidden-tm hidden float-start';
                break;
            default:
                $output = 'dima-sidebar hidden-tm hidden float-end';
        }
        echo ($output);
    }
endif;

/**
 * Register Widget Areas
 */
if (!function_exists('dima_widgets_init')):
    function dima_widgets_init()
{

        /**
         * Default Sidebar
         */

        register_sidebar(array(
            'name' => esc_html__('Main Sidebar', 'risala'),
            'id' => 'sidebar-main',
            'description' => esc_html__('Appears on posts and pages that include the sidebar.', 'risala'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5><span class="noor-line dima-divider noor-center"></span>',
        ));

        $i = 0;
        while ($i < 4): $i++;
            register_sidebar(array(
                'name' => esc_html__('First Footer Area #', 'risala') . $i,
                'id' => 'footer-' . $i,
                'description' => esc_html__('Widgetized footer area.', 'risala'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4><hr>',
            ));
        endwhile;

    }

    add_action('widgets_init', 'dima_widgets_init');
endif;

/**
 * @param $name
 *
 * @return bool|string
 */
function dima_get_svg_icon($name)
{
    $icon = 'framework/images/svg/' . esc_attr($name) . '.svg.php';
    $icon_path = get_template_directory() . "/" . $icon;
    if (file_exists($icon_path)) {
        ob_start();
        include $icon_path;
        $contents = ob_get_clean();

        return $contents;
    }
}

/**
 *  views : Comments.
 *
 * @param $comment
 * @param $args
 * @param $depth
 */
function dima_risala_comment($comment, $args, $depth)
{
    global $post;
    ?>
<li id="li-comment-<?php comment_ID();?>" <?php comment_class();?>>
    <div class="content-comment post-content">
		<?php
printf(
        '<div class="dima-comment-img">%1$s %2$s</div>',
        '<span class="avatar-wrap cf circle">' . get_avatar($comment, 90) . '</span>', ($comment->user_id === $post->post_author) ? '<span class="dima-post-author">' . esc_html__('Author', 'risala') . '</span>' : ''
    );
    ?>
        <div class="dima-comment-entry">
            <article id="comment-<?php comment_ID();?>">
                <header class="dima-comment-header clearfix">
                    <ul class="user-comment-titel">
                        <li>
							<?php printf('<cite class="dima-comment-author">%1$s</cite>', get_comment_author_link());?>
                        </li>
						<?php
printf('<li><a href="%1$s"><time class="comment-time" datetime="%2$s">%3$s</time></a></li>',
        esc_url(get_comment_link($comment->comment_ID)),
        get_comment_time('c'),
        sprintf(esc_html__('%1$s at %2$s', 'risala'),
            get_comment_date(), get_comment_time()));
    ?>
                    </ul>
                </header>
				<?php if ('0' == $comment->comment_approved): ?>
                    <p class="dima-comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'risala');?></p>
				<?php endif;?>
                <div class="dima-comment-content">
					<?php comment_text();?>
                </div>
                <ul class="user-comment-titel">
                    <li>
                        <div class="dima-reply">
							<?php
if (comments_open($post->ID) && $depth < $args['max_depth']) {
        echo wp_kses(dima_get_svg_icon("ic_reply"), dima_helper::dima_get_allowed_html_tag())?>
								<?php echo "  ";
        $allowed_tags = array(
            'span' => array(),
        );

        comment_reply_link(array_merge($args, array(
            'reply_text' => wp_kses(__('Reply <span class="comment-reply-link-after"></span>', 'risala'), $allowed_tags),
            'depth' => $depth,
            'max_depth' => $args['max_depth'],
        )));
    }
    ?>
                        </div>
                    </li>
                    <li>
						<?php echo wp_kses(dima_get_svg_icon("ic_mode_edit"), dima_helper::dima_get_allowed_html_tag());
    edit_comment_link(esc_html__('Edit', 'risala')); ?>
                    </li>
                </ul>
            </article>
        </div>
    </div>
	<?php
}

function dima_is_it_clean()
{
    $layout_style = esc_attr(dima_helper::dima_get_option('dima_layout_style'));
    if ($layout_style == 'clean') {
        return true;
    } else {
        return false;
    }
}

function dima_get_post_featured_image()
{
    if (has_post_thumbnail()) {

        if (dima_get_content_layout() == 'full-width') {
            $img_size = "dima-big-image-single";
        } else {
            $img_size = "dima-post-standard-image";
        }
        ?>

        <div class="featured-image">
			<?php if (is_single()) {?>
                <?php
        //dima-post-standard-image
            the_post_thumbnail($img_size);
            ?>
			<?php } else {?>
                <a href="<?php the_permalink();?>"
                   rel="bookmark"><?php the_post_thumbnail($img_size);?></a>
			<?php }?>
		</div>

	<?php
}
}