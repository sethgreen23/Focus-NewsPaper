<?php
/*

@package foucs_newspaper
    ============================================
        FUNCTIONS THEME SUPPORT EXCERPT LANGHT
    ===========================================
*/

/*
    *** function Excerpt Langht
*/
function foucs_post_langht($length) {
	$length = 8; // Controller In Count Lenght Slider Content Show
	if(is_author()) {
		return 30;
	} elseif (is_category()){
		return 10; 
	} elseif (is_home()){
		return 20;
	} else {
		return $length;
	}
}
/*
	*** function To Change [...]
*/
function foucs_post_langht_more($more) {

	return '';
}

// Add Excerpt Langht
add_filter('excerpt_length', 'foucs_post_langht');
// Add To moore [...]
add_filter('excerpt_more', 'foucs_post_langht_more');