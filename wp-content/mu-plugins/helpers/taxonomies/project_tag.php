<?php

add_action( 'init', 'create_project_tag_taxonomy', 0 );

function create_project_tag_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Project Tags', 'taxonomy general name' ),
		'singular_name'              => _x( 'Project Tag', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Project Tags' ),
		'popular_items'              => __( 'Popular Proejct Tags' ),
		'all_items'                  => __( 'All Project Tags' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Project Tag' ),
		'update_item'                => __( 'Update Project Tag' ),
		'add_new_item'               => __( 'Add New Project Tag' ),
		'new_item_name'              => __( 'New Project Tag' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items'        => __( 'Add or remove tags' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags' ),
		'not_found'                  => __( 'No tags found.' ),
		'menu_name'                  => __( 'Project Tag' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => false,
	);

	register_taxonomy( 'project_tag', 'project', $args );
}
