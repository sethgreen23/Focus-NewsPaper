<?php
    /*** 
        This is the Page Sitting Admin Panel
        @package foucs_newspaper
    */

 /*
    =========================================
        Add Functions Rigester Admin Menu 
    =========================================
*/
// Genneration anubis Admin Menu Settings
function foucs_newspaper_add_admin_page(){
    // Genneration anubis Admin Page
    add_menu_page(
        'Foucs Newspaper Admin', // Page Title
        'Foucs Newspaper', // Theme Name
        'manage_options',  // Manage Option
        'foucs_newspaper', // Sulg Name Page 
        'foucs_create_admin_menu_page', // Name Function To Called To Output The Content Page
        '', // Icon
        59 // Position
    );

    //Activate Custom Settings
    add_action('admin_init', 'foucs_newspaper_custom_settings');

}
// Action To Add Menu Admin Page
add_action('admin_menu', 'foucs_newspaper_add_admin_page');
// Function Called Admin Page
function foucs_create_admin_menu_page() {
    //Genneration Of Our Admin Settings Page
}

/*
    ============================================
        Add Functions Rigester Admin Sub Menu
    ============================================
*/
// Genneration anubis Admin SubMenu Page Settings
function foucs_newspaper_add_submenu(){
    $name_page_slug = 'foucs_newspaper'; // Name Parent Slug Menu Page

    // Add Theme Support Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin Info', 
        'Owner Info', // Sub Menu Title
        'manage_options', 
        $name_page_slug, // Sulg Name Page
        'foucs_create_admin_info_page', // Name Function To Called To Output The Content Page
    );

    // Add Theme Option Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin Options', 
        'Theme Options', // Sub Menu Title
        'manage_options', 
        'foucs-newspaper-options', // Sulg Name Page
        'foucs_create_admin_option_page', // Name Function To Called To Output The Content Page
    );

    // Add Theme ShortCode Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin ShortCode', 
        'Theme ShortCode', // Sub Menu Title
        'manage_options', 
        'foucs-newspaper-shortcode', // Sulg Name Page
        'foucs_create_admin_shortcode_page', // Name Function To Called To Output The Content Page
    );

    // Add Theme Contact Form Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin Contact Form', 
        'Contact Form', // Sub Menu Title
        'manage_options', 
        'foucs-newspaper-contactform', // Sulg Name Page
        'foucs_create_admin_contactform_page', // Name Function To Called To Output The Content Page
    );

    // Add Theme Custom CSS Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin CSS Options', 
        'Custom CSS', // Sub Menu Title
        'manage_options', 
        'foucs-newspaper-custom-css', // Sulg Name Page
        'foucs_create_admin_custom_css', // Name Function To Called To Output The Content Page
    );

}

// Action To Add SubMenu Admin Page
add_action('admin_menu', 'foucs_newspaper_add_submenu');

// Admin Page Custom Settings
function foucs_newspaper_custom_settings() {

    // Admin Info
    $page_admin_name = 'foucs_newspaper';
    $name_group_admin = 'foucs-newspaper-settings-group';
    register_setting($name_group_admin, 'profile_picture');
    register_setting($name_group_admin, 'first_name');
    register_setting($name_group_admin, 'last_name');
    register_setting($name_group_admin, 'admin_description');
    register_setting($name_group_admin,  'twitter_handler','foucs_sanitize_twitter_handler');
    register_setting($name_group_admin,'facebook_handler',);
    register_setting($name_group_admin,'instagram_handler',);
    register_setting($name_group_admin,'youtube_handler',);
    register_setting($name_group_admin,'googleplus_handler',);
    register_setting($name_group_admin,'pinterest_handler',);

    // Add Admin Section
    $admin_sec_name = 'foucs-newspaper-admin-info';
    add_settings_section($admin_sec_name,'Owner Info','foucs_admin_info_calback', $page_admin_name);

    // Add Admin fild
    add_settings_field('foucs-newspaper-admin-picture', 'Picture', 'foucs_admin_picture_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-admin-fullname', 'Full Name', 'foucs_admin_full_name_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-admin-desc', 'Description', 'foucs_admin_desc_callback', $page_admin_name, $admin_sec_name);

    add_settings_field('foucs-newspaper-facebook', 'Facebook Link', 'foucs_admin_facebook_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-twitter', 'Twitter Link', 'foucs_admin_twitter_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-instagram', 'Instagram Link', 'foucs_admin_instagram_callback', $page_admin_name, $admin_sec_name);

    add_settings_field('foucs-newspaper-youtube', 'Youtube Link', 'foucs_admin_youtube_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-pinterest', 'Pinterest Link', 'foucs_admin_pinterest_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-google', 'Google+ Link', 'foucs_admin_google_callback', $page_admin_name, $admin_sec_name);
    // End Admin Page

    /*** Start Theme Options Page ***/
    $page_option_name = 'foucs-newspaper-options';
    $name_group_option = 'foucs-newspaper-options-group';

    register_setting($name_group_option, 'post_formats');
    register_setting($name_group_option, 'custom_logo' );
    register_setting($name_group_option, 'custom_background' );
    
    // Add theme option Section
    $option_sec_name = 'foucs-newspaper-theme-option';
    add_settings_section($option_sec_name,'Theme Options','foucs_admin_options_calback', $page_option_name);

    add_settings_field('foucs-newspaper-postformat', 'Post Format', 'foucs_admin_post_format_callback', $page_option_name, $option_sec_name);
    add_settings_field('foucs-newspaper-logo', 'Custom Logo', 'foucs_admin_custom_logo_callback', $page_option_name, $option_sec_name);
    add_settings_field('foucs-newspaper-background', 'Custom Background', 'foucs_admin_background_callback', $page_option_name, $option_sec_name);
    // End Theme Options

    /*** Contact Form ***/

    // Contact Form Options
    register_setting('foucs-contact-options', 'activate_contact' );
	add_settings_section('foucs-contact-section', 'Contact Form', 'foucs_contact_section_callback', 'foucs-newspaper-contactform');
    add_settings_field('activate-form', 'Activate Contact Form', 'foucs_activate_contact_callback', 'foucs-newspaper-contactform', 'foucs-contact-section' );
    // End Contact Form

    /*** Start Custom Css ***/

    // Custome CSS Options
    //Custom CSS Options
	register_setting( 'foucs-custom-css-options', 'foucs_css', 'foucs_sanitize_custom_css' );
	
	add_settings_section( 'foucs-custom-css-section', 'Custom CSS', 'foucs_custom_css_section_callback', 'foucs-newspaper-custom-css' );
	
	add_settings_field( 'custom-css', 'Insert your Custom CSS', 'foucs_custom_css_callback', 'foucs-newspaper-custom-css', 'foucs-custom-css-section' );
}
// Function Callback Submenu
function foucs_create_admin_info_page () {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-admin-info.php'); // Include Settings Admin Page
}
// Function Callback Section
function foucs_admin_info_calback () {
    echo 'Customize Owner Information';
}

