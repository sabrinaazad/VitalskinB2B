<?php


if (!function_exists('vitalskintheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function vitalskintheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
    }
endif;
add_action('after_setup_theme', 'vitalskintheme');

function vitalskin_scripts()
{

    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('vitalskin-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_enqueue_script('vitalskin-script', get_template_directory_uri() . '/scripts/scripts.js', array(), filemtime(get_template_directory() . '/scripts/scripts.js'), true);
}
add_action('wp_enqueue_scripts', 'vitalskin_scripts');



/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'primary-nav' => __('Primary Nav'),
            'top-nav' => __('Topbar Nav')
        )
    );
}
add_action('init', 'register_menus');



/*THEME FEATURES*/
add_theme_support('title-tag');


add_action('admin_init', 'remove_textarea');

function remove_textarea()
{
    remove_post_type_support('page', 'editor');
}


add_filter('excerpt_length', function ($length) {
    return 20;
}, PHP_INT_MAX);


/* WIDGETS */
function blog_widgets_init()
{

    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


// Admin footer modification
  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');
