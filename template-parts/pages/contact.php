 <div class="container">
	<div class="row">
	    <div class="col-9">   
	        <?php 
	            
	            if( have_posts()){ // Check Have Posts Or No
	                while( have_posts() ){ 
	                    // Start Loop
	                    the_post(); // Echo Post?>
	                    <div>
	                    	<?php the_content();?>
	                    </div>
	                    <?php
	                } // End While
	            } // End If
	            wp_reset_postdata(); 
	            wp_reset_query();
	        ?>  
	    </div>
	</div>
</div>