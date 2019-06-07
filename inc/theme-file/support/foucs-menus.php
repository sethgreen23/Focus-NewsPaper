<?php
/*

@package foucs_newspaper
    ===================================
        FUNCTIONS THEME SUPPORT MENUS
    ===================================
*/

// Include Bootstrap Class NavWalker
require_once('wp-bootstrap-navwalker.php');


/*
    *** function to add custom Menu
    *** register_nav_menus();
*/
function foucs_custom_menus() {
	register_nav_menus(array(
        'primary'       =>  esc_html__('Upper Menu'),
        'secondary'     =>  esc_html__('Theme Menu'),
        'footer_menu'   =>  esc_html__('Footer Menu'),
    ));
}
/*
	*** Function to Add Upper NavigationBar
	*** wp_nav_menu();
*/

function foucs_nav_custom_upper_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'primary',
        'menu_class'        => 'navbar-nav ml-auto text-capitalize', // UL CLass
        'container'         => false,
        'depth'             => 2,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function foucs_nav_custom_theme_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'secondary',
        'menu_class'        => 'navbar-nav text-capitalize',
        'container'         => false,
        'depth'             => 3,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function foucs_nav_custom_footer_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'footer_menu',
        'menu_class'        => 'navbar-nav ml-auto text-capitalize',
        'container'         => false,
        'depth'             => 1,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

// Add custom Menu
add_action('after_setup_theme', 'foucs_custom_menus');
