<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET TAGS CLOUD WIDGET
	=============================
*/

function foucs_tag_cloud_fontsize_change( $args ) {
	
	$args['smallest'] = 15;
	$args['largest'] = 15;
	
	return $args;
	
}
add_filter( 'widget_tag_cloud_args', 'foucs_tag_cloud_fontsize_change' );