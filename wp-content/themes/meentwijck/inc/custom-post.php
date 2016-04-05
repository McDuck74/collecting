<?php

function mwc_add_post_type($name)
{
	$plurification = 'en';
	$UCFirst = ucWords($name);
	$labels = array(
		'name' => $UCFirst,
		'singular_name' => $UCFirst,
		'add_new' => 'Nieuw ' . $name,
		'add_new_item' =>  'Voeg nieuw '  . $name . ' toe',
		'edit_item' => 'Bewerk ' . $name ,
		'new_item' => 'Nieuw ' . $name,
		'view_item' => 'Bekijk ' . $name,
		'search_items' => 'Zoek ' . $UCFirst . $plurification,
		'not_found' => 'Geen ' . $name . ' gevonden',
		'not_found_in_trash' => 'Geen ' . $name . ' gevonden in de prullenbak',
		'parent_item_colon' => 'Parent ' . $name .': ',
		'menu_name' => $UCFirst ,
	);
	$args = array(
			'label' => ucWords($name) .$plurification,
			'labels' => $labels,
			'hierarchical' => true,
			'description' => $name,
			'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt' ),
			'taxonomies' => array( 'post_tag', 'category' ),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 6,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
	);
	add_action('init', function() use($name, $args){
		register_post_type($name, $args);		
	});
}