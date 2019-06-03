<!-- Start Gallery Tab -->
<div class="articals-gallery">
    <div class="gallery-body">
        <?php
            $gallery_args = (array(
                'orderby'        => 'rand',
                'posts_per_page' => 21,  // Numder Post Show
                'post_status'    => 'publish', // Show Onley Post Status Puplish
            ));
            $gallery_tab1_query = new WP_Query($gallery_args); // Class WP_Query
            if($gallery_tab1_query->have_posts()){ // Check Have Posts Or No
                while($gallery_tab1_query->have_posts()){
                    $gallery_tab1_query->the_post(); //Echo Post?>
                            <div class="img-category overflow zoom">
                                <div class="post-img">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php foucs_check_post_image()?>
                                    </a>
                                </div>
                            </div>
         <?php    
                } // End While
            } // End If
            wp_reset_postdata(); 
            wp_reset_query();
        ?>
    </div><!-- End gallery-body -->
</div><!-- End Gallery Tab -->