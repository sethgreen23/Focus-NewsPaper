<div class="world-tab">
    <div class="articals-world">
        <!-- Start body-world-index --->
        <div class="body-world-post">
            <?php 
                $cat_world_args = (array(
                    'category_name' => 'world', // Name Category Show Post
                    'posts_per_page' => 5,  // Numder Post Show
                    'post_status'    => 'publish', // Show Onley Post Status Puplish
                ));
                $cat_world_query = new WP_Query($cat_world_args); // Class WP_Query
                if($cat_world_query->have_posts()){ // Check Have Posts Or No
                    while($cat_world_query->have_posts()){
                        $cat_world_query->the_post(); //Echo Post?>
<!-- Start world index body-post --->
                        <div class="body-post">
<!-- Start world index img --->
                            <div class="img-world-index overflow zoom">
                                <div class="post-img">
                                    <?php foucs_check_post_image()?>
                                </div>
                            </div><!-- End world index img --->
<!-- Start world index post title --->
                            <div class="world-post-title">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </div><!-- End world index post title --->
<!-- Start world index post content --->
                             <div class="world-index-content text-capitalize">
                                <?php the_excerpt();?>  
                            </div><!-- End world index post content --->
<!-- Start world index post outhor --->
                            <div class="world-post-author">
                                <i class="fas fa-user"></i>
                                <span class="name-author text-capitalize">
                                    <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                </span>
                            </div><!-- End world index post outhor --->
<!-- Start world index post date --->
                            <div class="world-index-date">
                                <i class="far fa-clock"></i>
                                <span class="world-date">
                                    <?php the_date('F j, Y'); //Echo The Date Puplish Post?>
                                </span>  
                            </div><!-- End world index post date --->
<!-- Start world index post view --->
                            <div class="world-index-view">
                                <i class="fab fa-gripfire"></i>
                                <span class="view">
                                    <?php foucs_post_views() //Get The Post Views?>
                                </span>
                            </div> <!-- End world index post view --->
                        </div><!-- End world index body-post --->
            <?php    
                    } // End While
                } // End If
                wp_reset_postdata(); 
                wp_reset_query();
            ?>
        </div>
    </div>
</div>