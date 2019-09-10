<!-- Start Category index  -->
<div class="category-index">
    <div class="row">
<!-- Start Left articals-cat-body col-6 --->
        <div class="articals-cat-body col-sm-12 col-md-12 col-lg-6">
            <div class="artical-name-one">
                <span class="cat-one text-uppercase">life</span>
            </div>
<!-- Start body-category-index --->
            <div class="body-category-index">
                <?php 
                    $cat_tab1_args = (array(
                        'category_name' => 'life', // Name Category Show Post
                        'posts_per_page' => 4,  // Numder Post Show
                        'post_status'    => 'publish', // Show Onley Post Status Puplish
                    ));
                    $cat_tab1_query = new WP_Query($cat_tab1_args); // Class WP_Query
                    if($cat_tab1_query->have_posts()){ // Check Have Posts Or No
                        while($cat_tab1_query->have_posts()){
                            $cat_tab1_query->the_post(); //Echo Post?>
<!-- Start Category index body-post --->
                            <div class="body-post">
 <!-- Start Category index img --->
                                <div class="img-category-index overflow zoom">
                                    <div class="post-img">
                                        <?php foucs_check_post_image()?>
                                    </div>
                                </div><!-- End Category index img --->
<!-- Start Category index post title --->
                                <div class="category-post-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div><!-- End Category index post title --->
<!-- Start Category index post outhor --->
                                <div class="category-post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div><!-- End Category index post outhor --->
<!-- Start Category index post date --->
                                <div class="category-index-date">
                                    <i class="far fa-clock"></i>
                                    <span class="category-date">
                                        <?php the_date('F j, Y'); //Echo The Date Puplish Post?>
                                    </span>  
                                </div><!-- End Category index post date --->
<!-- Start Category index post view --->
                                <div class="category-index-view">
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div><!-- End Category index post view --->
<!-- Start Category index post content --->
                                <div class="category-index-content text-capitalize">
                                    <?php the_excerpt();?>  
                                </div><!-- End Category index post content --->
                            </div><!-- End Category index body-post --->
                <?php    
                        } // End While
                    } // End If
                    wp_reset_postdata(); 
                    wp_reset_query();
                ?>
            </div><!-- End body-category-index --->
        </div><!-- End Left articals-cat-body col-6 --->
<!-- Start Right articals-cat-body col-6 --->
        <div class="articals-cat-body col-sm-12 col-md-12 col-lg-6">
            <div class="artical-name-two">
                <span class="cat-two text-uppercase">travel</span>
            </div>
<!-- Start body-category-index --->
            <div class="body-category-index">
                <?php 
                    $cat_tab1_args = (array(
                        'category_name' => 'travel',// Name Category Show Post
                        'posts_per_page' => 4, // Numder Post Show
                        'post_status'    => 'publish', // Show Onley Post Status Puplish
                    ));
                    $cat_tab1_query = new WP_Query($cat_tab1_args);
                    if($cat_tab1_query->have_posts()){ // Check Have Posts Or No
                        while($cat_tab1_query->have_posts()){
                            $cat_tab1_query->the_post(); //Echo Post?>
                            <div class="body-post">
<!-- Start Category index img --->
                                <div class="img-category-index overflow zoom">
                                    <div class="post-img">
                                        <?php foucs_check_post_image()?>
                                    </div>
                                </div><!-- End Category index img --->
<!-- Start Category index post title --->
                                <div class="category-post-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div> <!-- End Category index post title --->
<!-- Start Category index post outhor --->
                                <div class="category-post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div><!-- End Category index post outhor --->
<!-- Start Category index post date --->
                                <div class="category-index-date">
                                    <i class="far fa-clock"></i>
                                    <span class="category-date">
                                        <?php the_date('F j, Y'); ?>
                                    </span>  
                                </div><!-- End Category index post date --->
<!-- Start Category index post view --->
                                <div class="category-index-view">
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div><!-- End Category index post view --->
<!-- Start Category index post content --->
                                <div class="category-index-content text-capitalize">
                                    <?php the_excerpt();?>  
                                </div><!-- End Category index post content --->
                            </div><!-- End body-post --->
                <?php    
                        } // End While
                    } // End If
                    wp_reset_postdata(); 
                    wp_reset_query();
                ?>
            </div><!-- End body-category-index --->
        </div><!-- End articals-cat-body col-6 --->
    </div><!-- End Row  -->
</div><!-- End Category index -->