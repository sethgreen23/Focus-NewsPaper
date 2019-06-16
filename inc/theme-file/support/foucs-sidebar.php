<?php
/*

@package foucs_newspaper
    ===================================
      FUNCTIONS THEME SUPPORT SIDEBAR
    ===================================
*/

function home_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper Home', 'Foucs NewsPaper Theme'),
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
        'name'          => esc_html__('Foucs NewsPaper Single', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-single-post-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-single-sidebar',
        'before_widget' => '<div id="%1$s" class="foucs-newspaper-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="foucs-newspaper-widget-title text-capitalize text-center">',
		'after_title'   => '</h3>'
    ));
}

function category_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper Categories', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-category-page-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-category-sidebar',
        'before_widget' => '<div id="%1$s" class="foucs-newspaper-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="foucs-newspaper-widget-title text-capitalize text-center">',
		'after_title'   => '</h3>'
    ));
}

function author_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper Author', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-author-page-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-author-sidebar',
        'before_widget' => '<div id="%1$s" class="foucs-newspaper-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="foucs-newspaper-widget-title text-capitalize text-center">',
		'after_title'   => '</h3>'
    ));
}

function search_page_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Foucs NewsPaper search', 'Foucs NewsPaper Theme'),
        'id'            => 'foucs-search-page-sidebar',
        'description'   => __('Creating Your Sidebar'),
        'class'         => 'foucs-search-sidebar',
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
// category Page Sidebaar
add_filter('widgets_init', 'category_page_sidebar');
// Author Page Sidebaar
add_filter('widgets_init', 'author_page_sidebar');
// Search Page Sidebaar
add_filter('widgets_init', 'search_page_sidebar');