<?php
/*

@package foucs_newspaper
    ==================================
        ADMIN ENQUEUE FUNCTIONS
    ==================================
*/

function foucs_newspaper_load_admin_scripts( $hook ){
	//echo $hook;
	if('foucs-newspaper_page_foucs-newspaper-contact' == $hook ){ 
	
		wp_register_style( 'foucs_admin_css', get_template_directory_uri() . '/css/admin/foucs.admin.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'foucs_admin_css' );
		
		wp_enqueue_media();
		
		wp_register_script( 'foucs-newspaper-admin-script', get_template_directory_uri() . '/js/admin/foucs.admin.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'foucs-newspaper-admin-script' );
	
	} else if ('foucs-newspaper_page_foucs-newspaper-custom-css' == $hook ){
		
		wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/admin/foucs.ace.css', array(), '1.0.0', 'all' );
		
		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/admin/ace/ace.js', array('jquery'), '1.2.1', true );
		wp_enqueue_script( 'foucs-custom-css-script', get_template_directory_uri() . '/js/admin/foucs.custom_css.js', array('jquery'), '1.0.0', true );
	
	} else { return; }
	
}
add_action( 'admin_enqueue_scripts', 'foucs_newspaper_load_admin_scripts' );