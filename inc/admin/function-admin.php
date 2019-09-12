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

    // Add Theme Option Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin Options', 
        'Theme Options', // Sub Menu Title
        'manage_options', 
        $name_page_slug, // Sulg Name Page
        'foucs_create_admin_option_page', // Name Function To Called To Output The Content Page
    );

    // Add Theme Support Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Social Link', 
        'Social Link', // Sub Menu Title
        'manage_options', 
        'social_link', // Sulg Name Page
        'foucs_create_admin_info_page', // Name Function To Called To Output The Content Page
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

     // Add Theme Contact Us Page 
    add_submenu_page( 
        $name_page_slug,
        'Foucs Newspaper Admin Contact', 
        'Contact Us', // Sub Menu Title
        'manage_options', 
        'foucs-newspaper-contact', // Sulg Name Page
        'foucs_create_admin_contact_us', // Name Function To Called To Output The Content Page
    );

}

// Action To Add SubMenu Admin Page
add_action('admin_menu', 'foucs_newspaper_add_submenu');

// Admin Page Custom Settings
function foucs_newspaper_custom_settings() {

    // Admin Info
    $page_admin_name = 'social_link';
    $name_group_admin = 'social-link-settings-group';
    register_setting($name_group_admin, 'about_us');
    register_setting($name_group_admin,  'twitter_handler','foucs_sanitize_twitter_handler');
    register_setting($name_group_admin,'facebook_handler',);
    register_setting($name_group_admin,'instagram_handler',);
    register_setting($name_group_admin,'youtube_handler',);
    register_setting($name_group_admin,'youtube_channel_handler',);
    register_setting($name_group_admin,'googleplus_handler',);
    register_setting($name_group_admin,'pinterest_handler',);

    register_setting($name_group_admin,'vimeo_handler',);
    register_setting($name_group_admin,'feedpress_handler',);
    register_setting($name_group_admin,'dribbble_handler',);
    register_setting($name_group_admin,'soundcloud_handler',);
    register_setting($name_group_admin,'linkedin_handler',);

    // Add Admin Section
    $admin_sec_name = 'foucs-newspaper-admin-info';
    add_settings_section($admin_sec_name,'Social Link','foucs_admin_info_calback', $page_admin_name);

    // Add Admin fild
    add_settings_field('foucs-newspaper-admin-desc', 'About Us', 'foucs_admin_about_callback', $page_admin_name, $admin_sec_name);

    add_settings_field('foucs-newspaper-facebook', 'Facebook Link', 'foucs_admin_facebook_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-twitter', 'Twitter Link', 'foucs_admin_twitter_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-instagram', 'Instagram Link', 'foucs_admin_instagram_callback', $page_admin_name, $admin_sec_name);

    add_settings_field('foucs-newspaper-youtube', 'Youtube User Link', 'foucs_admin_youtube_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-youtube-channel', 'Youtube Channel Link', 'foucs_admin_youtube_channel_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-pinterest', 'Pinterest Link', 'foucs_admin_pinterest_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-google', 'Google+ Link', 'foucs_admin_google_callback', $page_admin_name, $admin_sec_name);

    add_settings_field('foucs-newspaper-vimeo', 'Vimeo Link', 'foucs_admin_vimeo_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-feedpress', 'Feedpress Link', 'foucs_admin_feedpress_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-dribbble', 'Dribbble Link', 'foucs_admin_dribbble_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-soundcloud', 'SoundCloud Link', 'foucs_admin_soundcloud_callback', $page_admin_name, $admin_sec_name);
    add_settings_field('foucs-newspaper-linkedin', 'Linked-In Link', 'foucs_admin_linkedin_callback', $page_admin_name, $admin_sec_name);
    // End Admin Page

    /*** Start Theme Options Page ***/
    $page_option_name = 'foucs_newspaper';
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
	register_setting( 'foucs-custom-css-options', 'foucs_css', 'foucs_sanitize_custom_css' );
	
	add_settings_section( 'foucs-custom-css-section', 'Custom CSS', 'foucs_custom_css_section_callback', 'foucs-newspaper-custom-css' );
	
	add_settings_field( 'custom-css', 'Insert your Custom CSS', 'foucs_custom_css_callback', 'foucs-newspaper-custom-css', 'foucs-custom-css-section' );

}
// Function Callback Submenu
function foucs_create_admin_info_page () {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-admin-social-link.php'); // Include Settings Admin Page
}
// Function Callback Section
function foucs_admin_info_calback () {
    echo '<strong>You Should Add Links In This Field</strong> <br>';
    echo 'Because When Not Add Links The Icons Will <strong> Not Show</strong> In Footer Or SideBar <br>';
    echo 'Not All Icone Just <strong>Empty Field</strong>';
}

