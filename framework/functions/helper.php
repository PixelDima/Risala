<?php

/**
 * Define a function to get options and other hellper function.
 *
 * @package Dima Framework
 * @subpackage Functions
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! class_exists( 'dima_helper' ) ) {
	class dima_helper {
		
		static function dima_get_allowed_html_tag( $allowedposttags = array() ) {
			$my_allowed = wp_kses_allowed_html( 'post' );

			$my_allowed['a'] = array_merge( $my_allowed['a'], array(
				'data-filter'   => array(),
				'data-fancybox' => array(),
				'data-caption'  => array(),
			) );

			$my_allowed['svg'] = array(
				'width'       => array(),
				'height'      => array(),
				'viewbox'     => array(),
				'version'     => array(),
				'xmlns'       => array(),
				'xmlns:xlink' => array(),
			);

			$my_allowed['g'] = array(
				'stroke'       => array(),
				'stroke-width' => array(),
				'fill'         => array(),
				'fill-rule'    => array(),
			);

			$my_allowed['path'] = array(
				'd'  => array(),
				'id' => array(),
			);

			$my_allowed['iframe'] = array(
				'src'             => array(),
				'height'          => array(),
				'width'           => array(),
				'frameborder'     => array(),
				'allowfullscreen' => array(),
				'marginheight'    => array(),
				'marginwidth'     => array(),
				'scrolling'       => array(),
				'style'           => array(),
			);
			// form fields - input
			$my_allowed['input'] = array(
				'class' => array(),
				'id'    => array(),
				'name'  => array(),
				'value' => array(),
				'type'  => array(),
			);
			// select
			$my_allowed['select'] = array(
				'class' => array(),
				'id'    => array(),
				'name'  => array(),
				'value' => array(),
				'type'  => array(),
			);
			// select options
			$my_allowed['option'] = array(
				'selected' => array(),
			);
			// style
			$my_allowed['style'] = array(
				'types' => array(),
			);

			return $my_allowed;
		}

		/**
		 * Display edit button above the post to send the current user to edit page.
		 */
		static function dima_get_admin_edit() {
			$buffy = '';
			if ( current_user_can( 'edit_posts' )) {
				$buffy .= '<a class="dima-admin-edit" href="' . get_edit_post_link() . '">' . dima_get_svg_icon( 'ic_edit' ) . '</a>';
			}

			return $buffy;
		}

		static function dima_get_menus_list_options() {
			$menus = wp_get_nav_menus();
			if ( ! empty( $menus ) ) {
				$menus = wp_list_pluck( $menus, 'name', 'term_id' );
			} else {
				$menus = array();
			}

			$menus = array( '' => esc_attr( 'Select Menu', 'risala' ) ) + $menus;

			return $menus;
		}


		static function dima_am_i_true( $boolean ) {
			if ( is_bool( $boolean ) ) {
				return $boolean;
			}
			switch ( $boolean ) {
				case '1':
					return true;
					break;
				case 'true':
					return true;
					break;
				case 'on':
					return true;
					break;
				default:
					return false;
					break;
			}
		}

		/* Check WordPress Version */
		static function dima_wp_version_check( $version = '3.0' ) {
			global $wp_version;
			if ( version_compare( $wp_version, $version, ">=" ) ) {
				return true;
			}

			return false;
		}


		/**
		 * @param        $option
		 * @param string $default
		 *
		 * @return mixed
		 */
		static function dima_get_option( $option, $default = '' ) {
			GLOBAL $dima_customizer_data;
			if ( $default == '' ) {				
				$default = $dima_customizer_data[ $option ];
			}
			$output = get_option( $option, $default );
			if($output == '' && $default != ''){
				$output = $default;
			}

			return apply_filters( 'dima_option_' . $option, $output,$default );
		}


		/**
		 * @param $url
		 *
		 * @return array|false
		 */
		static function dima_get_attachment_info_by_url( $url ) {
			if ( $url == '' ) {
				return array();
			}
			$id   = attachment_url_to_postid( $url );
			$info = wp_get_attachment_image_src( $id );

			return $info;
		}

		/**
		 * @param $url
		 *
		 * @return mixed
		 */
		static function dima_protocol_relative( $url ) {
			$new_url = str_replace( array( 'http://', 'https://' ), '//', $url );

			return $new_url;
		}

		/**
		 * @param $option
		 *
		 * @return mixed
		 */
		static function dima_get_theme( $option, $theme_name = DIMA_THEME_NAME ) {
			$theme_obj = wp_get_theme( $theme_name )->get( $option );

			return apply_filters( 'dima_theme_' . $option, $theme_obj );
		}

		/**
		 * dima_get_current_post_type function.
		 */
		static function dima_get_current_post_type() {
			global $post, $typenow, $current_screen;
			if ( $post && $post->post_type ) {
				return $post->post_type;
			} elseif ( $typenow ) {
				return $typenow;
			} elseif ( $current_screen && $current_screen->post_type ) {
				return $current_screen->post_type;
			} elseif ( isset( $_REQUEST['post_type'] ) ) {
				return sanitize_key( $_REQUEST['post_type'] );
			} elseif ( isset( $_GET['post'] ) && $_GET['post'] != - 1 ) {
				$thispost = get_post( $_GET['post'] );
				if ( $thispost ) {
					return $thispost->post_type;
				} else {
					return null;
				}
			} else {
				return null;
			}
		}

		/**
		 * @param      $content
		 * @param bool $autop
		 *
		 * @return string
		 */
		public static function dima_remove_wpautop( $content, $autop = false ) {
			if ( $autop ) {
				$content = wpautop( preg_replace( '/<\/?p\>/', "\n", $content ) . "\n" );
			}

			return do_shortcode( shortcode_unautop( $content ) );
		}

				/**
		 * @param int    $clm
		 * @param string $post_type
		 * @param string $type
		 *
		 * @return bool|WP_Query
		 */
		static function dima_get_post_related_posts( $clm = 3, $post_type = 'post', $type = 'cat-tag', $post_id = null ) {
			$post = get_post( $post_id );

			if ( ! $post_id && isset( $post->ID ) ) {
				$post_id = $post->ID;
			}

			if ( $post_type == "dima-portfolio" ) {
				$taxonomy = "portfolio-category";
			} else {
				$taxonomy = "category";
			}

			$args = array(
				'post_type'      => $post_type,
				'post__not_in'   => array( $post_id ),
				'posts_per_page' => $clm,
			);

			if ( $taxonomy == "portfolio-category" ) {

				$terms    = get_the_terms( $post_id, $taxonomy );
				$term_ids = array();
				if ( is_array( $terms ) ) {
					foreach ( $terms as $term ) {
						$term_ids[] = $term->term_id;
					}
				}
				$args['tax_query'] = array(
					array(
						'taxonomy' => $taxonomy,
						'field'    => 'id',
						'terms'    => $term_ids,
						'operator' => 'IN',
					),
				);
			}
			switch ( $type ) {

				case 'cat':
					$args['category__in'] = wp_get_post_categories( $post_id );
					break;

				case 'tag':
					$tag_in = wp_get_object_terms( $post_id, 'post_tag', array( 'fields' => 'ids' ) );
					if ( $tag_in && ! is_wp_error( $tag_in ) ) {

						$args['tag__in'] = $tag_in;
					}
					break;

				case 'author':
					if ( isset( $post->post_author ) ) {
						$args['author'] = $post->post_author;
					}
					break;

				case 'cat-tag':
					$args['category__in'] = wp_get_post_categories( $post_id );
					$args['tag__in']      = wp_get_object_terms( $post_id, 'post_tag', array( 'fields' => 'ids' ) );
					break;

				case 'cat-tag-author':
					$args['category__in'] = wp_get_post_categories( $post_id );

					if ( isset( $post->post_author ) ) {
						$args['author'] = $post->post_author;
					}

					$tag_in = wp_get_object_terms( $post_id, 'post_tag', array( 'fields' => 'ids' ) );

					if ( $tag_in && ! is_wp_error( $tag_in ) ) {
						$args['tag__in'] = $tag_in;
					}
					break;

				case 'rand':
				case 'random':
				case 'randomly':
					$args['orderby'] = 'rand';
					break;

			}

			$related_posts = new WP_Query( $args );


			if ( $related_posts->have_posts() ) {
				return $related_posts;
			} else {
				return false;
			}
		}


	}
}

