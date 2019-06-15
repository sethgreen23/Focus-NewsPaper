<?php 
    $author_args = (array(
        'author'         => get_the_author_meta('ID'),
        'post_type'		 => 'post',
        'meta_key'       => 'foucs_posts_views',
        'order'          => 'DESC',
        'orderby'		 => 'meta_value_num', // Ordring Number 
        'posts_per_page' =>  5,
        'post_status'    => 'publish',
    ));
    $author_slider_post = new WP_Query($author_args);
?>
<!--- Start author-silder-body  --->
<div class="author-silder-body">
<!--- Start silder-content  --->
    <div class="silder-content">
        <?php
            if( $author_slider_post->have_posts()){ // Check Have Posts Or No
                while( $author_slider_post->have_posts() ){ 
                    // Start Loop
                    $author_slider_post->the_post(); // Echo Post?>
                        <div class="item">
    <!---Start slider image--->
                            <div class="slider-post-img overflow zoom">
                                <div class="post-img">
                                    <?php foucs_check_post_image()?>
                                </div>
    <!--- End slider image--->
    <!--- Start slider-heading -->
                                <div class="slider-heading">
    <!--- Start slider-title -->
                                    <div class="slider-title">
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
    <!-- Start post-comment -->
                                    <div class="post-comment">
                                        <i class="fas fa-comment"></i>
                                        <span class="comment text-capitalize">
                                            <?php comments_popup_link('No Comment', 'One Comment', '% Comments', 'comment-url', 'Comment Off') ?>
                                        </span>
                                    </div>
                                    <!-- End post-comment -->
                                </div><!--- End  slider-heading -->
                            </div><!--- End slider-post-img overflow zoom-->
                        </div><!--- End item-->
                <?php    
                
                } // End While
            } // End If
            wp_reset_postdata(); 
            wp_reset_query();
        ?>
    </div><!--- End silder-content  --->
<!--- Start Slider Arrow  --->
    <button class="arrow-next slick-arrow" type="button" aria-label="Next" aria-hidden="true">
                <i class="fas fa-angle-right"></i>
    </button>
    <button class="arrow-prev slick-arrow" type="button" aria-label="Previous" aria-hidden="true">
            <i class="fas fa-angle-left"></i>
    </button><!--- End Slider Arrow  --->
</div><!--- End author-silder-body  --->