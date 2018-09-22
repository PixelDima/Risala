<?php
if ( ! function_exists( 'dima_get_entry_meta' ) ):
	/**
	 * [Print Entry Meta]
	 */
	function dima_get_entry_meta( $show_meta, $type = 'standard' ) {
		global $post;
		$author_id    = $post->post_author;
		if ( !dima_is_it_clean() ) {
			$line_ali = 'line-center';
			$text_ali = 'text-center';
		} else {
			$line_ali = 'line-start';
			$text_ali = 'text-start';
		}
		$date   = '<span class="post-on"><a href="' . get_permalink() . '">
														<time class="entry-date" datetime="' . esc_attr( get_the_date( 'c' ) ) . '"> ' . esc_html( get_the_date() ) . '</time>
														<time class="updated hide" datetime="' . esc_attr( get_the_modified_date( 'c' ) ) . '"> ' . esc_html( get_the_modified_date() ) . '</time>
														</a>';
		$author = sprintf( ' ' . esc_html__( 'By', 'risala' ) . ' <a href="%1$s" rel="author" class="vcard"><span class="fn">%2$s</span></a></span>', get_author_posts_url( $author_id ), get_the_author_meta( 'display_name', $author_id ) );

		/**
		 * Output
		 */
		$hr = '<hr class="hr-under-title dima-divider line-hr ' . esc_attr( $line_ali ) . '">';

		if ( $show_meta ) {
			printf( wp_kses( $hr, dima_helper::dima_get_allowed_html_tag() ) . '<div class="post-meta %1$s">%2$s' . esc_html__( ' Posted on ', 'risala' ) . ' %3$s</div>', $text_ali, $author, $date );
		}
	}
endif;

/**
 * Post Content
 */
if ( ! function_exists( 'dima_get_post_content' ) ) {
	/**
	 * @param     $is_full_post_content
	 * @param int $excerpt_length
	 *
	 * @return array|mixed|string
	 */
	function dima_get_post_content( $is_full_post_content, $excerpt_length = 55 ) {
		$content_excerpted = false;

		if ( $is_full_post_content != '1' ) {
			$content_excerpted = true;
		}

		if ( is_singular() && ! is_page() ) {
			$content_excerpted = false;
		}

		if ( $content_excerpted ) {
			dima_get_post_content_excerpt( $excerpt_length );
		} else {
			the_content(esc_html__( 'Read More...', 'risala' ));
			dima_link_pages();
		}
	}
}

/*------------------------------*/
# custom excerpt length
/*------------------------------*/
if ( ! function_exists( 'dima_get_post_content_excerpt' ) ) {
	/**
	 * @param $limit
	 *
	 * @return array|mixed|string
	 */
	function dima_get_post_content_excerpt( $limit = 150 ) {
		$custom_read_more = false;
		$post             = get_post( get_the_ID() );
		$more_tag         = strpos( $post->post_content, '<!--more-->' );
		$more_text        = apply_filters( 'dima_blog_read_more_excerpt', '...' );
		$limit            = intval( $limit );

		if ( $limit === 0 ) {
			return '';
		}
		$read_more = $more_text;
		$content   = wp_strip_all_tags( get_the_content( $read_more ) );

		$content = dima_get_content_stripped_and_excerpted( $limit, $content );

		if ( $post->post_excerpt || $more_tag !== false ) {
			if ( ! $more_tag ) {
				$content = wp_strip_all_tags( rtrim( get_the_excerpt(), '[&hellip;]' ) );
			}
			$custom_read_more = true;
		}

		if ( $content && $custom_read_more == false ) {

			$content = explode( ' ', $content, $limit );
			if ( count( $content ) >= $limit ) {
				array_pop( $content );
				$content = implode( ' ', $content );

				if ( $limit != 0 ) {
					$content .= $read_more;
				}
			} else {
				$content = implode( ' ', $content );
			}
			echo( $content );
		}

		// If we have a custom excerpt <!--more--> tag
		if ( $custom_read_more == true ) {
			//remove ShortCode ''
			$content = str_replace( '/\[(.*?)\]/i', '', $content );
			echo apply_filters( 'the_content', $content );
		}

		return ( $content );
	}
}

