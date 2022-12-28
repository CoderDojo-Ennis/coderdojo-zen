<?php

function cdzen_register_taxonomies() {
    /**
	 * Taxonomy: Badge Type.
	 */

	$labels = [
		"name" => __( "Badge Types", "coderdojo-grading" ),
		"singular_name" => __( "Badge Type", "coderdojo-grading" ),
		"menu_name" => __( "Badge Types", "coderdojo-grading" ),
		"all_items" => __( "All Badge Types", "coderdojo-grading" ),
		"edit_item" => __( "Edit Badge Type", "coderdojo-grading" ),
		"view_item" => __( "View Badge Type", "coderdojo-grading" ),
		"update_item" => __( "Update Badge Type name", "coderdojo-grading" ),
		"add_new_item" => __( "Add new Badge Type", "coderdojo-grading" ),
		"new_item_name" => __( "New Badge Type name", "coderdojo-grading" ),
		"parent_item" => __( "Parent Badge Type", "coderdojo-grading" ),
		"parent_item_colon" => __( "Parent Badge Type:", "coderdojo-grading" ),
		"search_items" => __( "Search Badge Types", "coderdojo-grading" ),
		"popular_items" => __( "Popular Badge Types", "coderdojo-grading" ),
		"separate_items_with_commas" => __( "Separate Badge Types with commas", "coderdojo-grading" ),
		"add_or_remove_items" => __( "Add or remove Badge Types", "coderdojo-grading" ),
		"choose_from_most_used" => __( "Choose from the most used Badge Types", "coderdojo-grading" ),
		"not_found" => __( "No Badge Types found", "coderdojo-grading" ),
		"no_terms" => __( "No Badge Types", "coderdojo-grading" ),
		"items_list_navigation" => __( "Programming Badge Types list navigation", "coderdojo-grading" ),
		"items_list" => __( "Programming Badge Types list", "coderdojo-grading" ),
		"back_to_items" => __( "Back to Badge Types", "coderdojo-grading" ),
	];

	$args = [
		"label" => __( "Badge Types", "coderdojo-grading" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => 'edit.php?post_type=belt',
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => false,
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "pbadgetype",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	];
	register_taxonomy( "badge_type", [ "badge" ], $args );

}

add_action( 'init', 'cdzen_register_taxonomies' );