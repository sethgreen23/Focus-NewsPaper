<!---Start silder-categories --->
<div class="silder-categories">
    <div class="artical-sild-name">
        <span class="silde-name text-uppercase">life style</span>
    </div>
<!---Start cats-carousel --->
    <div class="cats-carousel">
        <?php
            $all_lifestyle_category = 'beauty,fitness,life,style,food';
            $lifestyle_posts_args = array(
                'category_name'      => $all_lifestyle_category, // Name Category Show Post
                'posts_per_page'     => 10, // Number Posts Show
                'orderby'            => 'rand', // Ordring by Rand
                'post_status'        => 'publish', // Show Onley Post Status Puplish
            );
            $category_posts = new WP_Query($lifestyle_posts_args);
            if($category_posts->have_posts()) { //check Have Post Or No
                //Start Loop
                while($category_posts->have_posts()){
                    $category_posts->the_post(); //Echo Post?>
                    <!-- Start item-->
                    <div class="item">
 <!-- Start slider-img-->
                        <div class="slid-img overflow zoom">
                            <div class="post-img">
                                <?php foucs_check_post_image()?>
                            </div>
                        </div><!-- End slider-img-->
<!-- Stat slider-cat-name -->
                        <div class="slider-cat-name">
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
    </div><!--- End cats-carousel--->
</div><!--- End silder-categories --->