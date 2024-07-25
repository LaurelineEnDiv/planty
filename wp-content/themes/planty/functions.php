<?php
function theme_enfant_blocksy_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant
    wp_enqueue_style('theme-enfant-style', get_stylesheet_directory_uri() . '/style.css', array('blocksy-style'));
}
add_action('wp_enqueue_scripts', 'theme_enfant_blocksy_styles');



function add_admin_menu($items,$args)
{
    if(is_user_logged_in() && $args->theme_location==='header-menu-1'){
        $items.='<li class="menu-item"><a href="'.get_admin_url().'" class="ct-menu-link" >Admin</a></li>';
    }
    return $items;


}
add_filter('wp_nav_menu_items','add_admin_menu',99,2);

