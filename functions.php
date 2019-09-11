<?php
/** 
 * SWPIN Functions
 * SeraWP Team
 * https://www.serawp.com
 * destek@serawp.com
 */

require_once get_theme_file_path() . '/mvc/inc/navwalker.php';
require_once get_theme_file_path() . '/mvc/inc/tgm.php';
require_once get_theme_file_path() . '/mvc/inc/load_more.php';
include_once get_theme_file_path() . '/mvc/inc/config.php';
if(!function_exists('swpin_setup')):
    function swpin_setup(){
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'header-menu'     => esc_html__('Üst Menü', 'swpin'),
            'footer-menu'     => esc_html__('Alt Menü', 'swpin'),
        ));
		add_theme_support( 'html5', array(
			'search-form',
			//'comment-form',
			//'comment-list',
			'gallery',
			'caption',
        ));  
        add_theme_support('customize-selective-refresh-widgets');  
    }
endif;
add_action('after_setup_theme', 'swpin_setup');

function swpin_scripts(){
    wp_enqueue_style('swpnak-style', get_stylesheet_uri());
    wp_enqueue_script('swpin-plugins', get_template_directory_uri() . '/mvc/public/plugins.js', array(), '20151215', true );
    wp_enqueue_script('swpin-fa', 'https://kit.fontawesome.com/73daebbfac.js', array(), '20151215', true );
}
add_action('wp_enqueue_scripts', 'swpin_scripts');

// First Category
function first_cat(){
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="post-category">' . esc_html( $categories[0]->name ) . '</a>';
    }    
}

function new_excerpt_more( $more ) {
    return '...';
 }   
 add_filter('excerpt_more', 'new_excerpt_more');