<?php 
/*

@package foucs_newspaper
    ===============================
        Foucs Theme Social Icons
	===============================
	*** This Icons Will Show In Footer. Just In Footer
*/

		$facebook 	  = esc_attr( get_option('facebook_handler') );
		$twitter 	  = esc_attr( get_option('twitter_handler') );
		$instagram    = esc_attr( get_option('instagram_handler') );
		$youtube 	  = esc_attr( get_option('youtube_handler') );
		$youtubecha   = esc_attr( get_option('youtube_channel_handler') );
		$pinterest    = esc_attr( get_option('pinterest_handler') );
		$googleplus   = esc_attr( get_option('googleplus_handler') );
?> 
<!--- Start foucs-newspaper-social ---> 
<div class="foucs-newspaper-social">
	<div class="foucs-social-icon">
		<?php if( !empty( $facebook ) ): ?>
					<a href="https://facebook.com/<?php echo $facebook; ?>" target="_blank">
						<span class="facebook icons">
							<i class="fab fa-facebook-f"></i>
						</span>
					</a>
		<?php endif; 
			if( !empty( $twitter) ): ?>
				<a href="https://twitter.com/<?php echo $twitter; ?>" target="_blank">
					<span class="twitter icons">
						<i class="fab fa-twitter"></i>
					</span>
				</a>
			<?php endif; 
				if( !empty( $instagram ) ): ?>
					<a href="https://www.instagram.com/<?php echo $instagram; ?>" target="_blank">
						<span class="instagram icons">
							<i class="fab fa-instagram"></i>
						</span>
					</a>
			<?php endif;
			if( !empty( $youtube ) ): ?>
				<a href="https://www.youtube.com/user/<?php echo $youtube; ?>" target="_blank">
					<span class="youtube icons">
						<i class="fab fa-youtube"></i>
					</span>
				</a>
			<?php endif;
				if( !empty( $youtubecha ) ): ?>
				<a href="https://www.youtube.com/channel/<?php echo $youtubecha; ?>" target="_blank">
					<span class="youtube icons">
						<i class="fab fa-youtube"></i>
					</span>
				</a>
			<?php endif;
			if( !empty( $pinterest ) ): ?>
				<a href="https://www.pinterest.com/<?php echo $pinterest; ?>" target="_blank">
					<span class="pinterest icons">
						<i class="fab fa-pinterest-p"></i>
					</span>
				</a>
			<?php endif; 
			if( !empty( $googleplus ) ): ?>
				<a href="https://plus.google.com/u/0/+<?php echo $googleplus; ?>" target="_blank">
					<span class="google icons">
						<i class="fab fa-google-plus-g"></i>
					</span>
				</a>
			<?php endif; ?>
	</div><!--- End foucs-social-icon---> 
</div><!--- End foucs-newspaper-social ---> 