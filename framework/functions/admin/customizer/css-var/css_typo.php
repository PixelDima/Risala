<?php 
GLOBAL $dima_customizer_data;
$is_custom_font = dima_helper::dima_am_i_true( dima_helper::dima_get_option( 'dima_custom_font' ) );
?>
<?php if ( $var_body_text_color !== $dima_customizer_data["dima_body_text_color"] ) { ?>
    body, p {
    color: <?php echo esc_attr( $var_body_text_color ); ?>;
    }
<?php } ?>

<?php if ( $var_body_link_color !== $dima_customizer_data["dima_body_link_color"] ) { ?>
    .tagcloud a, 
    .tags a,
    a,
    div.widget a{
    color: <?php echo esc_attr( $var_body_link_color ); ?>;
    }
<?php } ?>

<?php if ( $var_body_link_color_hover !== $dima_customizer_data["dima_body_link_color_hover"] ) { ?>
    div.widget a:hover,
    .tagcloud a:hover, 
    .tags a:hover,
    a:hover{
    color:<?php echo esc_attr( $var_body_link_color_hover ) ?>;
    }
<?php } ?>

<?php if ( $var_body_font_weight_selected !== $dima_customizer_data["dima_body_weight_selected"] ) { ?>
    body,p {
    font-weight: <?php echo esc_attr( $var_body_font_weight_selected ); ?>;
    }
<?php } ?>

<?php if ( ( $var_body_font_family !== $dima_customizer_data["dima_body_font_list"] ) && $is_custom_font ) { ?>
    p, html{
	<?php
	echo dima_get_font_family_and_weight( $var_body_font_family, $var_body_font_weight_selected ); ?>;
    }
<?php } ?>
<?php if ( $var_body_font_size !== $dima_customizer_data["dima_body_text_size"] ) { ?>
    p, body{
    font-size: <?php echo esc_attr( $var_body_font_size )?>;
    }
<?php } ?>

<?php /*All headling*/ ?>

