<?php
function theme_enfant_blocksy_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant
    wp_enqueue_style('theme-enfant-style', get_stylesheet_directory_uri() . '/style.css', array('blocksy-style'));
}
add_action('wp_enqueue_scripts', 'theme_enfant_blocksy_styles');

function add_admin_link_to_menu($items, $args) {
    // Vérifiez l'emplacement du menu
    if ($args->theme_location == 'primary') {
        // Vérifiez si l'utilisateur est connecté et a le rôle d'administrateur
        if (is_user_logged_in() && current_user_can('administrator')) {
            // Créez le lien admin avec l'URL spécifiée
            $admin_link = '<li><a href="http://localhost/planty/wp-admin/index.php">Admin</a></li>';
            
            // Convertissez les items en tableau pour manipulation
            $items_array = explode('</li>', $items);
            
            // Insérez le lien admin après le premier élément
            if (count($items_array) > 1) {
                array_splice($items_array, 1, 0, $admin_link);
                // Réassemblez le menu
                $items = implode('</li>', $items_array);
            } else {
                // Si pour une raison quelconque il n'y a pas de </li> trouvés, ajoutez simplement le lien admin à la fin
                $items .= $admin_link;
            }
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);




