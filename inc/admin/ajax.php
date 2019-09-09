<?php 
add_action('wp_ajax_nopriv_foucs_save_user_message_contact_form', 'foucs_save_contact_form_message');
add_action('wp_ajax_foucs_save_user_message_contact_form', 'foucs_save_contact_form_message');


function foucs_save_contact_form_message() {
	$title   = wp_strip_all_tags( $_POST['name']);
	$email 	 = wp_strip_all_tags( $_POST['email']);
	$message = wp_strip_all_tags( $_POST['message']);

	$contact_info_args = array(
	        'post_title' 	=> $title,
	        'post_content'  => $message,
	        'post_author' 	=> 1,
	        'post_status' 	=> 'publish',
	        'post_type' 	=> 'foucs-contact',
	        'meta_input' 	=> array(
	            '_contact_email_value_key' => $email,
	     	),
	);

	 ob_clean();
    $postID = wp_insert_post($contact_info_args);


    if ($postID !== 0) {
        $to = get_bloginfo('admin_email');
        $subject = 'Foucs Contact Form - '.$title;

        $headers[] = 'From: '.get_bloginfo('name').' <'.$to.'>'; // 'From: Hesham <me@heshammadel.com>'
        $headers[] = 'Reply-To: '.$title.' <'.$email.'>';
        $headers[] = 'Content-Type: text/html: charset=UTF-8';

        wp_mail($to, $subject, $message, $headers);
    }

    echo $postID;
    wp_die();

    die();


}