if ( ! function_exists( 'dima_get_content_stripped_and_excerpted' ) ) {
	/**
	 * Helper function
	 *
	 * @param $excerpt_length
	 * @param $content
	 *
	 * @return array|mixed|string|void
	 */
	function dima_get_content_stripped_and_excerpted( $excerpt_length, $content ) {
		$content = apply_filters( 'dima_exclude_content', $content );
		$content = explode( ' ', $content, $excerpt_length + 1 );

		if ( $excerpt_length < count( $content ) ) {
			array_pop( $content );
		}

		$content = implode( ' ', $content );
		$content = preg_replace( '~(?:\[/?)[^/\]]+/?\]~s', '', $content ); // Strip shortcodes and keep the content.
		$content = str_replace( ']]>', ']]&gt;', $content );
		$content = strip_tags( $content );
		$content = str_replace( array( '"', "'" ), array( '&quot;', '&#39;' ), $content );
		$content = trim( $content );

		return $content;
	}
}

/**
 * Post Content class
 */
if ( ! function_exists( 'dima_pots_content_class' ) ):
	/**
	 * [Get content classes based on options selected in customization and meta box']
	 */
	function dima_pots_content_class() {
		
		$output = "entry-content post-content text-start";
		echo( $output );
	}
endif;

/**
 * Link Pages
 */
if ( ! function_exists( 'dima_link_pages' ) ) {
	function dima_link_pages() {
		$defaults = array(
			'before'      => '<div class="page-links clearfix"><span class="page-links-title">' . esc_html__( 'Pages:', 'risala' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		);
		// Displays page-links for paginated posts (i.e. includes the <!--nextpage--> Quicktag one or more times)
		wp_link_pages( $defaults );
	}
}

/**
 * [Checks if the global content layout is "full-width" Or "mini",
 * then it go through all possible pages to determine the correct layout for that template]
 */
function dima_get_content_layout() {
	global $post;
	$default_content_layout = dima_helper::dima_get_option( 'dima_layout_content' );
	$page_template="";
	if(isset($post->ID)){
		$page_template = get_post_meta( $post->ID, '_wp_page_template', true );
	}	

	//with sidebar
	if ( $page_template == 'templates/template-right-sidebar.php') {
		$layout = 'right-sidebar';
	} elseif ( $page_template == 'templates/template-left-sidebar.php') {
		$layout = 'left-sidebar';
	} elseif ( $page_template == 'templates/template-full-width.php') {
		$layout = 'full-width';
	} elseif ( is_404() ) {
		$layout = 'full-width';
	} else {
		$layout = $default_content_layout;
	}

	return $layout;
}

/**
 * Entry Navigation
 */
if ( ! function_exists( 'dima_post_navigation' ) ) {

	function dima_post_navigation() {
		$left_icon      = dima_get_svg_icon( 'ic_arrow_forward' );
		$right_icon     = dima_get_svg_icon( 'ic_arrow_back' );
		$is_ltr         = is_rtl();
		$prev_post      = get_adjacent_post( false, '', false );
		$next_post      = get_adjacent_post( false, '', true );
		$prev_icon_html = ( $is_ltr ) ? $left_icon : $right_icon;
		$next_icon_html = ( $is_ltr ) ? $right_icon : $left_icon;
		$title          = "<span>%title</span>";

		the_post_navigation( array(
			'prev_text'          => wp_kses( $prev_icon_html, dima_helper::dima_get_allowed_html_tag() ) . ' ' . wp_kses( $title, dima_helper::dima_get_allowed_html_tag() ),
			'next_text'          => wp_kses( $title, dima_helper::dima_get_allowed_html_tag() ) . ' ' . wp_kses( $next_icon_html, dima_helper::dima_get_allowed_html_tag() ),
			'screen_reader_text' => '',
		) );
	}
}

/**
 * Used bu about-the-author
 *
 * @param $atts
 *
 * @return string
 */
function dima_get_author_box() {
	global $post, $current_user;

	$title        = esc_html__( 'Author: ', 'risala' );
	$author_id    = get_the_author_meta( 'ID' );
	$description  = get_the_author_meta( 'description', $author_id );
	$display_name = get_the_author_meta( 'display_name', $author_id );
	$author       = get_userdata( $post->post_author );

	if ( ! $author || empty( $author->description ) ) {
		return '';
	}

	?>
    <div class="dima-author-box box-with-shadow clearfix">
        <div class="dima-about-image start-image circle">
			<?php echo get_avatar( $author_id, apply_filters( 'risala_author_bio_avatar', 150 ) ); ?>
        </div>
        <div class="dima-author-info">
            <h4 class="dima-author-name">
				<?php if ( is_archive() ) { ?>
					<?php echo esc_html( sprintf( esc_html__( 'All posts by %s', 'risala' ), get_the_author() ) ); ?>
				<?php } else { ?>
					<?php echo esc_html( sprintf( esc_html__( 'Author: %s', 'risala' ), get_the_author() ) ); ?>
				<?php } ?>
            </h4>
            <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
            <div class="author-profile-links">
                <a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>"><?php echo dima_get_svg_icon( "ic_edit" );
					esc_html_e( 'All Posts', 'risala' ); ?></a>

				<?php if ( $author->user_url ) { ?>
                    <a href="<?php esc_url( $author->user_url ) ?>"><?php echo dima_get_svg_icon( "ic_link" );
						esc_html_e( 'Website', 'risala' ); ?></a>
				<?php } ?>
            </div>
        </div>
    </div>

	<?php
}

/**
 * Site title and logo
 */
if ( ! function_exists( 'dima_title_logo' ) ):
	function dima_title_logo() {
		?>
        <div class="site-title-wrap" itemscope itemtype="http://schema.org/Organization">
            <!-- Use the Site Logo feature, if supported -->
			<?php if ( function_exists( 'the_custom_logo' ) ) {
				if(get_custom_logo() !=''){
				?> 
				<span class="fixed-logo"> 
					<?php the_custom_logo();?> 
				</span> 
				<?php
			    }
			} ?>

            <div class="titles-wrap <?php if ( get_bloginfo( 'description' ) ) {
				echo 'has-description';
			} ?>">
				<?php if ( is_front_page() && is_home() ) { ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                              rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php } else { ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                             rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php } ?>
            </div>
        </div><!-- .site-title-wrap -->
	<?php }endif;

