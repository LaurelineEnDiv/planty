<?php
function theme_enfant_blocksy_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant
    wp_enqueue_style('theme-enfant-style', get_stylesheet_directory_uri() . '/style.css', array('blocksy-style'));
}
add_action('wp_enqueue_scripts', 'theme_enfant_blocksy_styles');


function add_admin_menu($items,$args) {
    if(is_user_logged_in() && $args->theme_location==='menu_1'){
       // Créer le lien "Admin"
       $admin_link = '<li class="menu-item"><a href="'.get_admin_url().'" class="ct-menu-link">Admin</a></li>';

       // Diviser les items du menu en un tableau
       $items_array = explode('</li>', $items);

       // Insérer le lien "Admin" après le premier élément du menu
       if (count($items_array) > 1) {
           $items_array[0] .= $admin_link;
       } else {
           $items_array[] = $admin_link;
       }

       // Reconstituer les items en une chaîne
       $items = implode('</li>', $items_array);
   }

    return $items;
}
add_filter('wp_nav_menu_items','add_admin_menu',99,2);

