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
require get_template_directory() . '/inc/theme-file/support/foucs-sidebar.php';



/*** Add Function Featured ***/
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

// Add Featured Image Support
add_theme_support('post-thumbnails');

// Load default block styles.
add_theme_support( 'wp-block-styles' );

// Add support for responsive embeds.
add_theme_support( 'responsive-embeds' );
// Add Featured Widgets
add_theme_support( 'widgets' );
