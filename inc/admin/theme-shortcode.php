<?php

/*
	
@package foucs_newspaper
	
	========================
		SHORTCODE OPTIONS
	========================
*/
function foucs_contact_form_shortcode( $atts, $content = null ) {
	
	//[contact_form]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/contact-form.php';
	return ob_get_clean();
	
}
add_shortcode( 'contact_form', 'foucs_contact_form_shortcode' );