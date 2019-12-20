<?php
//*********************************************
//*************** ADD SUPPORT *****************
//*********************************************

add_theme_support('post-thumbnails');


//*********************************************
//************ MAIN STYLESHEETS ***************
//*********************************************

// MAIN STYLESHEET FOR WORDPRESS
wp_enqueue_style( 'style', get_stylesheet_uri() );


// FOUNDATION CSS CODE BASE
function load_foundation() {
	wp_enqueue_style( 'foundation.min', get_template_directory_uri() . '/assets/css/foundation.min.css');
}
add_action('wp_enqueue_scripts', 'load_foundation');


// MY CUSTOM CSS AFTER COMPILATION
function load_main_style() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'load_main_style');


// FONT-AWESOME ICON CSS BASE
function load_font_awesome() {
    wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );
    wp_enqueue_style('Font_Awesome');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');


// FOUNDATION ICONS CSS BASE
function icon_css() {
    wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/assets/fonts/foundation-icons.css');
}
add_action('wp_enqueue_scripts', 'icon_css');



//*********************************************
//************* JAVASCRIPT FILES **************
//*********************************************


// ADD JQUERY
wp_enqueue_script( 'jquery' );


// ADD FOUNDATION'S MINIFIED JS LIBRARY
function foundation_js_loadin() {
wp_enqueue_script( 'foundation.min', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js');
}
add_action('wp_enqueue_scripts', 'foundation_js_loadin');


// ADD FOUNDATION'S WHAT-INPUT LIBRARY
function what_input_loadin() {
wp_enqueue_script( 'what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js');
}
add_action('wp_enqueue_scripts', 'what_input_loadin');


// ADD FOUNDATION'S APP LIBRARY
function app_loadin() {
wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js');
}
add_action('wp_enqueue_scripts', 'app_loadin');

// CUSTOM JAVASCRIPT FILE LOADIN
function custom_js_loadin() {
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action('wp_enqueue_scripts', 'custom_js_loadin');


//*********************************************
//****************** FONTS ********************
//*********************************************


// RALEWAY FONT REGISTRATION
wp_register_style( 'raleway_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700' );
wp_enqueue_style('raleway_font');


// ROBOTO FONT REGISTRATION
wp_register_style( 'roboto_font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" ' );
wp_enqueue_style('roboto_font');


//*********************************************
//************ MENU REGISTRATION **************
//*********************************************

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********************************************
//************** BLOG SETTINGS ****************
//*********************************************

function custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>