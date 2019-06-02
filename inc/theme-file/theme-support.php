<?php
/*

@package foucs_newspaper
    ================================
        FUNCTIONS THEME SUPPORT
        INCLUDE FILE SUPPORT
    ================================
*/
/*** Include File ***/


require get_template_directory() . '/inc/theme-file/support/foucs-menus.php';
require get_template_directory() . '/inc/theme-file/support/foucs-excerpt.php';



/*** Add Function Featured ***/

// Add Featured Image Support
add_theme_support('post-thumbnails');

/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
add_theme_support(
			'html5',
			array(
				'comment-form',
				'search-form',
				'comment-list',
				'gallery',
				'caption',
			)
);

// Load default block styles.
add_theme_support( 'wp-block-styles' );

// Add support for responsive embeds.
add_theme_support( 'responsive-embeds' );

