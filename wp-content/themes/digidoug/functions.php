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
    
    //ajax
    wp_enqueue_script('ajax-slider', get_stylesheet_directory_uri() . '/assets/js/ajax-slider.js', array('jquery'), null, true);
    wp_localize_script('ajax-slider', 'ajaxslider', array('ajaxurl' => admin_url('admin-ajax.php')));
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


//gestion slider

function load_slide() {
    $current_post_id = isset($_POST['currentPostID']) ? intval($_POST['currentPostID']) : 0;
    $direction = isset($_POST['direction']) ? $_POST['direction'] : 'next';

    $order = ($direction === 'next') ? 'ASC' : 'DESC';
    $post__in = ($direction === 'next') ? array($current_post_id + 1) : array($current_post_id - 1);

    $args = array(
        'post_type' => 'projet',
        'posts_per_page' => 1,
        'orderby' => 'ID',
        'order' => $order,
        'post__in' => $post__in,
        'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    if (!$query->have_posts()) {
        wp_send_json_error(['error' => 'No more images']);
    } else {
        $query->the_post();
        $response = [
            'thumbnail' => get_the_post_thumbnail(get_the_ID(), 'full'),
            'postID' => get_the_ID()
        ];
        wp_send_json_success($response);
    }
    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_load_slide', 'load_slide');
add_action('wp_ajax_nopriv_load_slide', 'load_slide');