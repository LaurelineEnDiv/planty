<?php
function theme_enfant_blocksy_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant
    wp_enqueue_style('theme-enfant-style', get_stylesheet_directory_uri() . '/style.css', array('blocksy-style'));
}
add_action('wp_enqueue_scripts', 'theme_enfant_blocksy_styles');
?>
