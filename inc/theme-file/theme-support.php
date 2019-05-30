<?php
/*

@package foucs_newspaper
    ================================
        FUNCTIONS THEME SUPPORT
    ================================
*/

// Add Featured Image Support
add_theme_support('post-thumbnails');

/*
    *** function to add custom Menu
    *** register_nav_menus();
*/
function foucs_custom_menus() {
	register_nav_menus(array(
        'primary'       =>  'Upper Menu',
        'secondary'     =>  'Theme Menu',
        'footer_menu'   =>  'Footer Menu',
    ));
}
/*
	*** Function to Add Upper NavigationBar
	*** wp_nav_menu();
*/

function foucs_nav_custom_primary_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'Upper Menu',
        'menu_class'        => 'nav navbar-nav',
        'container'         => false,
        'depth'             => 2,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function foucs_nav_custom_secondary_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'Theme Menu',
        'menu_class'        => 'nav navbar-nav',
        'container'         => false,
        'depth'             => 3,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function foucs_nav_custom_footer_menu() {
    wp_nav_menu(array(
        'theme_location'    => 'Footer Menu',
        'menu_class'        => 'nav navbar-nav',
        'container'         => false,
        'depth'             => 1,
        'walker'            => new wp_bootstrap_navwalker(),
    ));
}

// Add custom Menu
add_action('after_setup_theme', 'foucs_custom_menus');
