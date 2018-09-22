<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package risala
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
global $current_user;
wp_get_current_user();

?>

<div id="comments" class="comments-area dima-comments-list box-with-shadow">

	<?php
// You can start editing here -- including this comment!
if (have_comments()): ?>
		<h4 class="h-comment text-center">
            <span>
                <?php esc_html_e('Comments', 'risala');?>
                <small>(<?php echo number_format_i18n(get_comments_number()); ?>)</small>
            </span>
        </h4>
		<!-- .comments-title -->

		<div class="dima-divider noor-line noor-center"></div>

		<ol class="comment-list dima-comment">
			<?php
            wp_list_comments(array(
                'callback' => 'dima_risala_comment',
                'style' => 'ol',
            ));
            ?>
		</ol><!-- .comment-list -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
            <nav class="dima-comments-navigation">
                <h6><?php esc_html_e('Comment navigation', 'risala');?></h6>
                <div class="text-start"><?php previous_comments_link(esc_html__('&larr; Older Comments', 'risala'));?></div>
                <div class="text-end"><?php next_comments_link(esc_html__('Newer Comments &rarr;', 'risala'));?></div>
            </nav>
		<?php endif;?>

		<?php
// If comments are closed and there are comments, let's leave a little note, shall we?
if (!comments_open() && '0' != get_comments_number()): ?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'risala');?></p>
		<?php
endif;

endif; // Check for have_comments().
$comments_args = array(
    'must_log_in' => '<p class="must-log-in">' . sprintf(esc_html__("You must be %slogged in%s to post a comment.", 'risala'), '<a href="' . wp_login_url(apply_filters('the_permalink', get_permalink())) . '">', '</a>') . '</p>',
    'logged_in_as' => '<p class="logged-in-as">' . esc_html__("Logged in as", 'risala') . ' <a href="' . admin_url("profile.php") . '">' . esc_attr($current_user->user_login) . '</a>. <a href="' . wp_logout_url(get_permalink()) . '" title="' . esc_html__("Log out of this account", 'risala') . '">' . esc_html__("Log out &raquo;", 'risala') . '</a></p>',
    'cancel_reply_link' => '<p class="cancel-reply text-end theme-color">' . sprintf(esc_html__('cancel reply', 'risala')) . '</p>',
    'id_submit' => 'entry-comment-submit',
    'class_submit' => 'button fill',
    'label_submit' => esc_html__('Post comment', 'risala'),
    'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title text-center">',
    'title_reply' => esc_html__('Leave a Reply', 'risala'),
    'title_reply_after' => '</h4><div class="dima-divider noor-line noor-center"></div>',
    'submit_button' => '<div class="text-center"><input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" /></div>',
);

comment_form($comments_args);
?>

</div><!-- #comments -->