if ( ! function_exists( 'dima_output_primary_navigation' ) ):
	function dima_output_primary_navigation( $is_mobile = false ) {
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'depth'          => 0,
					'container'      => false,
					'menu_class'     => 'dima-nav nav-primary',
					'echo'           => true,
					'before'         => '',
					'after'          => '',
					'link_before'    => '',
					'link_after'     => '',
					'walker'         => new DIMA_Walker_Nav_Menu( $is_mobile ),
				)
			);
		}

		if ( ! has_nav_menu( 'icon' ) && ! has_nav_menu( 'primary' ) ) {
			echo '<ul class="dima-nav-end"><li><a style="margin-left: 30px;margin-right: 30px;" href="'
			     . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">' . esc_html__( 'Assign a Menu', 'risala' ) . '</a>
		         </li>';
		}
	}
endif;

/**
 * Filter the page title for certain pages
 */
function dima_change_archive_title( $title ) {
	if ( is_search() ) {
		$title = sprintf( __( 'Search Results for: %s', 'risala' ), '<span>' . get_search_query() . '</span>' );
	} elseif ( is_404() ) {
		$title = _e( 'Page Not Found', 'risala' );
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'dima_change_archive_title' );

/**
 * Output paeg titles, subtitles and archive descriptions
 */
if ( ! function_exists( 'dima_page_titles' ) ):
	function dima_page_titles() {
		?>
        <div class="page-titles">
			<h1>
				<?php 
				if(is_page()){
					the_title(); 
				}else{
					the_archive_title(); 
				}				
				?>
			</h1>

			<?php
			// Get the page excerpt or archive description for a subtitle
			$archive_description = get_the_archive_description();

			if ( is_archive() && $archive_description ) {
				$subtitle = get_the_archive_description();
			}

			// Show the subtitle
			if ( ! empty( $subtitle ) && ! is_singular( 'post' ) ) { ?>
                <div class="entry-subtitle">
					<?php echo $subtitle; ?>
                </div>
			<?php } ?>

        </div>

		<?php
	}endif;

/**
 * Display search form
 */
if ( ! function_exists( 'dima_get_search_form' ) ):
	function dima_get_search_form( $header = false ) {
		if ( $header ) { ?>
            <div class="header-search-input">
				<?php get_search_form(); ?>
            </div>
			<?php
		} else { ?>
            <div class="gloabl-search-input">
				<?php get_search_form(); ?>
            </div>
		<?php }
	}endif;