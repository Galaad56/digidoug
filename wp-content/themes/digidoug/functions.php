<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
        // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

}

add_action('wp_enqueue_scripts', 'ajouter_script_custom');
 function ajouter_script_custom() {
     // Enqueue jQuery
     wp_enqueue_script('jquery');
    //script menu burger
    wp_enqueue_script('script-menu', get_stylesheet_directory_uri() . '/assets/js/script_menu.js', array(), filemtime(get_stylesheet_directory() . '/assets/js/script_menu.js'),true);
    //script slider
    wp_enqueue_script('script-slider', get_stylesheet_directory_uri() . '/assets/js/script_slider.js', array(), filemtime(get_stylesheet_directory() . '/assets/js/script_slider.js'),true);
    
}

// gestion location menus

function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Primary Menu', 'motaphoto' ),
        'menu_footer'  => __( 'Footer Menu', 'motaphoto' ),
        'menu_burger'=> __( 'Off-canvas Menu', 'motaphoto' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );


//seopress

function seopress_theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'seopress_theme_slug_setup' );