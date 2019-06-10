<div class="popular-footer">
<!-- Start body-popular-footer --->
    <div class="body-articals-popular">
        <div class="name-artical">
            <span class="footer-name text-capitalize">popular post</span>
        </div>
        <?php 
            $post_footer_args = (array(
                'post_type'		 => 'post',
                'meta_key'       => 'foucs_posts_views',
                'order'          => 'DESC',
                'orderby'		 => 'meta_value_num', // Ordring Number 
                'posts_per_page' => 4,  // Numder Post Show
                'post_status'    => 'publish', // Show Onley Post Status Puplish
            ));
            $post_footer_query = new WP_Query($post_footer_args); // Class WP_Query
            if($post_footer_query->have_posts()){ // Check Have Posts Or No
                while($post_footer_query->have_posts()){
                    $post_footer_query->the_post(); //Echo Post?>
                    <ul class="body-post">
<!-- Start popular footer img --->
                        <li class="img-popular-footer overflow zoom">
                            <div class="post-img">
                                <?php foucs_check_post_image()?>
                            </div>
                        </li><!-- End popular footer img --->
<!-- Start popular footer post title --->
                        <li class="popular-post-title">
                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                            </a>
                        </li><!-- End popular footer post title --->
<!-- Start popular footer post date --->
                        <li class="popular-footer-date">
                            <i class="far fa-clock"></i>
                            <span class="popular-date">
                                <?php the_date('F j, Y'); //Echo The Date Puplish Post?>
                            </span>  
                        </li><!-- End popular footer post date --->
                </ul>
    <?php    
            } // End While
        } // End If
        wp_reset_postdata(); 
        wp_reset_query();
    ?>
    </div><!-- End body-articals-popular --->
</div><!-- End popular-footer --->
