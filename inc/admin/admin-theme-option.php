<?php

/*
	
@package foucs_newspaper
	
	=============================
		THEME SUPPORT OPTIONS
	=============================
*/

$options = get_option( 'post_formats' );
$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
$output = array();
foreach ( $formats as $format ){
	$output[] = ( @$options[$format] == 1 ? $format : '' );
}
if( !empty( $options ) ){
	// Add Featur Post Format
	add_theme_support('post-formats', $output );
}

$logo = get_option( 'custom_logo' );
if( @$logo == 1 ){
	// Add Featur Customize Logo
    function foucs_add_logo() {
	
		add_theme_support( 'custom-logo');
	
	}
	add_action( 'after_setup_theme', 'foucs_add_logo' );
}

$background = get_option( 'custom_background' );
if( @$background == 1 ){
	// Add Featur Customize Background
	add_theme_support( 'custom-background' );
}