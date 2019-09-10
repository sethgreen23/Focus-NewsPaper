<!--- Start Articals Section Name --->
<div class="artical-name">
    <span class="old-post text-uppercase">old post</span>
</div>
<!--- End Articals Section Name --->
<!--- Start Articals Old Body --->
<div class="old-post-body">
    <?php
        // Ordring Posy by Date & Order ASC & Show One Post
        // Used WP_Query Class
        $ordring_date_args = (array(
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
        ));
        $post_ordring = new WP_Query($ordring_date_args);
        if( $post_ordring->have_posts()){ // Check Have Posts Or No
            while( $post_ordring->have_posts() ){ 
                // Start Loop
                $post_ordring->the_post(); // Echo Post?>
                <div class="container">
                    <div class="row">
                        <div class="old-one">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <!--- Start old-one-body --->
                                <div class="old-one-body">
<!--- Start post-img-old --->
                                    <div class="post-img-old overflow zoom">
                                        <div class="post-img">
                                            <?php foucs_check_post_image()?>
                                        </div>
                                    </div><!--- End post-img-old --->
<!--- Start old-post-title--->
                                    <div class="old-post-title">
                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                        </a>
                                    </div><!--- End old-post-title--->
 <!--- Start post-author --->
                                    <div class="post-author">
                                        <i class="fas fa-user"></i>
                                        <span class="name-author text-capitalize">
                                            <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                        </span>
                                    </div><!--- End post-author--->
<!--- Start old-post-date--->
                                    <div class="old-post-date">
                                        <i class="far fa-clock"></i>
                                        <span class="old-date">
                                            <?php the_date('F j, Y'); ?>
                                        </span>  
                                    </div><!--- End old-post-date--->
<!--- Start old-post-comment--->
                                    <div class="old-post-comment">
                                        <i class="fas fa-comment"></i>
                                        <span class="comment text-capitalize">
                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                        </span>
                                    </div><!--- End old-post-comment--->
<!--- Start old-post-content--->
                                    <div class="old-post-content text-capitalize">
                                        <?php the_excerpt();?>  
                                    </div><!--- End old-post-content--->
                                </div><!--- End old-one-body --->
                            </div><!--- End col-6 --->
                        </div><!--- End old-one --->
    <?php    
            } // End While
        } // End If
        wp_reset_postdata(); 
        wp_reset_query();
    ?>
                        <div class="all-old">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <ul>
                                    <?php
                                        $ordring_date_args_all = (array(
                                            'orderby'        => 'date',
                                            'order'          => 'ASC',
                                            'posts_per_page' => 4,
                                            'post_status'    => 'publish',
                                        ));
                                        
                                        $post_ordring_all = new WP_Query($ordring_date_args_all);
                                        if( $post_ordring_all->have_posts()){ // Check Have Posts Or No
                                            while( $post_ordring_all->have_posts() ){ 
                                                // Start Loop
                                                $post_ordring_all->the_post(); // Echo Post?> 
                                                    <li class="all-old-body">
<!--- Start img-all-old--->
                                                        <div class="img-all-old overflow zoom">
                                                            <div class="post-img">
                                                                <?php foucs_check_post_image()?>
                                                            </div>
                                                        </div><!--- End img-all-old--->
<!--- Start all-old-post-title--->
                                                        <div class="all-old-post-title">
                                                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                                <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                            </a>
                                                        </div><!--- End all-old-post-title--->
<!--- Start old-all-post-date--->
                                                        <div class="old-all-post-date">
                                                            <span class="all-old-date">
                                                                <i class="far fa-clock"></i>
                                                                    <?php echo get_the_date(); ?>
                                                            </span>  
                                                        </div><!--- End old-all-post-date--->
<!--- Start old-all_post-view--->
                                                        <div class="old-all_post-view">
                                                            <i class="fab fa-gripfire"></i>
                                                            <span class="view">
                                                                <?php foucs_post_views() //Get The Post Views?>
                                                            </span>
                                                        </div><!--- End old-all_post-view--->
                                                    </li><!--- End all-old-body--->
                                        <?php    
                                                } // End While
                                            } // End If
                                            wp_reset_postdata(); 
                                            wp_reset_query();
                                        ?>
                                </ul><!--- End ul --->   
                            </div> <!--- End col-6 --->
                        </div> <!--- End all-old --->
                    </div><!--- End row ---> 
                </div><!--- End container --->
</div><!--- End Articals Old Body --->