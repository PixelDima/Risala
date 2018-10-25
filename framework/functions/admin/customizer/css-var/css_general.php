<?php
global $dima_customizer_data;

if ($var_container_width != $dima_customizer_data["dima_content_width"]) {?>
    .container{
    width: <?php echo esc_attr($var_container_width) ?>%;
    }
<?php }?>

<?php if ($var_container_max_width != $dima_customizer_data["dima_content_max_width"]) {?>
    .container{
    max-width: <?php echo esc_attr($var_container_max_width) ?>px;
    }
<?php }?>


<?php if ($var_dima_sidebar_width > $dima_customizer_data["dima_sidebar_width"]) {
    $mrg = 30;
    ?>
	<?php if (!is_rtl()) {?>
        body .left-content-sidebar-active .dima-sidebar{
        margin-right: <?php echo esc_attr($mrg * 100) / esc_attr($var_container_max_width) ?>%;
        }
        body .right-content-sidebar-active .dima-sidebar{
        margin-left: <?php echo esc_attr($mrg * 100) / esc_attr($var_container_max_width) ?>%;
        }
	<?php } else {?>
        body .left-content-sidebar-active .dima-sidebar{
        margin-left: <?php echo esc_attr($mrg * 100) / esc_attr($var_container_max_width) ?>%;
        }
        body .right-content-sidebar-active .dima-sidebar{
        margin-right: <?php echo esc_attr($mrg * 100) / esc_attr($var_container_max_width) ?>%;
        }

	<?php }?>

    body .dima-sidebar {
    width: <?php echo esc_attr(($var_dima_sidebar_width * 100) / $var_container_max_width) ?>%;
    }
    body .dima-container {
    width:  <?php echo esc_attr((($var_container_max_width - $var_dima_sidebar_width - $mrg) * 100) / $var_container_max_width) ?>%;
    }
<?php }?>

<?php /* Main Color*/ ?>
<?php
if ( $var_main_color !== $dima_customizer_data["dima_main_color"] ) {
    ?>
    .dima-navbar-wrap .dima-nav > li > a:hover,
    .dima-navbar-wrap .dima-nav > li.current-menu-item > a{
      border-color:<?php echo esc_attr( $var_main_color ) ?>;
    }
    
    .dima-site-cards article.sticky .entry-post-content::before{
      border-left-color:<?php echo esc_attr( $var_main_color ) ?>;
    }

    article.post .meta-cat,
    #page input[type="button"], 
    #page input[type="reset"], 
    #page input[type="submit"], 
    .button, .comment-navigation a, 
    #page #infinite-handle button{
        background:<?php echo esc_attr( $var_main_color ) ?>;
        color: <?php echo DIMA_Style::dima_light_or_dark( $var_main_color, false, '#222222', '#FFFFFF' ); ?>
    }

    #page input[type="button"]:hover, 
    #page input[type="reset"]:hover, 
    #page input[type="submit"]:hover, 
    .button, .comment-navigation a:hover, 
    #page #infinite-handle button:hover{
        background:<?php echo DIMA_Style::dima_adjustBrightness( $var_main_color, -20 ) ?>;
    }

    h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover{
      text-decoration-color:<?php echo esc_attr( $var_main_color ) ?>;
    }

    .widget .button:hover, [type="submit"]:hover, .fill:hover{
    background-color: <?php echo DIMA_Style::dima_adjustBrightness( $var_main_color, 30 ) ?>
    }

    ::selection {
    background-color: <?php echo esc_attr( $var_main_color ) ?>
    color:#FFFFFF;
    }

    ::-moz-selection {
    background: <?php echo esc_attr( $var_main_color ) ?>
    color:#FFFFFF;
    }
	<?php
}
?>
<?php /* !Main Color*/ ?>

<?php /* body background*/ ?>
<?php
if ( $var_dima_body_background_color !== $dima_customizer_data["dima_body_background_color"] ) {
    ?>
    body.dima-site-cards {
    background-color: <?php echo esc_attr( $var_dima_body_background_color ) ?>
    }
    <?php
} 
if ( $var_dima_body_background_color_clean !== $dima_customizer_data["dima_body_background_color_clean"] ) {
    ?>
    body.dima-site-clean {
    background-color: <?php echo esc_attr( $var_dima_body_background_color_clean ) ?>
    }
    <?php
} 

?>
<?php /* !body background*/ ?>