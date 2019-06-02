<!-- Start Category index  -->
<div class="category-index">
    <div class="row">
        <div class="articals-cat-body col-6">
            <div class="artical-name">
                <span class="top-post text-uppercase">life</span>
            </div>
            <div class="body-category-index">
                <?php 
                    $cat_tab1_args = (array(
                        'category_name' => 'life',
                        'posts_per_page' => 3,
                        'post_status'    => 'publish',
                    ));
                    $cat_tab1_query = new WP_Query($cat_tab1_args);
                    if($cat_tab1_query->have_posts()){ // Check Have Posts Or No
                        while($cat_tab1_query->have_posts()){
                            $cat_tab1_query->the_post(); //Echo Post?>
                            <div class="body-post">
                                <div class="img-category-index overflow zoom">
                                    <div class="post-img">
                                        <?php foucs_check_post_image()?>
                                    </div>
                                </div>
                                <div class="category-post-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div>


                                <div class="category-post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div>

                                

                                <div class="category-index-date">
                                    <i class="far fa-clock"></i>
                                    <span class="category-date">
                                        <?php the_date('F j, Y'); ?>
                                    </span>  
                                </div>

                                <div class="category-index-view">
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div>


                                <div class="category-index-content text-capitalize">
                                    <?php the_excerpt();?>  
                                </div>


                            </div>
                <?php    
                        } // End While
                    } // End If
                    wp_reset_postdata(); 
                    wp_reset_query();
                ?>
            </div>
        </div>
        <div class="articals-cat-body col-6">
            <div class="artical-name">
                <span class="top-post text-uppercase">travel</span>
            </div>

            <div class="body-category-index">
                <?php 
                    $cat_tab1_args = (array(
                        'category_name' => 'travel',
                        'posts_per_page' => 3,
                        'post_status'    => 'publish',
                    ));
                    $cat_tab1_query = new WP_Query($cat_tab1_args);
                    if($cat_tab1_query->have_posts()){ // Check Have Posts Or No
                        while($cat_tab1_query->have_posts()){
                            $cat_tab1_query->the_post(); //Echo Post?>
                            <div class="body-post">
                                <div class="img-category-index overflow zoom">
                                    <div class="post-img">
                                        <?php foucs_check_post_image()?>
                                    </div>
                                </div>
                                <div class="category-post-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div>

                                <div class="category-post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div>

                                <div class="category-index-date">
                                    <i class="far fa-clock"></i>
                                    <span class="category-date">
                                        <?php the_date('F j, Y'); ?>
                                    </span>  
                                </div>

                                

                                <div class="category-index-view">
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div>


                                <div class="category-index-content text-capitalize">
                                    <?php the_excerpt();?>  
                                </div>


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
</div>

<!-- End Category index -->