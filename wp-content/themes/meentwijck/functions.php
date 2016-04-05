<?php

require get_template_directory() . '/inc/function-admin.php';

// Add Thumbnail Support
add_theme_support('post-thumbnails', array( 'voorwerp' ));
set_post_thumbnail_size( 140, 140, true );

require_once get_template_directory() . '/inc/custom-post.php';
require_once get_template_directory() . '/inc/custom-taxonomy.php';

mwc_add_post_type('voorwerp');
mwc_create_new_taxonomy( 'Soort', 'voorwerp', true, 'en' );
mwc_create_new_taxonomy( 'Ontwerper', 'voorwerp', false, 's' );

function collectieMeentwijck_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/mwc-main-theme-stylesheet.css'  );

}

add_action('wp_enqueue_scripts', 'collectieMeentwijck_resources');


// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),

));

// Get top ancestor
function get_top_ancestor_id(){

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return $post->ID;
}

// Does page have children ?
function has_children(){

	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);

}