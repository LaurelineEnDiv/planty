<?php
function theme_enfant_blocksy_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant
    wp_enqueue_style('theme-enfant-style', get_stylesheet_directory_uri() . '/style.css', array('blocksy-style'));
}
add_action('wp_enqueue_scripts', 'theme_enfant_blocksy_styles');

function cptui_register_my_cpts() {

	/**
	 * Post Type: Membres de l'équipe.
	 */

	$labels = [
		"name" => esc_html__( "Membres de l'équipe", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Membre de l'équipe", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Membres de l'équipe", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team_member", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team_member", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_team_member() {

	/**
	 * Post Type: Membres de l'équipe.
	 */

	$labels = [
		"name" => esc_html__( "Membres de l'équipe", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Membre de l'équipe", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Membres de l'équipe", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team_member", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team_member", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team_member' );

?>
