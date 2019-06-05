<?php
/*

@package foucs_newspaper
    ===============================
        FOUCS THEME FUNCTIONS
    ===============================
*/

function foucs_check_post_image() {

    $img_link = get_template_directory_uri() . '/img/default-image-rc.jpg';
    
	if(has_post_thumbnail()){ // Chek The Post Have Image Or No
        the_post_thumbnail(); // Show Imges Post
        
	} else {
		echo '<img src= "'. $img_link .'" alt="Sorry The Post No Have Image (This The Default Image)">';
   
	}
}

/*
	*** Function Post Views
*/
function foucs_post_views() {
    $postID = get_the_ID(); // Get The ID Post
    $metaKey = 'foucs_posts_views'; // The Name Meta Key
    $views = get_post_meta( $postID, $metaKey, true ); //Show Views
    $count_start_num = 1; // The Number Count Will be Start Form 0

    $count = ( empty( $views ) ? $count_start_num : $views ); // Check Have Views Or No
    $count++; // The Count +1
    
    if(is_single()) { // Check If In Single Page Or No
		// Update The Views Number
    	update_post_meta( $postID, $metaKey, $count );
    	echo $count; // Echo Number In Single Page and +1 After Refresh Page
	}  else {
		// Echo Views in EvreWhere I Need
    	echo $views;
        
    }
}
// Remove The Hook
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );


/*
	*** Function categories
*/
 function show_category_name () {
    $categories = get_terms( 'category', array(
        'orderby'    => 'count',
        'hide_empty' => 0
    ) );
    /*$cat_args = array (
        'title_li'            => __('<span>Popular Category</span>' ),
        'show_option_all'     => '',
        'show_option_none'    => __( 'No categories' ),
        'depth'               => 0,
        'order'               => 'DESC',
        'orderby'             => 'count',
    );*/
    return $categories;
 }