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
    *** Function Get The Taxonomy [ Category & Tags ]
    *** Used Class WP_Term_Query()
    *** Arguments [$name_taxonomy, $number_term, $order_by, $order]
    *** Version: 1.0.2
*/
 function foucs_show_taxonomy($name_taxonomy, $order_by, $order, $number_term) {
    $args = array(
        'taxonomy'               => $name_taxonomy,
        'orderby'                => $order_by,
        'order'                  => $order,
        'number'                 => $number_term,
        'hide_empty'             => false,
    );
    $foucs_query = new WP_Term_Query($args);
    ?>
        <ul class="all-taxonomy">
        <?php 
            foreach ( $foucs_query->get_terms() as $term ) { ?>
                <li class="taxonomy">
                    <a href="<?php echo get_term_link( $term ) // Get The Category Link?>">
                        <span class="name">
                            <?php echo esc_html($term->name) // Show Category Name?>
                        </span>
                    </a>
                    <span class="count-num"><?php echo esc_html($term->count) // Show Count Post In Category?></span>
                </li>
            <?php
            }?>
        </ul>
        <?php
}

/*
    *** Function Get The Social Icon Links
*/
function foucs_social_icons_links () {
    ob_start();
	include 'support/foucs-social-links.php';
	return ob_get_clean();
}

/*
    *** Function Get The About Us Description 
*/
function foucs_about_us_desc () {
    ob_start();
	include 'support/foucs-aboutus.php';
	return ob_get_clean();
}


/*
    *** function Handelar Button Shere
    *** Version: 1.0.4
*/
function foucs_share_this_post($title,$permalink){

	$twitterHandler = ( get_option('twitter_handler') ? '&amp;via='.esc_attr( get_option('twitter_handler') ) : '' );
		
	$twitter   = 'https://twitter.com/intent/tweet?text=Hey! Read this: ' . $title . '&amp;url=' . $permalink . $twitterHandler .'';
	$facebook  = 'https://www.facebook.com/sharer/sharer.php?u=' . $permalink;
	$google    = 'https://plus.google.com/share?url=' . $permalink;
	$pinterest =  'http://pinterest.com/pin/create/bookmarklet/?is_video=false&url=' . $permalink;
	echo '<li><a href="'. $facebook .'" target="_blank" rel="nofollow"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>';
	echo '<li><a href="'. $twitter  .'" target="_blank" rel="nofollow"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>';
	echo '<li><a href="'. $pinterest  .'" target="_blank" rel="nofollow"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>';
	echo '<li><a href="'. $google .'" target="_blank" rel="nofollow"><i class="fab fa-google-plus-g" aria-hidden="true"> </i></a></li>';
			
}

