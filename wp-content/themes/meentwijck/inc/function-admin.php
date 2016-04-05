<?php 

/*

@package meentwijck

Inspired and adapted from the creation of the sunset admin page
of Allesandro Castellani (WordPress Theme Development)

To Do: add an own icon from the img directory of 20x20 pixels of type png
=============================
		Admin Page
=============================

 */

function mwc_add_admin_page(){

	// Generate Meentwijck Admin Page
	add_menu_page('Meentwijck Theme Instellingen', 'Meentwijck', 'manage_options', 'collectie_meentwijck', 'mwc_theme_create_page', 'dashicons-layout', 3 );

	// Generate Meentwijck Admin Sub Page
	add_submenu_page( 'collectie_meentwijck', 'Meentwijck Theme Instellingen', 'Algemeen', 'manage_options', 'collectie_meentwijck', 'mwc_theme_create_page' );

	add_submenu_page( 'collectie_meentwijck', 'Meentwijck CSS Opties', 'Custom CSS', 'manage_options', 'collectie_meentwijck_css', 'mwc_theme_settings_page'  );

}

add_action( 'admin_menu', 'mwc_add_admin_page');

function mwc_theme_create_page(){
	// Produce the theme admin page
	require_once( get_template_directory() . '/inc/templates/mwc-admin.php' );
}

function mwc_theme_settings_page(){
	// Produce the Admin Settings Page
	echo '<h1>CSS Instellingen</h1>';
	echo '<h3><i>Pas hier de stylesheet instelling aan.</i></h3>';
}