<?php
/**
 * Add aditional post types
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo Grading
 * @subpackage CoderDojo
 * @since 1.0.0
 */

function coderdojo_grading_register_custom_post_types() {

    /**  
	 * Post Type: Belts.
	 */

	$labels = [
		"name" => __( "Belts", "coderdojo" ),
		"singular_name" => __( "Belt", "coderdojo" ),
		"menu_name" => __( "All Belts", "coderdojo" ),
		"all_items" => __( "Belts", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Belt", "coderdojo" ),
		"edit_item" => __( "Edit Belt", "coderdojo" ),
		"new_item" => __( "New Belt", "coderdojo" ),
		"view_item" => __( "View Belt", "coderdojo" ),
		"view_items" => __( "View Belts", "coderdojo" ),
		"search_items" => __( "Search Belts", "coderdojo" ),
		"not_found" => __( "No Belts found", "coderdojo" ),
		"not_found_in_trash" => __( "No Belts found in bin", "coderdojo" ),
		"parent" => __( "Parent Belt:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Belt", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Belt", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Belt", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Belt", "coderdojo" ),
		"archives" => __( "Belt archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Belt", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Belt", "coderdojo" ),
		"filter_items_list" => __( "Filter Belts list", "coderdojo" ),
		"items_list_navigation" => __( "Belts list navigation", "coderdojo" ),
		"items_list" => __( "Belts list", "coderdojo" ),
		"attributes" => __( "Belts attributes", "coderdojo" ),
		"name_admin_bar" => __( "Belt", "coderdojo" ),
		"item_published" => __( "Belt published", "coderdojo" ),
		"item_published_privately" => __( "Belt published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Belt reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Belt scheduled", "coderdojo" ),
		"item_updated" => __( "Belt updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Belt:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Belts", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => false,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		'capability_type' => array('award','awards'), //custom capability type
        'map_meta_cap'    => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "belts", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
	];

	register_post_type( "belt", $args );

    /**
	 * Post Type: Badges.
	 */

	$labels = [
		"name" => __( "Badges", "coderdojo" ),
		"singular_name" => __( "Badge", "coderdojo" ),
		"menu_name" => __( "Grading", "coderdojo" ),
		"all_items" => __( "All Badges", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Badge", "coderdojo" ),
		"edit_item" => __( "Edit Badge", "coderdojo" ),
		"new_item" => __( "New Badge", "coderdojo" ),
		"view_item" => __( "View Badge", "coderdojo" ),
		"view_items" => __( "View Badges", "coderdojo" ),
		"search_items" => __( "Search Badges", "coderdojo" ),
		"not_found" => __( "No Badges found", "coderdojo" ),
		"not_found_in_trash" => __( "No Badges found in bin", "coderdojo" ),
		"parent" => __( "Parent Badge:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Badge", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Badge", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Badge", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Badge", "coderdojo" ),
		"archives" => __( "Programming Badge archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Badge", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Badge", "coderdojo" ),
		"filter_items_list" => __( "Filter Badges list", "coderdojo" ),
		"items_list_navigation" => __( "Programming Badges list navigation", "coderdojo" ),
		"items_list" => __( "Programming Badges list", "coderdojo" ),
		"attributes" => __( "Programming Badges attributes", "coderdojo" ),
		"name_admin_bar" => __( "Programming Badge", "coderdojo" ),
		"item_published" => __( "Programming Badge published", "coderdojo" ),
		"item_published_privately" => __( "Programming Badge published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Programming Badge reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Programming Badge scheduled", "coderdojo" ),
		"item_updated" => __( "Programming Badge updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Badge:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Badges", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		'capability_type' => 'post', //custom capability type
        'map_meta_cap'    => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "programming", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 22,
		"menu_icon" => "dashicons-awards",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "badge", $args );

}

add_action( 'init', 'coderdojo_grading_register_custom_post_types' );


