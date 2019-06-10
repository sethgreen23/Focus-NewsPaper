<?php 
/*

@package foucs_newspaper
    ======================================
        Foucs Theme Social Icons WIDGETS
	=======================================
	*** This Icons Will Show Widgets In SideBar
*/

		$facebook    = esc_attr( get_option('facebook_handler') );
		$twitter     = esc_attr( get_option('twitter_handler') );
		$instagram   = esc_attr( get_option('instagram_handler') );
		$youtube     = esc_attr( get_option('youtube_handler') );
		$youtubchan  = esc_attr( get_option('youtube_channel_handler') );
		$pinterest   = esc_attr( get_option('pinterest_handler') );
		$googleplus  = esc_attr( get_option('googleplus_handler') );
		$vimeo 		 = esc_attr( get_option('vimeo_handler') );
		$feedpress 	 = esc_attr( get_option('feedpress_handler') );
		$dribbble 	 = esc_attr( get_option('dribbble_handler') );
		$soundcloud  = esc_attr( get_option('soundcloud_handler') );
		$linkedin    = esc_attr( get_option('linkedin_handler') );
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
			if( !empty( $youtubchan ) ): ?>
				<a href="https://www.youtube.com/channel/<?php echo $youtubchan; ?>" target="_blank">
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
			<?php if( !empty( $vimeo) ): ?>
				<a href="https://vimeo.com/channel/<?php echo $vimeo; ?>" target="_blank">
					<span class="vimeo icons">
						<i class="fab fa-vimeo-v"></i>
					</span>
				</a>
			<?php endif; 
				if( !empty( $feedpress ) ): ?>
					<a href="http://feedpress.me/<?php echo $feedpress; ?>" target="_blank">
						<span class="feedpress icons">
							<i class="fas fa-rss"></i>
						</span>
					</a>
			<?php endif;
			if( !empty( $dribbble ) ): ?>
				<a href="https://dribbble.com/<?php echo $dribbble; ?>" target="_blank">
					<span class="dribbble icons">
						<i class="fab fa-dribbble"></i>
					</span>
				</a>
			<?php endif;
			if( !empty( $soundcloud ) ): ?>
				<a href="https://soundcloud.com/<?php echo $soundcloud; ?>" target="_blank">
					<span class="soundcloud icons">
						<i class="fab fa-soundcloud"></i>
					</span>
				</a>
			<?php endif; 
			if( !empty( $linkedin ) ): ?>
				<a href="https://linkedin.com/in/<?php echo $linkedin; ?>" target="_blank">
					<span class="linkedin icons">
						<i class="fab fa-linkedin-in"></i>
					</span>
				</a>
			<?php endif; ?>
	</div><!--- End foucs-social-icon---> 
</div><!--- End foucs-newspaper-social ---> 