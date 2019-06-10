<!--- Start latest-articales --->
<div class="latest-articales">
<!--- Start latest-artical-name --->
    <div class="latest-artical-name">
        <span class="latest-name text-uppercase">latest articales</span>
    </div>
<!--- Start latest-body --->
    <div class="latest-body">
        <?php
            $latest_post_args = (array(
                'post_type'		 => 'post',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'posts_per_page' => 7,
                'post_status'    => 'publish',
            ));
            $latest_post = new WP_Query($latest_post_args);
            if( $latest_post->have_posts()){ // Check Have Posts Or No
                while( $latest_post->have_posts() ){ 
                    // Start Loop
                    $latest_post->the_post(); // Echo Post?>
                    <div class="latest-post">
<!--- Start last-post-img --->
                        <div class="last-post-img overflow zoom">
                            <div class="post-img">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php foucs_check_post_image()?>
                                </a>
                            </div>
                        </div><!--- End last-post-img --->
<!--- Start last-post-title --->
                        <div class="last-post-title">
                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                            </a>
                        </div><!--- End last-post-title --->
<!--- Start post-author --->
                        <div class="post-author">
                            <i class="fas fa-user"></i>
                            <span class="name-author text-capitalize">
                                <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                            </span>
                        </div><!--- End post-author --->
<!--- Start post-date --->
                        <div class="post-date">
                            <i class="far fa-clock"></i>
                            <span class="date">
                                <?php the_date('F j, Y'); ?>
                            </span>  
                        </div><!--- End post-date --->
<!--- Start post-comment --->
                        <div class="post-comment">
                            <i class="fas fa-comment"></i>
                            <span class="comment text-capitalize">
                                <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                            </span>
                        </div><!--- End post-comment --->
<!--- Start post-view --->
                        <div class="post-view">
                            <i class="fab fa-gripfire"></i>
                            <span class="view">
                                <?php foucs_post_views() //Get The Post Views?>
                            </span>
                        </div><!--- post-view --->
<!--- Start post-content --->
                        <div class="post-content text-capitalize">
                            <?php the_excerpt();?>  
                        </div><!--- End post-content --->
                    </div><!--- End latest-post --->
        <?php    
                } // End While
            } // End If
            wp_reset_postdata(); 
            wp_reset_query();
        ?>       
    </div><!--- End latest-body --->
</div><!--- End latest-articales--->