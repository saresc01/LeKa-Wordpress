<?php /* no close */
function leka_load_stylesheets() {
    //Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    
    //Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    
    //Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    
    //Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
    
    //Favicon
    wp_enqueue_style('favicon', get_template_directory_uri() . '/img/favicon.ico');

    
}
add_action('wp_enqueue_scripts', 'leka_load_stylesheets');

//function leka_load_scripts() {    
 //   wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
//}
//add_action('wp_enqueue_scripts', 'leka_load_scripts');

function leka_remove_gutenberg() {    
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

add_action('init', 'leka_remove_gutenberg');
