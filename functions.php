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

function leka_remove_gutenberg() {    
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}
add_action('init', 'leka_remove_gutenberg');

function plp_register_strings() {
    pll_register_string("Design by","Design by"); //name of the group and text to translate, all the text that is hardcode , create a new line 
    pll_register_string("And","and");
    pll_register_string("Rights","All rights reserved.");
}
add_action('init', 'plp_register_strings');

add_filter('template_include', 'force_page_by_slug');

function force_page_by_slug($template) {
    if (!is_page()) return $template;

    global $post;

    if (!$post) return $template;

    // mapping french slugs with english templates
    $slug_template_map = [
        'hommes' => 'page-men.php',
        'femmes' => 'page-women.php',
        'tarifs' => 'page-pricing.php',
        'propos' => 'page-about.php',
        'contact' => 'page-contacts.php',
        'conditions-generales' => 'page-terms.php',
        'politique-confidentialite' => 'page-privacy-policy.php'
    ];

    // getting slug from current page
    $slug = $post->post_name;

    // Loading from the map and using the template if exists
    if (isset($slug_template_map[$slug])) {
        $en_template = locate_template($slug_template_map[$slug]);
        if ($en_template) {
            return $en_template;
        }
    }

    return $template;
}


function custom_single_language_switcher() {
    $languages = pll_the_languages(array(
        'raw' => 1,
        'hide_if_empty' => 0,
        'show_flags' => 1,
        'show_names' => 1
    ));

    foreach ($languages as $lang) {
        if (!$lang['current_lang']) {
            $flag_url = get_template_directory_uri() . "/img/" . $lang['slug'] . ".png";

            echo '<a href="' . esc_url($lang['url']) . '" class="switch-language">';
            echo '<img src="' . esc_url($flag_url) . '" alt="' . $lang['slug'] . '">';
            echo '</a>';
        }
    }
}