<?php
if ( $var_heading_font_uppercase !== $dima_customizer_data["dima_heading_text_style"] ) { ?>
    article.post header .entry-title a,
    h1, h2, h3, h4, h5, h6{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing !== $dima_customizer_data["dima_heading_letter_spacing"] ) { ?>
    h1, h2, h3, h4, h5, h6{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color !== $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h1, h2, h3, h4, h5, h6
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected !== $dima_customizer_data["dima_heading_weight_selected"] ) { ?>
    .article.post header .entry-title a,
    h1, h2, h3, h4, h5, h6{
    font-weight: <?php echo esc_attr( $var_heading_font_selected ); ?>;
    }
<?php } ?>

<?php if ( ( ( $var_heading_font_family !== $dima_customizer_data["dima_heading_font_list"] ) || ( $var_heading_font_selected !== $dima_customizer_data["dima_heading_weight_selected"] ) ) && $is_custom_font ) { ?>
    h1, h2, h3, h4, h5, h6{
	<?php
	echo dima_get_font_family_and_weight( $var_heading_font_family_1, $var_heading_font_selected ); ?>;
    }
<?php } ?>


<?php if ( $var_heading_font_siz !== $dima_customizer_data["dima_h_all_text_size"] ) { ?>
    h1, h2, h3, h4, h5, h6{
    font-size: <?php echo esc_attr( $var_heading_font_siz ); ?>;
    }
<?php } ?>

<?php /*!All headling*/ ?>

<?php
if ( $var_heading_font_uppercase_1 !== $dima_customizer_data["dima_heading_text_style_1"] ) { ?>
    h1{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_1 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_1 !== $dima_customizer_data["dima_heading_letter_spacing_1"] ) { ?>
    h1{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_1 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_1 !== $dima_customizer_data["dima_heading_text_color_1"] ) { ?>
    h1, h1 a, a h1, h1 a:hover, a:hover h1
    {
    color:<?php echo esc_attr( $var_heading_font_color_1 ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_1 !== $dima_customizer_data["dima_heading_weight_selected_1"] ) { ?>
    .article.post header .entry-title a,
    h1{
    font-weight: <?php echo esc_attr( $var_heading_font_selected_1 ); ?>;
    }
<?php } ?>

<?php if ( ( ( $var_heading_font_family_1 !== $dima_customizer_data["dima_heading_font_list_1"] ) || ( $var_heading_font_selected_1 !== $dima_customizer_data["dima_heading_weight_selected_1"] ) ) && $is_custom_font ) { ?>
    h1{
	<?php
	echo dima_get_font_family_and_weight( $var_heading_font_family_1, $var_heading_font_selected_1 ); ?>;
    }
<?php } ?>


<?php if ( $var_heading_font_siz_1 !== $dima_customizer_data["dima_h1_text_size"] ) { ?>
    h1{
    font-size: <?php echo esc_attr( $var_heading_font_siz_1 ); ?>;
    }
<?php } ?>

<?php
if ( $var_heading_font_uppercase_2 !== $dima_customizer_data["dima_heading_text_style_2"] ) { ?>
    h2{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_2 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_2 !== $dima_customizer_data["dima_heading_letter_spacing_2"] ) { ?>
    h2{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_2 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_2 !== $dima_customizer_data["dima_heading_text_color_2"] ) { ?>
    h2,h2 a, a h2, h2 a:hover,a:hover h2
    {
    color:<?php echo esc_attr( $var_heading_font_color_2 ) ?>;
    }
<?php } elseif ( $var_heading_font_color_2 == $dima_customizer_data["dima_heading_text_color_2"] && $var_heading_font_color == $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h2,h2 a, a h2, h2 a:hover,a:hover h2
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_2 !== $dima_customizer_data["dima_heading_weight_selected_2"] ) { ?>
    h2 {
    font-weight: <?php echo esc_attr( $var_heading_font_selected_2 ); ?>;
    }
<?php } ?>

<?php if ( ( $var_heading_font_family_2 !== $dima_customizer_data["dima_heading_font_list_2"] ) && $is_custom_font ) { ?>
    h2 {
	<?php echo dima_get_font_family_and_weight( $var_heading_font_family_2, $var_heading_font_selected_2 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_siz_2 !== $dima_customizer_data["dima_h2_text_size"] ) { ?>
    h2{
    font-size: <?php echo esc_attr( $var_heading_font_siz_2 ); ?>;
    }
<?php } ?>

<?php
if ( $var_heading_font_uppercase_3 !== $dima_customizer_data["dima_heading_text_style_3"] ) { ?>
    h3{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_3 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_3 !== $dima_customizer_data["dima_heading_letter_spacing_3"] ) { ?>
    h3{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_3 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_3 !== $dima_customizer_data["dima_heading_text_color_3"] ) { ?>
    h3,h3 a, a h3, h3 a:hover,a:hover h3
    {
    color:<?php echo esc_attr( $var_heading_font_color_3 ) ?>;
    }
<?php } elseif ( $var_heading_font_color_3 == $dima_customizer_data["dima_heading_text_color_3"] && $var_heading_font_color == $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h3,h3 a, a h3 h3 a:hover,a:hover h3
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_3 !== $dima_customizer_data["dima_heading_weight_selected_3"] ) { ?>
    h3 {
    font-weight: <?php echo esc_attr( $var_heading_font_selected_3 ); ?>;
    }
<?php } ?>

<?php if ( ( $var_heading_font_family_3 !== $dima_customizer_data["dima_heading_font_list_3"] ) && $is_custom_font ) { ?>
    h3 {
	<?php echo dima_get_font_family_and_weight( $var_heading_font_family_3, $var_heading_font_selected_3 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_siz_3 !== $dima_customizer_data["dima_h3_text_size"] ) { ?>
    h3{
    font-size: <?php echo esc_attr( $var_heading_font_siz_3 ); ?>;
    }
<?php } ?>

<?php
if ( $var_heading_font_uppercase_4 !== $dima_customizer_data["dima_heading_text_style_4"] ) { ?>
    h4{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_4 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_4 !== $dima_customizer_data["dima_heading_letter_spacing_4"] ) { ?>
    h4{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_4 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_4 !== $dima_customizer_data["dima_heading_text_color_4"] ) { ?>
    h4,h4 a, a h4, h4 a:hover,a:hover h4
    {
    color:<?php echo esc_attr( $var_heading_font_color_4 ) ?>;
    }
<?php } elseif ( $var_heading_font_color_4 == $dima_customizer_data["dima_heading_text_color_4"] && $var_heading_font_color == $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h4,h4 a, a h4, h4 a:hover,a:hover h4
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_4 !== $dima_customizer_data["dima_heading_weight_selected_4"] ) { ?>
    h4 {
    font-weight: <?php echo esc_attr( $var_heading_font_selected_4 ); ?>;
    }
<?php } ?>

<?php if ( ( $var_heading_font_family_4 !== $dima_customizer_data["dima_heading_font_list_4"] ) && $is_custom_font ) { ?>
    h4 {
	<?php echo dima_get_font_family_and_weight( $var_heading_font_family_4, $var_heading_font_selected_4 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_siz_4 !== $dima_customizer_data["dima_h4_text_size"] ) { ?>
    h4{
    font-size: <?php echo esc_attr( $var_heading_font_siz_4 ); ?>;
    }
<?php } ?>

<?php
if ( $var_heading_font_uppercase_5 !== $dima_customizer_data["dima_heading_text_style_5"] ) { ?>
    h5{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_5 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_5 !== $dima_customizer_data["dima_heading_letter_spacing_5"] ) { ?>
    h5{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_5 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_5 !== $dima_customizer_data["dima_heading_text_color_5"] ) { ?>
    h5,h5 a, a h5, h5 a:hover,a:hover h5
    {
    color:<?php echo esc_attr( $var_heading_font_color_5 ) ?>;
    }
<?php } elseif ( $var_heading_font_color_5 == $dima_customizer_data["dima_heading_text_color_2"] && $var_heading_font_color == $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h5,h5 a, a h5, h5 a:hover,a:hover h5
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_5 !== $dima_customizer_data["dima_heading_weight_selected_5"] ) { ?>
    h5 {
    font-weight: <?php echo esc_attr( $var_heading_font_selected_5 ); ?>;
    }
<?php } ?>

<?php if ( ( $var_heading_font_family_5 !== $dima_customizer_data["dima_heading_font_list_5"] ) && $is_custom_font ) { ?>
    h5 {
	<?php echo dima_get_font_family_and_weight( $var_heading_font_family_5, $var_heading_font_selected_5 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_siz_5 !== $dima_customizer_data["dima_h5_text_size"] ) { ?>
    h5{
    font-size: <?php echo esc_attr( $var_heading_font_siz_5 ); ?>;
    }
<?php } ?>

<?php
if ( $var_heading_font_uppercase_6 !== $dima_customizer_data["dima_heading_text_style_6"] ) { ?>
    h6{
	<?php echo esc_attr( dima_text_style( $var_heading_font_uppercase_6 ) ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_letter_spacing_6 !== $dima_customizer_data["dima_heading_letter_spacing_6"] ) { ?>
    h6{
    letter-spacing:<?php echo esc_attr( $var_heading_letter_spacing_6 ); ?>;
    }
<?php } ?>


<?php if ( $var_heading_font_siz_6 !== $dima_customizer_data["dima_h6_text_size"] ) { ?>
    h6{
    font-size: <?php echo esc_attr( $var_heading_font_siz_6 ); ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_color_6 !== $dima_customizer_data["dima_heading_text_color_6"] ) { ?>
    h6,h6 a, a h6, h6 a:hover,a:hover h6
    {
    color:<?php echo esc_attr( $var_heading_font_color_6 ) ?>;
    }
<?php } elseif ( $var_heading_font_color_6 == $dima_customizer_data["dima_heading_text_color_6"] && $var_heading_font_color == $dima_customizer_data["dima_heading_text_color"] ) { ?>
    h6,h6 a, a h6, h6 a:hover,a:hover h6
    {
    color:<?php echo esc_attr( $var_heading_font_color ) ?>;
    }
<?php } ?>

<?php if ( $var_heading_font_selected_6 !== $dima_customizer_data["dima_heading_weight_selected_6"] ) { ?>
    h6 {
    font-weight: <?php echo esc_attr( $var_heading_font_selected_6 ); ?>;
    }
<?php } ?>

<?php if ( ( $var_heading_font_family_6 !== $dima_customizer_data["dima_heading_font_list_6"] ) && $is_custom_font ) { ?>
    h6 {
	<?php echo dima_get_font_family_and_weight( $var_heading_font_family_6, $var_heading_font_selected_6 ); ?>;
    }
<?php } ?>

<?php /*Logo Typo*/ ?>
<?php 
if ( the_custom_logo() == '' ) { ?>

    <?php if($var_logo_font_size !== $dima_customizer_data["dima_logo_text_size"]){ ?>
        .dima-navbar-wrap.desk-nav .dima-navbar .site-title a,
        .dima-navbar-wrap.mobile-nav .dima-navbar .site-title a{
        font-size:<?php echo esc_attr( $var_logo_font_size ); ?>;
    }
    <?php } ?>

    <?php if($var_logo_letter_spacing !== $dima_customizer_data["dima_logo_letter_spacing"]){ ?>
        .dima-navbar-wrap.desk-nav .dima-navbar .site-title a,
        .dima-navbar-wrap.mobile-nav .dima-navbar .site-title a{
        letter-spacing:<?php echo esc_attr( $var_logo_letter_spacing ); ?>;
    }
    <?php } ?>

    <?php if($var_logo_font_uppercase !== $dima_customizer_data["dima_logo_text_style"]){ ?>
        .dima-navbar-wrap.desk-nav .dima-navbar .site-title a,
        .dima-navbar-wrap.mobile-nav .dima-navbar .site-title a{
        <?php echo esc_attr( dima_text_style( $var_logo_font_uppercase ) ); ?>;
    }
    <?php } ?>

    <?php if($var_logo_font_family !== $dima_customizer_data["dima_logo_font_list"]){ ?>
    .dima-navbar-wrap.desk-nav .dima-navbar .site-title a,
    .dima-navbar-wrap.mobile-nav .dima-navbar .site-title a{
        <?php echo dima_get_font_family_and_weight( $var_logo_font_family, $var_logo_font_selcted ) ?>
    }
    <?php } ?>

    <?php if($var_logo_font_color !== $dima_customizer_data["dima_logo_text_color"]){ ?>
    .dima-navbar-wrap.desk-nav .dima-navbar .site-title a,
    .dima-navbar-wrap.mobile-nav .dima-navbar .site-title a{
        color:<?php echo esc_attr( $var_logo_font_color ) ?> ;
    }
    <?php } ?>
<?php }
?>
<?php /*!Logo Typo*/ ?>

<?php /*!button Typo*/ ?>
<?php if ( $var_btn_font_size !== $dima_customizer_data["dima_btn_text_size"] ) { ?>
    .widget .button, [type="submit"], .dima-button{
    font-size: <?php echo esc_attr( $var_btn_font_size ); ?>;
    }
<?php } ?>
<?php if ( ( $var_btn_font_family !== $dima_customizer_data["dima_btn_font_list"] ) && $is_custom_font ) { ?>
    .widget .button, [type="submit"], .dima-button {
	<?php echo dima_get_font_family_and_weight( $var_btn_font_family, $var_btn_font_weight_selected ); ?>;
    }
<?php } ?>
<?php /*!button Typo*/ ?>

<?php /*!Menu Typo*/ ?>

<?php if ( $var_nav_font_uppercase !== $dima_customizer_data["dima_navbar_text_style"] ) { ?>
    .dima-navbar-wrap.desk-nav .dima-navbar nav .dima-nav > li > a{
        <?php echo esc_attr( dima_text_style( $var_nav_font_uppercase ) ) ?>;
    }
<?php } ?>

<?php if ( $var_nav_font_family !== $dima_customizer_data["dima_navbar_font_list"] ) { ?>
    .dima-navbar-wrap{
	<?php echo dima_get_font_family_and_weight( $var_nav_font_family, $var_nav_font_slected ) ?>
    }
<?php } ?>

<?php /*!Menu Typo*/ ?>