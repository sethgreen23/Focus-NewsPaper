 <!-- Start singl-page-rand-post -->
 <div class="singl-page-rand-post">
    <h2 class="hed-slider"><!-- Start hed-slider -->
        <i class="fas fa-thumbtack"></i>
        you might also like
    </h2><!-- End hed-slider -->
    <!-- Start Slider  [owl-carousel]-->
    <div class="single-carousel">
        <?php
            $single_sider_args = array (
                'post_per_page' => 1, // Number Posts Show
                'orderbay'      => 'rand', // Ordring by Rand
                'post__not_in'  => array(get_queried_object_id()), //ID Post
                'post_status'    => 'publish'
            );
            $random_posts = new WP_Query ($single_sider_args);
            if($random_posts->have_posts()) { //check Have Post Or No
                //Start Loop
                while($random_posts->have_posts()){
                    $random_posts->the_post(); //Echo Post?>
                    <!-- Start item-->
                    <div class="item">
 <!-- Start slider-img-->
                        <div class="slid-img overflow zoom">
                            <div class="post-img">
                                <?php foucs_check_post_image()?>
                            </div>
                        </div><!-- End slider-img-->
<!-- Stat slider-cat-name -->
                        <div class="slider-cat-name text-capitalize">
                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                <?php the_category('<span>,</span>')// Echo Name Post ?>
                            </a>
                        </div><!-- End slider-cat-name -->
<!-- Stat slider-title -->
                        <div class="slider-title">
                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                            </a>
                        </div><!-- End slider-title -->
                    </div><!-- End item-->
    <?php    
                } // End While Loop
            } // End IF
            wp_reset_postdata();
            wp_reset_query();
        ?>           
    </div>
    <!-- owl-carousel--> 
</div>
<!-- singl-page-rand-post-->
<?php echo '<div class="clearfix"></div>'; // fix Float Clear?>