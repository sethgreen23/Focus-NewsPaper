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

	//return HTML
	ob_start();?>
	<div class="mail-box col-6 d-inline-block">
		<div class="card">
		  <div class="card-body">
		    <div class="card-title d-inline-block position-relative text-center w-100">
		    	<i class="far fa-envelope"></i>
		    	 <span>Special</span>
		    </div>
		    	<?php echo '<div class="card-text">' .$content.'</div>' ?>
		  </div>
		</div>
	</div>
 <?php
	return ob_get_clean();
	
}
add_shortcode( 'mail_box', 'foucs_mail_box_shortcode' );

function foucs_phone_box_shortcode( $atts, $content = null ) {
	
	//[phone_box]

	//return HTML
	ob_start();?>
	<div class="phone-box col-6 d-inline-block">
		<div class="card">
		  <div class="card-body">
		  	<div class="card-title d-inline-block position-relative text-center w-100">
		    	<i class="far fa-envelope"></i>
		    	 <span>Special</span>
		    </div>
		    	<?php echo '<div class="card-text">' .$content.'</div>' ?>
		  </div>
		</div>
	</div>
 <?php
	return ob_get_clean();
	
}
add_shortcode( 'phone_box', 'foucs_phone_box_shortcode' );


function foucs_adress_box_shortcode( $atts, $content = null ) {
	
	//[adress_box]

	//return HTML
	ob_start();?>
	<div class="adress-box col-6 d-inline-block">
		<div class="card">
		  <div class="card-body">
		  	<div class="card-title d-inline-block position-relative text-center w-100">
		    	<i class="far fa-envelope"></i>
		    	 <span>Special</span>
		    </div>
		    	<?php echo '<div class="card-text">' .$content.'</div>' ?>
		  </div>
		</div>
	</div>
 <?php
	return ob_get_clean();
	
}
add_shortcode( 'adress_box', 'foucs_adress_box_shortcode' );


function foucs_spot_liner_shortcode( $atts, $content = null ) {
	
	//[spot_liner]

	//return HTML
	ob_start();?>
	<div class="text-color">
		<?php echo '<div class="spot-liner">' .$content.'</div>' ?>
	</div>
 <?php
	return ob_get_clean();
	
}
add_shortcode( 'spot_liner', 'foucs_spot_liner_shortcode' );



function foucs_list_shortcode( $atts, $content = null ) {
	
	//[list]

	//return HTML
	ob_start();?>
	<div class="list">
		<ul class="unstyle">
		  <li class="card-body">
		  	<div class="list-cont d-inline-block position-relative text-center w-100">
		  		<i class="fas fa-search"></i>
		    	<?php echo '<p class="list-text">' .$content.'</p>' ?>
		  	</div>
		  </li>
		</ul>
	</div>
 <?php
	return ob_get_clean();
	
}
add_shortcode( 'list', 'foucs_list_shortcode');

