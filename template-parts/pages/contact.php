 <div class="container">
	<div class="row">
	    <div class="col-9"> 
	        <?php 
	            
	            if( have_posts()){ // Check Have Posts Or No
	                while( have_posts() ){ 
	                    // Start Loop
	                    the_post(); // Echo Post?>     
		<!--- Start post-title --->                           
		                <h3 class="post-title text-capitalize text-center">
		                    <?php the_title() // Get The Title Post ?>
		                </h3><!--- End post-title --->
<!--- Start post-content --->
		                <div class="post-content text-capitalize">
		                    <?php the_content('') // Show Conten OF Post?>
		                </div><!--- End post-content --->
			<?php
	                } // End While
	            } // End If
	            wp_reset_postdata(); 
	            wp_reset_query();
	        ?>  
	    </div>
	</div>
</div>