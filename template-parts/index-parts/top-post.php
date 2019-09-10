<!--- Start Articals Section Name --->
<div class="artical-name">
    <span class="top-post-name text-uppercase">top post</span>
</div>
<!--- End Articals Section Name --->

<!--- Start top-post --->
<div class="top-post">
    <?php
        // Ordring Posy by Date & Order ASC & Show One Post
        // Used WP_Query Class
        $top_views_args = (array(
            'post_type'      => 'post',
            'orderby'        => 'comment_count',
            'order'          => 'DESC',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
        ));
        $post_top = new WP_Query($top_views_args);
        if( $post_top->have_posts()){ // Check Have Posts Or No
            while( $post_top->have_posts() ){ 
                // Start Loop
                $post_top->the_post(); // Echo Post?>
                <div class="container">
                    <div class="row">
                    <div class="top-post-one">
                            <div class="col-sm-12 col-md-12 col-lg-6">
<!--- Start top-post-one-body --->
                                <div class="top-post-one-body">
<!--- Start post-img-top --->
                                    <div class="post-img-top overflow zoom">
                                        <div class="post-img">
                                            <?php foucs_check_post_image()?>
                                        </div>
                                    </div><!--- End post-img-top  --->
<!--- Start top-post-title --->
                                    <div class="top-post-title">
                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                        </a>
                                    </div><!--- End top-post-title --->
<!--- Start post-author --->
                                    <div class="post-author">
                                        <i class="fas fa-user"></i>
                                        <span class="name-author text-capitalize">
                                            <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                        </span>
                                    </div><!--- End post-author --->
<!--- Start top-post-date--->
                                    <div class="top-post-date">
                                        <i class="far fa-clock"></i>
                                        <span class="old-date">
                                            <?php the_date('F j, Y'); ?>
                                        </span>  
                                    </div><!--- End top-post-date--->
<!--- Start top-post-comment--->
                                    <div class="top-post-comment">
                                        <i class="fas fa-comment"></i>
                                        <span class="comment text-capitalize">
                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                        </span>
                                    </div><!--- End top-post-comment--->
<!--- Start top-post-content--->
                                    <div class="top-post-content text-capitalize">
                                        <?php the_excerpt();?>  
                                    </div><!--- End top-post-content--->
                                </div><!--- End top-post-one-body --->
                            </div><!--- End col-6 --->
                        </div><!--- End old-one --->
    <?php    
            } // End While
        } // End If
        wp_reset_postdata(); 
        wp_reset_query();
    ?>
<!--- Start top-all-post --->
                        <div class="top-all-post">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <ul>
                                    <?php
                                        $top_post_all = (array(
                                            'post_type'      => 'post',
                                            'orderby'        => 'comment_count',
                                            'order'          => 'ASC',
                                            'posts_per_page' => 4,
                                            'post_status'    => 'publish',
                                        ));
                                        $post_top_view_all = new WP_Query($top_post_all);
                                        if( $post_top_view_all->have_posts()){ // Check Have Posts Or No
                                            while( $post_top_view_all->have_posts() ){ 
                                                // Start Loop
                                                $post_top_view_all->the_post(); // Echo Post?> 
                                                    <li class="top-all-post-body">
<!--- Start img-top-all-post --->
                                                    <div class="img-top-all-post overflow zoom">
                                                        <div class="post-img">
                                                            <?php foucs_check_post_image()?>
                                                        </div>
                                                    </div><!--- End img-top-all-post --->
<!--- Start top-all-post-title --->
                                                    <div class="top-all-post-title">
                                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                        </a>
                                                    </div><!--- End top-all-post-title --->
<!--- Start top-all-post-date --->
                                                    <div class="top-all-post-date">
                                                        <span class="top-date">
                                                            <i class="far fa-clock"></i>
                                                                <?php echo get_the_date(); ?>
                                                        </span>  
                                                    </div><!--- End top-all-post-date --->
<!--- Start top-all-post-comment --->
                                                    <div class="top-all-post-comment">
                                                        <i class="fas fa-comment"></i>
                                                        <span class="comment text-capitalize">
                                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                        </span>
                                                    </div><!--- End top-all-post-comment--->
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
</div><!--- End top-post --->