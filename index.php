<?php
    /*
		This is the template for the Posts
		
		@package foucs_newspaper
	*/
?>

<?php get_header(); ?>
<!---Start Slider Container --->
<div class="silder-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
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
                                                        <?php the_category('<span>&</span>')// Echo Name Post ?>
                                                    </a>
                                                </div>
                                                <!--- End upper-slider-cat -->
                                                <!--- Start upper-slider-title -->
                                                <div class="upper-slider-title">
                                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                    </a>
                                                </div>
                                                <!--- End upper-slider-title -->
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
                                                </div>
                                                <!-- End post-view -->
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
                                    </div>
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
                                                        <?php the_category('<span>&</span>')// Echo Name Post ?>
                                                    </a>
                                                </div>
                                                <!--- End down-slider-cat -->
                                                <!--- Start down-slider-title -->
                                                <div class="down-slider-title">
                                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                    </a>
                                                </div>
                                                <!--- End down-slider-title -->
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
                                                </div>
                                                <!-- End post-view -->
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
                    <button class="arrow-next slick-arrow" type="button" aria-label="Next" aria-hidden="true">
                            <i class="fas fa-angle-right"></i>
                    </button>
                    <button class="arrow-prev slick-arrow" type="button" aria-label="Previous" aria-hidden="true">
                            <i class="fas fa-angle-left"></i>
                    </button>
                </div><!--- End down-silder-body --->
            </div> <!--- col-12--->
        </div> <!--- row --->
    </div><!--- container-fluid --->
</div>
<!---End Slider Container --->

<!--- Start Articals --->

<div class="artical-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="artical-body"> 
                    <div class="old-post-body">
                        <div class="artical-name">
                            <span class="old-post text-uppercase">old post</span>
                        </div>
                        <?php
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
                                                <div class="col-6">
                                                    <div class="post-img-down overflow zoom">
                                                        <div class="post-img">
                                                            <?php foucs_check_post_image()?>
                                                        </div>
                                                    </div>


                                                    <div class="old-post-title">
                                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                        </a>
                                                    </div>

                                                    <div class="old-post-date">
                                                        <span>
                                                            <?php the_date('F j, Y'); ?>
                                                        </span>  
                                                    </div>

                                                    <div class="old-post-comment">
                                                        <i class="fas fa-comment"></i>
                                                        <span class="comment text-capitalize">
                                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                        </span>
                                                    </div>


                                                    <div class="old-post-content">
                                                        <?php the_excerpt();?>  
                                                    </div>

                                                </div>
                                            </div>

                        <?php    
                                } // End While
                            } // End If
                            wp_reset_postdata(); 
                            wp_reset_query();
                        ?>
                        <?php
                            $ordring_date_args_all = (array(
                                'orderby'        => 'date',
                                'posts_per_page' => 1,
                                'post_status'    => 'publish',
                            ));
                            $post_ordring_all = new WP_Query($ordring_date_args_all);
                            if( $post_ordring_all->have_posts()){ // Check Have Posts Or No
                                while( $post_ordring_all->have_posts() ){ 
                                    // Start Loop
                                    $post_ordring_all->the_post(); // Echo Post?>

                                            <div class="all-old">
                                                <div class="col-6">
                                                    <div class="post-img-down overflow zoom">
                                                        <div class="post-img">
                                                            <?php foucs_check_post_image()?>
                                                        </div>
                                                    </div>

                                                    <div class="old-post-title">
                                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                        </a>
                                                    </div>



                                                    <div class="old-all-post-date">
                                                        <span>
                                                            <?php the_date('F j, Y'); ?>
                                                        </span>  
                                                    </div>

                                                    <div class="old-post-comment">
                                                        <i class="fas fa-comment"></i>
                                                        <span class="comment text-capitalize">
                                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>  
                                    </div>  
                        <?php    
                                } // End While
                            } // End If
                            wp_reset_postdata(); 
                            wp_reset_query();
                        ?>
                    </div><!--- news-body --->      
                </div><!--- End artical-body --->
            </div><!--- End col-9 --->
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End Articals --->


<?php get_footer(); ?>