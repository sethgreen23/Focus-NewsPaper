<?php
/*

@package foucs_newspaper
    ===================================
      FUNCTIONS THEME SUPPORT SIDEBAR
    ===================================
*/

function home_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper Home SideBar', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-home-page-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-home-sidebar',
        'before_widget' => '<div id="%1$s" class="foucs-newspaper-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="foucs-newspaper-widget-title text-capitalize text-center">',
		'after_title'   => '</h3>'
    ));
}


function single_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper Single SideBar', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-single-post-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-single-sidebar',
        'before_widget' => '<div id="%1$s" class="foucs-newspaper-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="foucs-newspaper-widget-title text-capitalize text-center">',
		'after_title'   => '</h3>'
    ));
}

// Home Page Sidebar
add_filter('widgets_init', 'home_page_sidebar');
// Single Page Sidebaar
add_filter('widgets_init', 'single_page_sidebar');