if ( ! function_exists( 'dima_meta' ) ) {
	/**
	 * @since 2.0
	 */
	function dima_meta() {
		global $post;
		?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

		<?php if ( dima_helper::dima_am_i_true( dima_helper::dima_get_option( 'dima_prefetching' ) ) ) { ?>
			<?php if ( is_front_page() ) { ?>
				<?php $my_query = new WP_Query( 'posts_per_page=1' );
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <link rel="prefetch" href="<?php the_permalink(); ?>">
                    <link rel="prerender" href="<?php the_permalink(); ?>">
				<?php endwhile;
				wp_reset_postdata(); ?>
			<?php } elseif ( is_singular() ) { ?>
                <link rel="prefetch" href="<?php echo esc_url( home_url() ); ?>">
                <link rel="prerender" href="<?php echo esc_url( home_url() ); ?>">
			<?php } ?>
		<?php } ?>

        <meta itemprop="name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
        <meta itemprop="url" content="<?php echo esc_url( site_url() ); ?>"/>

		<?php if ( is_singular() ) { ?>
			<?php $user_info = get_userdata( $post->post_author ); ?>
			<?php if ( $user_info && ! empty( $user_info->first_name ) && ! empty( $user_info->last_name ) ) : ?>
                <meta itemprop="creator accountablePerson"
                      content="<?php echo $user_info->first_name . ' ' . $user_info->last_name; ?>"/>
			<?php endif; ?>
		<?php } ?>
		<?php
	}
}