// ALL Function Admin Info Call Back

// Function Called Admin Page Custom Settings Field & Form
function foucs_admin_about_callback() {
	$aboutus_desc = esc_attr( get_option('about_us') );
    echo '<input type="text" name="about_us" value="'.$aboutus_desc .'" placeholder="About Us">
    <p class="description">Write something smart. will Show About Us Description in <strong> Footer </strong></p>';
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

// Function Called Instagram_ Handler
function foucs_admin_instagram_callback() {
	$instagram = esc_attr( get_option('instagram_handler') );
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Add Your E-mail">';
}

// Function Called Youtube User Handler
function foucs_admin_youtube_callback() {
	$youtube = esc_attr( get_option('youtube_handler') );
    echo '<input type="text" name="youtube_handler" value="'.$youtube.'" placeholder="Add Your User Name">';
    echo '<p> <strong> Example: </strong> https://www.youtube.com/user/RelationsCode</p>';
}

// Function Called Youtube Channel Handler
function foucs_admin_youtube_channel_callback() {
	$youtubechannel = esc_attr( get_option('youtube_channel_handler') );
    echo '<input type="text" name="youtube_channel_handler" value="'.$youtubechannel.'" placeholder="Add Your Channel">';
    echo '<p> <strong> Example: </strong> https://www.youtube.com/channel/UCq_rA-RelaTIons-CoDe254</p>';
}

// Function Called Pinterest Handler
function foucs_admin_pinterest_callback() {
	$pinterest = esc_attr( get_option('pinterest_handler') );
	echo '<input type="text" name="pinterest_handler" value="'.$pinterest.'" placeholder="Add Your E-mail">';
}

// Function Called Google + Handler
function foucs_admin_google_callback() {
	$googleplus = esc_attr( get_option('googleplus_handler') );
	echo '<input type="text" name="googleplus_handler" value="'.$googleplus.'" placeholder="Add Your E-mail">';
}

// Function Called Vimeo  Handler
function foucs_admin_vimeo_callback(){
    $vimeo = esc_attr( get_option('vimeo_handler') );
    echo '<input type="text" name="vimeo_handler" value="'.$vimeo.'" placeholder="Add Your Channel">';
}

// Function Called Feedpress Handler
function foucs_admin_feedpress_callback() {
	$feedpress = esc_attr( get_option('feedpress_handler') );
	echo '<input type="text" name="feedpress_handler" value="'.$feedpress.'" placeholder="Add Your E-mail">';
}

// Function Called Dribbble Handler
function foucs_admin_dribbble_callback() {
	$dribbble = esc_attr( get_option('dribbble_handler') );
	echo '<input type="text" name="dribbble_handler" value="'.$dribbble.'" placeholder="Add Your E-mail">';
}

// Function Called SoundCloud Handler
function foucs_admin_soundcloud_callback() {
	$soundcloud = esc_attr( get_option('soundcloud_handler') );
	echo '<input type="text" name="soundcloud_handler" value="'.$soundcloud.'" placeholder="Add Your E-mail">';
}

// Function Called Linked-In Handler
function foucs_admin_linkedin_callback() {
	$linkedin = esc_attr( get_option('linkedin_handler') );
	echo '<input type="text" name="linkedin_handler" value="'.$linkedin.'" placeholder="Add Your E-mail">';
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

function foucs_create_admin_contact_us() {
    require_once (get_template_directory() . '/inc/admin/templates/foucs-contact-us.php');
}

// Sanitization Settings
function foucs_sanitize_custom_css($input){
	$output = esc_textarea( $input );
	return $output;
}