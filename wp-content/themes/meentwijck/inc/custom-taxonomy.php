<?php 
function mwc_create_new_taxonomy($name,$type, $isHierarchical , $plural){
	$UCName = ucwords($name);
	$labels = array(
			'name' => $UCName,
			'singular_name' => $name,
			'search_items' => 'Zoek ' . $name . $plural,
			'all_items' => 'Alle ' . $name . $plural,
			'parent_item' => 'Parent ' . $name,
			'parent_item_colon' => 'Parent ' . $name . ': ',
			'edit_item' => 'Bewerk ' . $name,
			'update_item' => 'Update ' . $name,
			'add_new_item' => 'Voeg nieuwe ' . $name . ' toe',
			'new_item_name' => 'Nieuw ' . $name . 'Naam'
		);

	$args = array(
		'hierarchical' => $isHierarchical,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => $name)
		);

	add_action('init', function() use($name, $type, $args){
		//register_post_type($name, $args);
		register_taxonomy( $name, $type, $args ); 		
	});
}