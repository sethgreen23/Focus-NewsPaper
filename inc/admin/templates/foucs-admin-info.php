<h1>Foucs Newspaper Owner Info</h1>
<?php settings_errors(); ?>

<?php 

	$picture = esc_attr( get_option('profile_picture'));
	$firstName = esc_attr(get_option( 'first_name' ));
	$lastName = esc_attr(get_option( 'last_name' ));
	$fullName = $firstName . ' ' . $lastName;
    $description = esc_attr(get_option('admin_description'));
    
    //$facebook = esc_attr( get_option('facebook_handler') );
	//$twitter = esc_attr( get_option('twitter_handler') );
    //$instagram = esc_attr( get_option('instagram_handler') );
    
    //$youtube = esc_attr( get_option('youtube_handler') );
	//$pinterest = esc_attr( get_option('pinterest_handler') );
	//$googleplus = esc_attr( get_option('googleplus_handler') );
	
?>

<div class="foucs-newspaper-preview">
	<div class="foucs-admin-info">
		<div class="image-container">
			<div id="admin-picture-preview" class="admin-profile-picture" style="background-image: url(<?php echo $picture; ?>);"></div>
		</div>
		<h1 class="foucs-username"><?php echo $fullName; ?></h1>
		<h2 class="foucs-description"><?php echo $description; ?></h2>
		<!--<div class="icons-wrapper">	
		<?php //if( !empty( $facebook ) ): ?>
				<a href="https://facebook.com/<?php echo $facebook; ?>" target="_blank">
					<span class="dashicons-before dashicons-facebook-alt">
					</span>
				</a>
		<?php //endif; 
			//if( !empty( $twitter) ): ?>
				<a href="https://twitter.com/<?php //echo $twitter; ?>" target="_blank">
					<span class="dashicons-before dashicons-twitter">
						<i class="fab fa-twitter"></i>
					</span>
				</a>
            <?php //endif; 
                //if( !empty( $instagram ) ): ?>
                <a href="https://www.instagram.com/<?php //echo $instagram; ?>" target="_blank">
                    <span class="dashicons dashicons-instagram"></span>
                </a>
            <?php //endif;
            //if( !empty( $youtube ) ): ?>
				<a href="https://www.youtube.com/user/<?php //echo $youtube; ?>" target="_blank">
					<span class="youtube">Yu</span>
				</a>
            <?php //endif;
            //if( !empty( $pinterest ) ): ?>
				<a href="https://www.pinterest.com/<?php //echo $pinterest; ?>" target="_blank">
					<span class="pinterest">Pi</span>
				</a>
		    <?php //endif; 
			//if( !empty( $googleplus ) ): ?>
				<a href="https://plus.google.com/u/0/+<?php //echo $googleplus; ?>" target="_blank">
					<span class="dashicons dashicons-googleplus"></span>
				</a>
		<?php //endif; ?>
		</div>-->
	</div>
</div>


<form class="foucs-general-form" method="post" action="options.php">
    <?php settings_fields('foucs-newspaper-settings-group'); // Name The Option Group ?>
	<?php do_settings_sections('foucs_newspaper'); // Slug Name Of The Settings Page?>
	<?php submit_button( 'Save Info', 'primary', 'btnSubmit' ); ?>
</form>

<div>
	Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a>
</div>