if ( ! class_exists( 'DIMA_Walker_Nav_Menu' ) ) {
	class DIMA_Walker_Nav_Menu extends Walker_Nav_Menu {

		private $is_megamenu = "";
		private $is_masonry = "";
		private $columns = 6;
		private $padding_left = 0;
		private $padding_right = 0;
		private $padding_bottom = 0;
		private $padding_top = 0;
		private $dima_megamenu_title = '';
		private $link_before = '';
		private $link_after = '';
		private $dima_megamenu_icon = '';
		private $dima_megamenu_svg = '';
		private $dima_megamenu_style = '';
		private $dima_megamenu_textclass = '';
		private $dima_megamenu_background = '';
		private $is_mobile = 6;
		private $line_columns_count = 0;

		public function __construct( $is_mobile ) {
			$this->is_mobile = $is_mobile;
		}

		/**
		 * If submenu add class sub-icon to display the arrow icon on the item
		 *
		 * @param object $element
		 * @param array  $children_elements
		 * @param int    $max_depth
		 * @param int    $depth
		 * @param array  $args
		 * @param string $output
		 */
		function display_element(
			$element, &$children_elements, $max_depth,
			$depth = 0, $args, &$output
		) {
			$id_field = $this->db_fields['id'];
			if ( ! empty( $children_elements[ $element->$id_field ] ) ) {
				$element->classes[] = 'sub-icon';
			}
			Walker_Nav_Menu::display_element(
				$element, $children_elements, $max_depth, $depth, $args, $output
			);
		}

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			$indent    = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );
			$sube_icon = '';
			if ( is_array( $item->classes ) ) {
				if ( in_array( "sub-icon", $item->classes ) ) {
					if ( is_rtl() ) {
							$sube_icon = ( $depth > 0 ? '<span class="svg-sub-icon">' . dima_get_svg_icon("ic_keyboard_arrow_left" ) . '</span>' : '' );
					} else {
							$sube_icon = ( $depth > 0 ? '<span class="svg-sub-icon">' . dima_get_svg_icon("ic_keyboard_arrow_right" ) . '</span>' : '' );
					}
				}
			}

			$icon             = '';
			$icon_rtl         = '';
			$prepend          = '';
			$append           = '';
			$image            = '';
			$disable_megamenu = false;

			$this->dima_megamenu_background = get_post_meta(
				$item->ID, '_dima_megamenu_item_background', true
			);
			if ( $this->dima_megamenu_background != "" ) {
				$image_id = attachment_url_to_postid(
					$this->dima_megamenu_background
				);
				list(
					$this->dima_megamenu_background
					)
					= wp_get_attachment_image_src( $image_id, "full" );
				$image
					= "<span class='custom-item-{$item->ID} dima-custom-item-image'><img src='"
					  . esc_url( $this->dima_megamenu_background ) . "' alt='"
					  . apply_filters( 'the_title', $item->title, $item->ID )
					  . "'/></span>";
			}

			$depth_classes     = array(
				( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
				'menu-item-depth-' . $depth
			);
			$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

			// Passed classes.
			$classes                       = empty( $item->classes ) ? array()
				: (array) $item->classes;
			$class_names                   = esc_attr(
				implode(
					' ', apply_filters(
						'nav_menu_css_class', array_filter( $classes ), $item
					)
				)
			);
			$this->dima_megamenu_style     = esc_attr(
				get_post_meta( $item->ID, '_dima_megamenu_item_style', true )
			);
			$this->dima_megamenu_textclass = esc_attr(
				get_post_meta( $item->ID, '_dima_megamenu_item_textclass', true )
			);

			if ( ! $disable_megamenu ) {

				if ( $depth === 0 ) {
					$this->line_columns_count = 0;

					$this->is_megamenu    = get_post_meta(
						$item->ID, '_dima_megamenu_item_ismega', true
					);
					$this->is_masonry     = get_post_meta(
						$item->ID, '_dima_megamenu_item_masonry', true
					);
					$this->columns        = get_post_meta(
						$item->ID, '_dima_megamenu_item_columns', true
					);
					$this->padding_left   = floatval(
						get_post_meta(
							$item->ID, '_dima_megamenu_item_padding_left', true
						)
					);
					$this->padding_right  = floatval(
						get_post_meta(
							$item->ID, '_dima_megamenu_item_padding_right', true
						)
					);
					$this->padding_top    = floatval(
						get_post_meta(
							$item->ID, '_dima_megamenu_item_padding_top', true
						)
					);
					$this->padding_bottom = floatval(
						get_post_meta(
							$item->ID, '_dima_megamenu_item_padding_bottom',
							true
						)
					);
					$this->padding_top    = ( $this->padding_top == 0 ) ? 20
						: $this->padding_top;
					$this->padding_bottom = ( $this->padding_bottom == 0 ) ? 20
						: $this->padding_bottom;

					if ( $this->is_megamenu == "enabled" ) {
						$class_names .= " dima-mega-menu";
						if ( $this->is_masonry == "enabled" ) {
							$class_names .= " dima-megamenu-masonry";
						}
					}

					$this->dima_megamenu_title = get_post_meta(
						$item->ID, '_dima_megamenu_item_title', true
					);

				}

				$this->dima_megamenu_icon = get_post_meta(
					$item->ID, '_dima_megamenu_item_icon', true
				);
				$this->dima_megamenu_svg  = get_post_meta(
					$item->ID, '_dima_megamenu_item_svg', true
				);
			} else {
				$this->is_megamenu        = 'disabled';
				$this->dima_megamenu_icon = get_post_meta(
					$item->ID, '_dima_megamenu_item_icon', true
				);
				$this->dima_megamenu_svg  = get_post_meta(
					$item->ID, '_dima_megamenu_item_svg', true
				);
				$this->line_columns_count = 0;
			}
			//add icon
			if ( $this->dima_megamenu_svg != "" ) {
				if ( ! is_rtl() ) {
					$icon     = '<span class="menu_icon_item">'
					            . dima_get_svg_icon(
						            esc_attr( $this->dima_megamenu_svg )
					            ) . '</span>';
					$icon_rtl = "";
				} else {
					$icon_rtl = '<span class="menu_icon_item">'
					            . dima_get_svg_icon( esc_attr( $this->dima_megamenu_svg ) )
					            . '</span>';
					$icon     = '';
				}
			} else if ( $this->dima_megamenu_icon != "" ) {
				if ( ! is_rtl() ) {
					$icon     = '<span class="menu_icon_item">' . do_shortcode(
							'[icon class="' . esc_attr(
								$this->dima_megamenu_icon
							) . '"]'
						) . '</span>';
					$icon_rtl = "";
				} else {
					$icon_rtl = '<span class="menu_icon_item">' . do_shortcode(
							'[icon class="' . esc_attr(
								$this->dima_megamenu_icon
							) . '"]'
						) . '</span>';
					$icon     = '';
				}
			}

			//! add icon
			if ( $depth === 1 && $this->is_megamenu == "enabled" ) {
				$menu_id     = '';
				$new_line_li = '';

				if ( $this->line_columns_count == $this->columns ) {
					$new_line_li              = '<li class="dima-megamenu-new-row"></li>';
					$this->line_columns_count = 0;
				}
				$this->line_columns_count ++;
				if ( ! $this->is_mobile ) {
					$menu_id = 'id="nav-menu-item-' . $item->ID . '"';
				}
				$output .= $indent . $new_line_li . '<li ' . $menu_id
				           . ' class="dima-megamenu-item ' . $depth_class_names . ' '
				           . $class_names . '" style="width: 260px;">';

				$attributes = ! empty( $item->attr_title ) ? ' title="'
				                                             . esc_attr( $item->attr_title ) . '"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr(
						$item->target
					) . '"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr(
						$item->xfn
					) . '"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr(
						$item->url
					) . '"' : '';
				$attributes .= '';

				if ( $this->dima_megamenu_title != 'disabled' ) {
					$output .= '<a ' . $attributes . ' class="dima-menu-title">'
					           . $icon;
					$output .= $args->link_before . $prepend . apply_filters(
							'the_title', $this->_parse_string( $item->title ),
							$item->ID
						) . $append;
					$output .= $args->link_after;
					$output .= $icon_rtl
					           . '</a>';
				} else {
					$output .= '<a' . $attributes . '>' . $icon;
					$output .= $args->link_before . $prepend . apply_filters(
							'the_title', $this->_parse_string( $item->title ),
							$item->ID
						) . $append;

					$output .= $args->link_after;
					$output .= $icon_rtl . '</a>';
				}
				$item_output = is_object( $args ) ? $args->after : '';
				// Build HTML output and pass through the proper filter.
				$output .= apply_filters(
					'DIMA_Walker_Nav_Menu', $item_output, $item, $depth, $args
				);

			} else {
				// Build HTML.
				$menu_id = '';
				if ( ! $this->is_mobile ) {
					$menu_id = 'id="nav-menu-item-' . $item->ID . '"';
				}

				$data_columns = '';
				if ( $this->is_megamenu == "enabled" ) {
					$data_columns = ' data-megamenu-columns="' . $this->columns
					                . '" ';
					$data_columns .= ' data-megamenu-padding="'
					                 . $this->padding_top . ',' . $this->padding_right . ','
					                 . $this->padding_bottom . ',' . $this->padding_left
					                 . '" ';
				}

				$output  .= $indent . '<li ' . $menu_id . ' class="'
				            . $depth_class_names . ' ' . $class_names . '" '
				            . $data_columns . '>';
				$classes = '';

				// Link attributes.
				$attributes = ! empty( $item->attr_title ) ? ' title="'
				                                             . esc_attr( $item->attr_title ) . '"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr(
						$item->target
					) . '"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr(
						$item->xfn
					) . '"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_url(
						$item->url
					) . '"' : '';
				$attributes .= '';

				if ( $depth === 0 ) {
					$classes .= $this->dima_megamenu_textclass . ' ';
					if ( $this->dima_megamenu_style ) {
						$classes .= sprintf(
							'dima-menu-span dima-button fill %s', str_replace(
								'fusion-', '', $this->dima_megamenu_style
							)
						);
					} else {
						$classes .= 'dima-menu-span';
					}

					$item_output_before = sprintf(
						'<span class="%s">', $classes
					);
					$item_output_after  = '</span>';
					// Normal menu item
				} else {
					$item_output_before = sprintf(
						'<span class="%s">', $classes
					);
					$item_output_after  = '</span>';
				}

				$output      .= '<a' . $attributes . '>';
				$output      .= $this->link_before . $item_output_before . $icon
				                . apply_filters(
					                'the_title', $this->_parse_string( $item->title ),
					                $item->ID
				                ) . $icon_rtl . $item_output_after;
				$output      .= $this->link_after;
				$output      .= $sube_icon;
				$output      .= '</a>' . $image;
				$item_output = is_object( $args ) ? $args->after : '';

				// Build HTML output and pass through the proper filter.
				$output .= apply_filters(
					'DIMA_Walker_Nav_Menu', $item_output, $item, $depth, $args
				);
			}
		}

		/**
		 * @param $string
		 *
		 * @return string
		 */
		protected function _parse_string( $string ) {
			return nl2br( $string );
		}

	}
}
