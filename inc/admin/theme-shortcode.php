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



function foucs_mail_box_shortcode( $atts, $content = null ) {
	
	//[mail_box]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'mail_box'
	);
	
	//return HTML
	ob_start();
	include 'templates/shortcode/mail-box.php';
	return ob_get_clean();
	
}
add_shortcode( 'mail_box', 'foucs_mail_box_shortcode' );


function foucs_adress_box_shortcode( $atts, $content = null ) {
	
	//[adress_box]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'adress_box'
	);
	
	//return HTML
	ob_start();
	include 'templates/shortcode/adress-box.php';
	return ob_get_clean();
	
}
add_shortcode( 'adress_box', 'foucs_adress_box_shortcode' );


function foucs_phone_box_shortcode( $atts, $content = null ) {
	
	//[phone_box]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'phone_box'
	);
	
	//return HTML
	ob_start();
	include 'templates/shortcode/phone-box.php';
	return ob_get_clean();
	
}
add_shortcode( 'phone_box', 'foucs_phone_box_shortcode' );