// ALL Function Admin Info Call Back

function foucs_admin_picture_callback () {
    $picture = esc_attr( get_option( 'profile_picture' ) );
	if( empty($picture) ){
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="">';
	} else {
		echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'"> <input type="button" class="button button-secondary" value="Remove" id="remove-picture">';
	}
}

// Function Called Admin Page Custom Settings Field & Form
function foucs_admin_full_name_callback() {
    $firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"> 
    <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name">';
}
// Function Called Admin Page Custom Settings Field & Form
function foucs_admin_desc_callback() {
	$description = esc_attr( get_option('admin_description') );
    echo '<input type="text" name="admin_description" value="'.$description.'" placeholder="Description">
    <p class="description">Write something smart.</p>';
}

// Function Called Facebook Handler
function foucs_admin_facebook_callback() {
	$facebook = esc_attr( get_option('facebook_handler') );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Add Your E-mail">';
}

// Function Called Twitter Handler
function foucs_admin_twitter_callback(){
    $twitter = esc_attr( get_option('twitter_handler') );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Add Your E-mail">
    <p class="description">Input your Twitter username without the @ character.</p>';
}

// Function Called Linked-In Handler
function foucs_admin_instagram_callback() {
	$instagram = esc_attr( get_option('instagram_handler') );
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Add Your E-mail">';
}

// Function Called Linked-In Handler
function foucs_admin_youtube_callback() {
	$youtube = esc_attr( get_option('youtube_handler') );
	echo '<input type="text" name="youtube_handler" value="'.$youtube.'" placeholder="Add Your Channel">';
}

// Function Called Linked-In Handler
function foucs_admin_pinterest_callback() {
	$pinterest = esc_attr( get_option('pinterest_handler') );
	echo '<input type="text" name="pinterest_handler" value="'.$pinterest.'" placeholder="Add Your E-mail">';
}

// Function Called Google + Handler
function foucs_admin_google_callback() {
	$googleplus = esc_attr( get_option('googleplus_handler') );
	echo '<input type="text" name="googleplus_handler" value="'.$googleplus.'" placeholder="Add Your E-mail">';
}
// Sanitization Settings
function foucs_sanitize_twitter_handler($input){
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

// ALL Function Theme Options Page Call Back

function foucs_create_admin_option_page() {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-theme-option.php'); // Include Settings Admin Page
}

function foucs_admin_options_calback() {
    echo 'Activate and Deactivate specific Theme Support Options';
}

function foucs_admin_post_format_callback(){
    $options = get_option('post_formats');
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' > '.$format.'</label><br>';
	}
	echo $output;

}

function foucs_admin_custom_logo_callback() {
	$options = get_option('custom_logo');
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_logo" name="custom_logo" value="1" '.$checked.' /> Activate the Custom Logo</label>';
}

function foucs_admin_background_callback() {
	$options = get_option('custom_background');
	$checked = ( @$options == 1 ? 'checked' : '');
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate the Custom Background</label>';
}

/***  End Theme Options  ***/

// Start ShorCode

function foucs_create_admin_shortcode_page (){
    require_once (get_template_directory() . '/inc/admin/templates/foucs-shortcode.php'); // Include Settings Admin Page

}

// Contact Form

function foucs_create_admin_contactform_page() {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-contact-form.php'); // Include Settings Admin Page
}

function foucs_contact_section_callback() {
    echo 'Activate and Deactivate the Built-in Contact Form';
}

function foucs_activate_contact_callback() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.' /></label>';
}

/***  End Contact Form  ***/

// Custom Css
function foucs_create_admin_custom_css() {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-custom-css.php'); // Include Settings Admin Page
}

function foucs_custom_css_section_callback() {
	echo 'Customize Foucs NewsPaper with your own CSS';
}

function foucs_custom_css_callback() {
	$css = get_option( 'foucs_css' );
	$css = ( empty($css) ? '/* Foucs NewsPaper Custom CSS */' : $css );
	echo '<div id="customCss">'.$css.'</div><textarea id="foucs_css" name="foucs_css" style="display:none;visibility:hidden;">'.$css.'</textarea>';
}

// Sanitization Settings
function foucs_sanitize_custom_css($input){
	$output = esc_textarea( $input );
	return $output;
}