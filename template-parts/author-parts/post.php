<?php 
    $author_posts_per_page = 10;
    $author_posts_arg = array(
        'author'         => get_the_author_meta('ID'),
        'orderby'        => 'date',
        'order'          => 'DESC',
        'posts_per_page' => $author_posts_per_page,
        'post_status'    => 'publish',
    );
    $author_posts = new WP_Query($author_posts_arg);
?>
<div class="author-posts">
    <div class="author-card">
        <?php
            if($author_posts->have_posts()){ // Check Have Posts Or No
                $count_latst_post = count_user_posts(get_the_author_meta('ID')); ?>
                <h3 class="head-post text-capitalize">
                    <?php
                        // Chick If Number Posts >= Counter Post
                        if ($count_latst_post >= $author_posts_per_page) {?>
                            <span> Latest <strong> <?php echo $author_posts_per_page ?></strong> Post </span>
                        <?php       
                        } else {
                            echo '<span> The Latest Post </span>';
                        }
                    ?>  
                </h3>
                <?php
                while($author_posts->have_posts() ){ 
                    // Start Loop
                    $author_posts->the_post(); // Echo Post?>
<!--- Start card --->
                    <div class="card">
<!--- Start imge-card overflow zoom --->
                        <div class="imge-card overflow zoom">
<!--- Start img --->
                            <?php foucs_check_post_image()?>
                            <!--- End  img --->
<!--- Start head-card--->
                            <div class="head-card">
<!--- Start date --->
                                <div class="date">
                                    <span class="day"><?php echo get_the_date('d')?></span>
                                    <span class="month"><?php echo get_the_date('M')?></span>
                                    <span class="year"><?php echo get_the_date('Y')?></span>
                                </div><!--- End  date--->
<!--- Start menu-card --->
                                <ul class="menu-card">
<!--- Start Views --->
                                    <li>
                                        <div id="menu" class="far fa-eye">
                                            <span>
                                                <?php foucs_post_views() //Get The Post Views?>
                                            </span>
                                        </div>
                                    </li><!--- End views--->
<!--- Start comment--->
                                    <li>
                                        <a id="menu" class="far fa-comments" href="<?php  esc_url(comments_link()); ?>">
                                            <span>
                                                <?php comments_number('0', '1', '%') ?>
                                            </span>
                                        </a>
                                    </li><!--- End  comment--->
                                </ul><!--- End menu-card--->
<!--- Start card-content--->
                                <div class="card-content">
                                    <!--- Start content-card --->
                                    <div class="content-card">
                                        <!--- Start title --->
                                        <h3 class="title text-capitalize">
                                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                <?php the_title()// Echo Name Post ?>
                                            </a>
                                        </h3><!--- End title--->
                                        <!--- Start text --->
                                        <div class="text text-capitalize">
                                            <?php the_excerpt();?> 
                                        </div><!--- End text --->
<!--- Start button --->
                                        <a class="button text-capitalize" href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">read more</a>
                                    </div><!--- End content-card--->
                                </div><!--- End card-content--->
                                <!--- Start caption-shadow --->
                                <div class="caption-shadow"></div>
                                 <!--- End caption-shadow --->
                            </div><!--- End head-card --->
                        </div><!--- End imge-card overflow zoom --->
                    </div><!--- End Card --->
            <?php      
                    } // End While
                } // End If
                wp_reset_postdata(); 
                wp_reset_query();
            ?>
    </div><!--- End author-card col-6 --->
</div><!--- End author-posts --->