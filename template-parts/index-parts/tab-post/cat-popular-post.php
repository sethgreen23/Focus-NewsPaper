<div class="popular-tab">
    <div class="articals-popular">
<!-- Start body-popular-index --->
        <div class="body-popular-post">
            <?php 
                $cat_tab1_args = (array(
                    'post_type'		 => 'post',
                    'meta_key'       => 'foucs_posts_views',
                    'order'          => 'DESC',
                    'orderby'		 => 'meta_value_num', // Ordring Number 
                    'posts_per_page' => 5,  // Numder Post Show
                    'post_status'    => 'publish', // Show Onley Post Status Puplish
                ));
                $cat_tab1_query = new WP_Query($cat_tab1_args); // Class WP_Query
                if($cat_tab1_query->have_posts()){ // Check Have Posts Or No
                    while($cat_tab1_query->have_posts()){
                        $cat_tab1_query->the_post(); //Echo Post?>
<!-- Start popular index body-post --->
                        <div class="body-post">
<!-- Start popular index img --->
                            <div class="img-popular-index overflow zoom">
                                <div class="post-img">
                                    <?php foucs_check_post_image()?>
                                </div>
                            </div><!-- End popular index img --->
<!-- Start popular index post title --->
                            <div class="popular-post-title">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </div><!-- End popular index post title --->
<!-- Start popular index post content --->
                             <div class="popular-index-content text-capitalize">
                                <?php the_excerpt();?>  
                            </div><!-- End popular index post content --->
<!-- Start popular index post outhor --->
                            <div class="popular-post-author">
                                <i class="fas fa-user"></i>
                                <span class="name-author text-capitalize">
                                    <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                </span>
                            </div><!-- End popular index post outhor --->
<!-- Start popular index post date --->
                            <div class="popular-index-date">
                                <i class="far fa-clock"></i>
                                <span class="popular-date">
                                    <?php the_date('F j, Y'); //Echo The Date Puplish Post?>
                                </span>  
                            </div><!-- End popular index post date --->
<!-- Start popular index post view --->
                            <div class="popular-index-view">
                                <i class="fab fa-gripfire"></i>
                                <span class="view">
                                    <?php foucs_post_views() //Get The Post Views?>
                                </span>
                            </div><!-- End popular index post view --->
                        </div><!-- End popular index body-post --->
            <?php    
                    } // End While
                } // End If
                wp_reset_postdata(); 
                wp_reset_query();
            ?>
        </div><!-- End body-popular-post --->
    </div><!-- End articals-popular --->
</div><!-- End popular-tab --->