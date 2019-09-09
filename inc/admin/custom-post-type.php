<?php

/*
	
@package foucs_newspaper
	
	=======================================
		THEME CUSTOM POST TYPES CUNTACT FORM
	==========================================
*/

$contact = get_option( 'activate_contact' );
if( @$contact == 1 ){
	// Register Post Type
	add_action( 'init', 'foucs_contact_custom_post_type' );

	// Edit Columns
	add_filter( 'manage_foucs-contact_posts_columns', 'foucs_set_contact_columns' );
	add_action( 'manage_foucs-contact_posts_custom_column', 'foucs_contact_custom_column', 10, 2 );

	add_action( 'add_meta_boxes', 'foucs_contact_add_meta_box' );
	add_action( 'save_post', 'foucs_save_contact_email_data' );
	
}

/* CONTACT Custom Post Type */

function foucs_contact_custom_post_type() {
	$labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name'			=> 'Messages',
		'name_admin_bar'	=> 'Message',
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-email-alt',
		'supports'			=> array( 'title', 'editor', 'author' )
	);
	
	register_post_type( 'foucs-contact', $args );
	
}

function foucs_set_contact_columns( $columns ){
	$newColumns = array();
	$newColumns['title']   = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email']   = 'Email';
	$newColumns['date']    = 'Date';
	return $newColumns;
}

function foucs_contact_custom_column( $column, $post_id ){
	
	switch( $column ){
		
		case 'message' :
			echo get_the_excerpt();
			break;
			
		case 'email' :
			//email column
			$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
	
}


/* CONTACT META BOXES */

function foucs_contact_add_meta_box() {
	add_meta_box(
		'contact_email', 
		'User Email', 
		'foucs_contact_email_callback', 
		'foucs-contact', 
		'side' 
	);
}

function foucs_contact_email_callback($post) {
	wp_nonce_field(
		'foucs_save_contact_email_data', 
		'foucs_contact_email_meta_box_nonce' 
	);
	
	$value = get_post_meta($post->ID, '_contact_email_value_key', true );
	
	echo '<label for="foucs_contact_email_field">User Email Address: </lable>';
	echo '<input 
		type="email" 
		id="foucs_contact_email_field"
		 name="foucs_contact_email_field" 
		 value="' . esc_attr( $value ) . '" size="25">';
}

function foucs_save_contact_email_data( $post_id ) {
	
	if( ! isset( $_POST['foucs_contact_email_meta_box_nonce'] ) ){
		return;
	}
	 // Check IF verify Key Create By WP or No
	if( ! wp_verify_nonce( $_POST['foucs_contact_email_meta_box_nonce'], 'foucs_save_contact_email_data') ) {
		return;
	}
	// Save Change Auto
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	// Check User Premation
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	if( ! isset( $_POST['foucs_contact_email_field'] ) ) {
		return;
	}
	
	$my_data = sanitize_text_field( $_POST['foucs_contact_email_field'] );
	// Update Table
	update_post_meta( $post_id, '_contact_email_value_key', $my_data );
	
}