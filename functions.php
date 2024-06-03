<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);
$weblink = 'Nwabisa';

function load_stylesheets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_stylesheet_directory_uri() . '/css/animate.css', [], 1, 'all');
    wp_enqueue_style('animate');

    wp_register_style('owl', get_stylesheet_directory_uri() . '/css/owl.carousel.css', [], 1, 'all');
    wp_enqueue_style('owl');

    wp_register_style('theme', get_stylesheet_directory_uri() . '/css/owl.theme.green.min.css', [], 1, 'all');
    wp_enqueue_style('theme');

    wp_register_style('carousel', get_stylesheet_directory_uri() . '/css/carousel.css', [], 1, 'all');
    wp_enqueue_style('carousel');

    wp_register_style('nice-hamburger', get_stylesheet_directory_uri() . '/css/nice-hamburger.css', [], 1, 'all');
    wp_enqueue_style('nice-hamburger');

    wp_register_style('PoppinsFont', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900', [], 1, 'all');
    wp_enqueue_style('PoppinsFont');

    wp_register_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], 1, 'all');
    wp_enqueue_style('font-awesome');

    /* wp_register_style('coreui', 'https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/css/coreui.min.css', [], 1, 'all');
    wp_enqueue_style('coreui'); */

    wp_register_style('customstyle', get_stylesheet_directory_uri() . '/css/customstyle.css', [], 1, 'all');
    wp_enqueue_style('customstyle');

    
     wp_register_style('footerstyle', get_stylesheet_directory_uri().'/css/footer.css',  [], 1, 'all');
     wp_enqueue_style('footerstyle');
     wp_register_style('navbarstyle', get_stylesheet_directory_uri().'/css/navbarcss.css',  [], 1, 'all');
     wp_enqueue_style('navbarstyle');
     wp_register_style('bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"', [], 1, 'all');
     wp_enqueue_style('bootstrapicons');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function addjs()
{

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', [], 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', [], 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', [], 1, 1, 1);
    wp_enqueue_script('owl');

    wp_enqueue_script('jquery-form');


    wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/gsap/minified/TweenMax.min.js', array(),  1, 1, 1);
    wp_enqueue_script('TweenMax');

    wp_enqueue_script('scrollmagic', get_template_directory_uri() . '/js/scrollmagic/uncompressed/ScrollMagic.js', array(), 1, 1, 1);
    wp_enqueue_script('scrollmagic');

    wp_enqueue_script('animation', get_template_directory_uri() . '/js/scrollmagic/uncompressed/plugins/animation.gsap.js', array(), 1, 1, 1);
    wp_enqueue_script('animation');

    wp_enqueue_script('addIndicators', get_template_directory_uri() . '/js/scrollmagic/uncompressed/plugins/debug.addIndicators.js', array(), 1, 1, 1);
    wp_enqueue_script('addIndicators');

    /*  wp_register_script('coreui', 'https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/js/coreui.bundle.min.js', [], 1, 1, 1);
    wp_enqueue_script('coreui'); */

    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', [], '1.0.0', true);
    wp_localize_script('custom', 'ajax_object', ['ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce')]);

     /* code i added */
    wp_register_script('navjquery', get_template_directory_uri() . '/js/navbarjs.js', [], 1, 1, 1);
    wp_enqueue_script('navjquery');
}
add_action('wp_enqueue_scripts', 'addjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support('html5', array('style', 'script',));
add_theme_support('automatic-feed-links');

register_nav_menus([
    'primary' => __('Primary Menu', 'theme'),
]);

if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

add_filter('nav_menu_link_attributes', 'bootstrap5_dropdown_fix');
function bootstrap5_dropdown_fix($atts)
{
    if (array_key_exists('data-toggle', $atts)) {
        unset($atts['data-toggle']);
        $atts['data-bs-toggle'] = 'dropdown';
    }
    return $atts;
}

function set_home_as_front_page(){
    $home = get_page_by_title('HOME');
       if ( $home ) {
        update_option( 'page_on_front',$home->ID );
        update_option( 'show_on_front', 'page');

       }  
}
add_action('after_setup_theme', 'set_home_as_front_page');
