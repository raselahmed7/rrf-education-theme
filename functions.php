<?php

// PPM Quickstart theme supports
if ( ! function_exists( 'rrf_education_theme_supports' ) ) :
function rrf_education_theme_supports(){
    
    load_theme_textdomain( 'rrf-education', get_template_directory() . '/languages' );
    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    
	register_nav_menus( array(
		'main-menu'   => __( 'Primary menu', 'rrf-education' ),
	) );    
}
endif;
add_action('after_setup_theme', 'rrf_education_theme_supports');


// Calling Theme files
function rrf_education_theme_files(){
    
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'rrf-education-theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );
    
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'rrf-education-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20120206', true );
}
add_action('wp_enqueue_scripts', 'rrf_education_theme_files'); 


// Includes
include_once('inc/widgets.php');
include_once('inc/shortcodes.php');
include_once('inc/custom-posts.php');
include_once('inc/codestar-framework/cs-framework.php');
include_once('inc/theme-options-and-metabox.php');
include_once('inc/required-plugins.php');


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active('kingcomposer/kingcomposer.php') ) {
    include_once('inc/kc-blocks.php');
}


add_action( 'wp_enqueue_scripts', function () {

wp_enqueue_style( 'rrf-education-custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css' );

$color_1 = cs_get_option('color_1');
$color_2 = cs_get_option('color_2');
$color_3 = cs_get_option('color_3');
$color_4 = cs_get_option('color_4');
$color_5 = cs_get_option('color_5');
$color_6 = cs_get_option('color_6');
$color_7 = cs_get_option('color_7');

$custom_css = "
.mainmenu li:nth-child(1):hover > a,
.mainmenu li:nth-child(1) ul,
.kc-elm.promo-boxes .kc-elm:nth-child(1) > .kc-col-container,
.mainmenu li:nth-child(1).current_page_ancestor,
.mainmenu li:nth-child(1).current_page_item {background-color: $color_1;}
.mainmenu li:nth-child(1) {border-color: $color_1;}

.mainmenu li:nth-child(2):hover > a,
.mainmenu li:nth-child(2) ul,
.kc-elm.promo-boxes .kc-elm:nth-child(2) > .kc-col-container,
.mainmenu li:nth-child(2).current_page_ancestor,
.mainmenu li:nth-child(2).current_page_item {background-color: $color_2;}
.mainmenu li:nth-child(2) {border-color: $color_2;}

.mainmenu li:nth-child(3):hover > a,
.mainmenu li:nth-child(3) ul,
.kc-elm.promo-boxes .kc-elm:nth-child(3) > .kc-col-container,
.mainmenu li:nth-child(3).current_page_ancestor,
.mainmenu li:nth-child(3).current_page_item {background-color: $color_3;}
.mainmenu li:nth-child(3) {border-color: $color_3;}

.mainmenu li:nth-child(4):hover > a,
.mainmenu li:nth-child(4) ul,
.kc-elm.promo-boxes .kc-elm:nth-child(4) > .kc-col-container,
.mainmenu li:nth-child(4).current_page_ancestor,
.mainmenu li:nth-child(4).current_page_item {background-color: $color_4;}
.mainmenu li:nth-child(4) {border-color: $color_4;}

.mainmenu li:nth-child(5):hover > a,
.mainmenu li:nth-child(5) ul,
.mainmenu li:nth-child(5).current_page_ancestor,
.mainmenu li:nth-child(5).current_page_item {background-color: $color_5;}
.mainmenu li:nth-child(5) {border-color: $color_5;}

.mainmenu li:nth-child(6):hover > a,
.mainmenu li:nth-child(6) ul,
.mainmenu li:nth-child(6).current_page_ancestor,
.mainmenu li:nth-child(6).current_page_item {background-color: $color_6;}
.mainmenu li:nth-child(6) {border-color: $color_6;}

.mainmenu li:nth-child(7):hover > a,
.mainmenu li:nth-child(7) ul,
.mainmenu li:nth-child(7).current_page_ancestor,
.mainmenu li:nth-child(7).current_page_item {background-color: $color_7;}
.mainmenu li:nth-child(7) {border-color: $color_7;}


";

wp_add_inline_style( 'rrf-education-custom-style', $custom_css );

} );