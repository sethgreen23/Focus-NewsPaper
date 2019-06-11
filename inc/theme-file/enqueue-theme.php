<?php
/*

@package foucs_newspaper
    ===================================
        FRONT-END ENQUEUE FUNCTIONS
    ==================================
*/
    

/*
    *** function to add my custom style
*/
function focus_styles_files() {
    wp_enqueue_style( 'lato-oswald', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Oswald:400,500&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese' );
    // Add Bootstrap [CSS] File
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/inc/bootstrap.min.css');
    // Add Fontawesome [CSS] File
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/inc/fontawesome-all.min.css');
    // Add Normalize [CSS] File
    wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/inc/normalize.css');
    // Add slick [CSS] File
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/inc/slick.css');
    // Add owl carousel [CSS] File
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/css/inc/owl.carousel.min.css');
    // Add My Style
    wp_enqueue_style('focus-css', get_template_directory_uri() . '/css/focus.css');
}

/*
    *** function to add my custom js script
    *** [True] Add script In Last Body OR [False] Add script In header
*/

function foucs_js_files() {
    wp_deregister_script('jquery'); // Remove Registeration Old JQuery
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, 'v3.3.1', true); // Register a New JQuery in Footer
    wp_enqueue_script('jquery'); // Enqueue New JQuery
        // Add Popper Script
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/inc/popper.min.js', array(), false, true);
        // Add Bootstrap Script
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/inc/bootstrap.min.js', array(), false, true);
        // Add platform Script
    wp_enqueue_script('nplatform-js', get_template_directory_uri() . '/js/inc/platform.js', array(), false, true);
        // Add Nicescroll Script
    wp_enqueue_script('nicescroll-js', get_template_directory_uri() . '/js/inc/jquery.nicescroll.min.js', array(), false, true);
        // Add Easy Ticker Script
    wp_enqueue_script('easy-ticker', get_template_directory_uri() . '/js/inc/jquery.easy-ticker.min.js', array(), false, true);
        // Add Slick Script
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/inc/slick.min.js', array(), false, true);
        // Add owl carousel Script
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/inc/owl.carousel.min.js', array(), false, true);
        // Add My Script
    wp_enqueue_script('anubis-js', get_template_directory_uri() . '/js/foucs.js', array(), false, true);
}

// Add Css Files
add_action('wp_enqueue_scripts', 'focus_styles_files');
// Add JS Files
add_action('wp_enqueue_scripts', 'foucs_js_files');
