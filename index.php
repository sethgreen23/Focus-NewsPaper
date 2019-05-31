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
                    <!--- Start Slider Arrow  --->
                    <button class="arrow-next slick-arrow" type="button" aria-label="Next" aria-hidden="true">
                            <i class="fas fa-angle-right"></i>
                    </button>
                    <button class="arrow-prev slick-arrow" type="button" aria-label="Previous" aria-hidden="true">
                            <i class="fas fa-angle-left"></i>
                    </button><!--- End Slider Arrow  --->
                </div><!--- End down-silder-body --->
            </div> <!--- col-12--->
        </div> <!--- row --->
    </div><!--- container-fluid --->
</div>
<!---End Slider Container --->

<!--- Start Articals Section--->
<div class="artical-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <!--- Start Articals Body-->
                <div class="artical-body"> 
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
                                   $ddr = $post_ordring->the_post(); // Echo Post?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="old-one">
                                                <div class="col-6">
                                                    <!--- Start old-one-body --->
                                                    <div class="old-one-body">
                                                        <!--- Start post-img-old --->
                                                        <div class="post-img-old overflow zoom">
                                                            <div class="post-img">
                                                                <?php foucs_check_post_image()?>
                                                            </div>
                                                        </div>
                                                        <!--- End post-img-old --->
                                                        <!--- Start old-post-title--->
                                                        <div class="old-post-title">
                                                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                                <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                            </a>
                                                        </div>
                                                        <!--- End old-post-title--->
                                                        <!--- Start old-post-date--->
                                                        <div class="old-post-date">
                                                            <i class="far fa-clock"></i>
                                                            <span class="old-date">
                                                                <?php the_date('F j, Y'); ?>
                                                            </span>  
                                                        </div>
                                                        <!--- End old-post-date--->
                                                        <!--- Start old-post-comment--->
                                                        <div class="old-post-comment">
                                                            <i class="fas fa-comment"></i>
                                                            <span class="comment text-capitalize">
                                                                <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                            </span>
                                                        </div>
                                                        <!--- End old-post-comment--->
                                                        <!--- Start old-post-content--->
                                                        <div class="old-post-content text-capitalize">
                                                            <?php the_excerpt();?>  
                                                        </div>
                                                        <!--- End old-post-content--->
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
                                                    <div class="col-6">
                                                        <ul>
                                                            <?php
                                                                $exclude_ids = array(71); //ID First Post Puplish
                                                                $ordring_date_args_all = (array(
                                                                    'orderby'        => 'date',
                                                                    'order'          => 'ASC',
                                                                    'posts_per_page' => 4,
                                                                    'post__not_in'   => $exclude_ids,
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
                                                                                </div>
                                                                                <!--- End img-all-old--->
                                                                                <!--- Start all-old-post-title--->
                                                                                <div class="all-old-post-title">
                                                                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                                                        <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                                                    </a>
                                                                                </div>
                                                                                <!--- End all-old-post-title--->
                                                                                <!--- Start old-all-post-date--->
                                                                                <div class="old-all-post-date">
                                                                                    <span class="all-old-date">
                                                                                        <i class="far fa-clock"></i>
                                                                                            <?php echo get_the_date(); ?>
                                                                                    </span>  
                                                                                </div>
                                                                                <!--- End old-all-post-date--->
                                                                                <!--- Start old-all_post-view--->
                                                                                <div class="old-all_post-view">
                                                                                    <i class="fab fa-gripfire"></i>
                                                                                    <span class="view">
                                                                                        <?php foucs_post_views() //Get The Post Views?>
                                                                                    </span>
                                                                                </div>
                                                                                <!--- End old-all_post-view--->
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
                    </div>
                    <!--- End Old Post Body ---> 
                    <!--- Start top-views --->
                    <div class="top-post-views">
                        <!--- Start Articals Section Name --->
                        <div class="artical-name">
                            <span class="top-post text-uppercase">top post</span>
                        </div>
                        <!--- End Articals Section Name --->
                        <!--- Start top-post --->
                        <div class="top-post">
                            <?php
                                // Ordring Posy by Date & Order ASC & Show One Post
                                // Used WP_Query Class
                                $top_views_args = (array(
                                    'orderby'        => 'foucs_posts_views',
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
                                                    <div class="col-6">
                                                        <!--- Start top-post-one-body --->
                                                        <div class="top-post-one-body">
                                                            <!--- Start post-img-top --->
                                                            <div class="post-img-top overflow zoom">
                                                                <div class="post-img">
                                                                    <?php foucs_check_post_image()?>
                                                                </div>
                                                            </div>
                                                            <!--- End post-img-top --->
                                                            <!--- Start top-post-title--->
                                                            <div class="top-post-title">
                                                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                                </a>
                                                            </div>
                                                            <!--- End top-post-title--->
                                                            <!--- Start top-post-date--->
                                                            <div class="top-post-date">
                                                                <i class="far fa-clock"></i>
                                                                <span class="old-date">
                                                                    <?php the_date('F j, Y'); ?>
                                                                </span>  
                                                            </div>
                                                            <!--- End top-post-date--->
                                                            <!--- Start top-post-view--->
                                                            <div class="top-post-view">
                                                                <i class="fab fa-gripfire"></i>
                                                                <span class="view">
                                                                    <?php foucs_post_views() //Get The Post Views?>
                                                                </span>
                                                            </div>
                                                            <!--- End top-post-view--->
                                                            <!--- Start top-post-comment--->
                                                            <div class="top-post-comment">
                                                                <i class="fas fa-comment"></i>
                                                                <span class="comment text-capitalize">
                                                                    <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                                </span>
                                                            </div>
                                                            <!--- End top-post-comment--->
                                                            <!--- Start top-post-content--->
                                                            <div class="top-post-content text-capitalize">
                                                                <?php the_excerpt();?>  
                                                            </div>
                                                            <!--- End top-post-content--->
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
                                                        <div class="col-6">
                                                            <ul>
                                                                <?php
                                                                    $top_post_all = (array(
                                                                        'orderby'        => 'foucs_posts_views',
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
                                                                                    <!--- Start img-top-all-post--->
                                                                                    <div class="img-top-all-post overflow zoom">
                                                                                        <div class="post-img">
                                                                                            <?php foucs_check_post_image()?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--- End img-top-all-post--->
                                                                                    <!--- Start top-all-post-title--->
                                                                                    <div class="top-all-post-title">
                                                                                        <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                                                            <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                                                                        </a>
                                                                                    </div>
                                                                                    <!--- End top-all-post-title--->
                                                                                    <!--- Start top-all-post-date--->
                                                                                    <div class="top-all-post-date">
                                                                                        <span class="top-date">
                                                                                            <i class="far fa-clock"></i>
                                                                                                <?php echo get_the_date(); ?>
                                                                                        </span>  
                                                                                    </div>
                                                                                    <!--- End top-all-post-date--->
                                                                                    <!--- Start top-all-post-view-->
                                                                                    <div class="top-all-post-view">
                                                                                        <i class="fab fa-gripfire"></i>
                                                                                        <span class="view">
                                                                                            <?php foucs_post_views() //Get The Post Views?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--- End top-all-post-view--->
                                                                                     <!--- Start top-all-post-comment--->
                                                                                    <div class="top-all-post-comment">
                                                                                        <i class="fas fa-comment"></i>
                                                                                        <span class="comment text-capitalize">
                                                                                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--- Start top-all-post-comment--->
                                                                                </li><!--- End all-old-body--->
                                                                    <?php    
                                                                            } // End While
                                                                        } // End If
                                                                        wp_reset_postdata(); 
                                                                        wp_reset_query();
                                                                    ?>
                                                            </ul><!--- End ul --->   
                                                        </div> <!--- End col-6 --->
                                                    </div> <!--- End top-all-post --->
                                            </div><!--- End row ---> 
                                        </div><!--- End container --->
                        </div><!--- top-post ---> 
                    </div>                                            
                    <!--- End top-post-views --->


                </div><!--- End artical-body --->
            </div><!--- End col-9 --->
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End Articals --->


<?php get_footer(); ?>