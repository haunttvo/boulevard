<?php
/* add stylesheet wordpress */
function wp_stylesheet(){
    wp_enqueue_style( 'fontroboto', 'https://fonts.googleapis.com/css?family=Roboto&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );
    wp_enqueue_style( 'bootstrapmincss', get_template_directory_uri() . '/public/css/bootstrap.min.css' );
    wp_enqueue_style( 'stylecss', get_template_directory_uri() . '/public/css/style.css' );
    wp_enqueue_script('jqueryjs', 'https://code.jquery.com/jquery-3.1.0.js');
    wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('boostrapminjs', get_template_directory_uri() . '/public/js/bootstrap.min.js' );
    wp_enqueue_script('mainjs', get_template_directory_uri().'/public/js/main.js');
}
add_action('wp_enqueue_scripts', 'wp_stylesheet');

function add_menu_support() {
    add_theme_support( 'menus');
    add_theme_support( 'custom-logo' );
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
    ) );
}
add_action( 'after_setup_theme', 'add_menu_support' );

function ahirinit(){
    require_once 'core/posttype.php';

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    define('logosrc', $logo[0]);

    require_once 'core/shortcode.php';
}
add_action('init', 'ahirinit');

