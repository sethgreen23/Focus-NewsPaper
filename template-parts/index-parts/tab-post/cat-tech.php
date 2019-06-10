<div class="tech-tab">
    <div class="articals-tech">
        <!-- Start body-tech-index --->
        <div class="body-tech-post">
            <?php 
                $cat_tech_args = (array(
                    'category_name' => 'tech', // Name Category Show Post
                    'posts_per_page' => 5,  // Numder Post Show
                    'post_status'    => 'publish', // Show Onley Post Status Puplish
                ));
                $cat_tech_query = new WP_Query($cat_tech_args); // Class WP_Query
                if($cat_tech_query->have_posts()){ // Check Have Posts Or No
                    while($cat_tech_query->have_posts()){
                        $cat_tech_query->the_post(); //Echo Post?>
<!-- Start tech index body-post --->
                        <div class="body-post">
<!-- Start tech index img --->
                            <div class="img-tech-index overflow zoom">
                                <div class="post-img">
                                    <?php foucs_check_post_image()?>
                                </div>
                            </div><!-- End tech index img --->
<!-- Start tech index post title --->
                            <div class="tech-post-title">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </div><!-- End tech index post title --->
<!-- Start tech index post content --->
                             <div class="tech-index-content text-capitalize">
                                <?php the_excerpt();?>  
                            </div><!-- End tech index post content --->
<!-- Start tech index post outhor --->
                            <div class="tech-post-author">
                                <i class="fas fa-user"></i>
                                <span class="name-author text-capitalize">
                                    <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                </span>
                            </div><!-- End tech index post outhor --->
<!-- Start tech index post date --->
                            <div class="tech-index-date">
                                <i class="far fa-clock"></i>
                                <span class="tech-date">
                                    <?php the_date('F j, Y'); //Echo The Date Puplish Post?>
                                </span>  
                            </div><!-- End tech index post date --->
<!-- Start tech index post view --->
                            <div class="tech-index-view">
                                <i class="fab fa-gripfire"></i>
                                <span class="view">
                                    <?php foucs_post_views() //Get The Post Views?>
                                </span>
                            </div><!-- End tech index post view --->
                        </div><!-- End tech index body-post --->
            <?php    
                    } // End While
                } // End If
                wp_reset_postdata(); 
                wp_reset_query();
            ?>
        </div>
    </div>
</div>