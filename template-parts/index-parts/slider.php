<!---Start upper-silder-body --->
<div class="upper-silder-body">
    <!---Start upper-silder --->
    <div class="upper-silder">
        <?php
            $ordring_rand_args = (array(
                'orderby'        => 'rand',
                'posts_per_page' => '6',
                'post_status'    => 'publish',
            ));
            $post_ordring_rand = new WP_Query($ordring_rand_args);
            if( $post_ordring_rand->have_posts()){ // Check Have Posts Or No
                while( $post_ordring_rand->have_posts() ){ 
                    // Start Loop
                    $post_ordring_rand->the_post(); // Echo Post?>
                    <div class="item">
<!---Start slider image--->
                        <div class="post-img-upper overflow zoom">
                            <div class="post-img">
                                <?php foucs_check_post_image()?>
                            </div>
                            <div class="overlay"></div>
<!--- End slider image--->
<!--- Start upper-slider-heading -->
                            <div class="upper-slider-heading">
<!--- Start upper-slider-cat -->
                                <div class="upper-slider-cat">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_category('<span>,</span>')// Echo Name Post ?>
                                    </a>
                                </div><!--- End upper-slider-cat -->
<!--- Start upper-slider-title -->
                                <div class="upper-slider-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div><!--- End upper-slider-title -->
<!-- Start post-author -->
                                <div class="post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div><!-- End post-author -->
<!-- start post-view -->
                                <div class="post-view">
                                    <!---<i class="fab fa-gripfire"></i>-->
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div><!-- End post-view -->
<!-- Start post-comment -->
                                <div class="post-comment">
                                    <i class="fas fa-comment"></i>
                                    <span class="comment text-capitalize">
                                        <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                    </span>
                                </div>
                                <!-- End post-comment -->
                            </div><!--- End upper-slider-heading -->
                        </div><!--- End post-img-upper overflow zoom-->
                    </div><!--- End item-->
                <?php    
                } // End While
            } // End If
            wp_reset_postdata(); 
            wp_reset_query();
        ?>
    </div><!---End upper-silder --->
</div><!---End upper-silder-body --->
<!---Start down-silder-body --->
<div class="down-silder-body">
    <!---Start down-silder --->
    <div class="down-silder">
        <?php
            $ordring_meta_args = (array(
                'orderby'        => 'rand',
                'posts_per_page' => 9,
                'post_status'    => 'publish',
            ));
            $post_ordring_meta = new WP_Query($ordring_meta_args);
            if( $post_ordring_meta->have_posts()){ // Check Have Posts Or No
                while( $post_ordring_meta->have_posts() ){ 
                    // Start Loop
                    $post_ordring_meta->the_post(); // Echo Post?>
                    <div class="item">
                        <div class="post-img-down overflow zoom">
                            <div class="post-img">
                                <?php foucs_check_post_image()?>
                            </div>
<!--- End slider image--->
                            <div class="overlay"></div>
<!--- Start down-slider-heading -->
                            <div class="down-slider-heading">
<!--- Start down-slider-cat -->
                                <div class="down-slider-cat">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_category('<span>,</span>')// Echo Name Post ?>
                                    </a>
                                </div><!--- End down-slider-cat -->
<!--- Start down-slider-title -->
                                <div class="down-slider-title">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                    </a>
                                </div><!--- End down-slider-title -->
<!-- Start post-author -->
                                <div class="post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="name-author text-capitalize">
                                        <?php esc_url(the_author_posts_link()) // Echo Name Author Wraiting Post?>
                                    </span>
                                </div><!-- End post-author -->
<!-- start post-view -->
                                <div class="post-view">
                                    <i class="fab fa-gripfire"></i>
                                    <span class="view">
                                        <?php foucs_post_views() //Get The Post Views?>
                                    </span>
                                </div><!-- End post-view -->
                            </div><!-- End down-slider-heading -->
                        </div><!-- End ppost-img-down overflow zoom" -->
                    </div>
                <?php    
                } // End While
            } // End If
            wp_reset_postdata(); 
            wp_reset_query();
        ?>
    </div><!--- End down-silder --->
<!--- Start Slider Arrow  --->
    <button class="arrow-next slick-arrow" type="button" aria-label="Next" aria-hidden="true">
            <i class="fas fa-angle-right"></i>
    </button>
    <button class="arrow-prev slick-arrow" type="button" aria-label="Previous" aria-hidden="true">
            <i class="fas fa-angle-left"></i>
    </button><!--- End Slider Arrow  --->
</div><!--- End down-silder-body --->