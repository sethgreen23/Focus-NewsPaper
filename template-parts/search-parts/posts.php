<!--- Start body-search-post --->
<div class="body-search-post">
    <div class="search-news">
        <ul>
            <?php 
                if(have_posts()){ // Check Have Posts Or No
                    while(have_posts() ){ 
                        // Start Loop
                        the_post(); // Echo Post?>
                         <div class="search-post">
<!--- Start search-post-img --->
                            <div class="search-post-img overflow zoom">
                                <div class="post-img">
                                    <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                        <?php foucs_check_post_image()?>
                                    </a>
                                </div>
                            </div><!--- End search-post-img --->
<!--- Start search-post-title --->
                            <div class="search-post-title">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </div><!--- End search-post-title --->
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
                        </div><!--- End search-post ---> 
            <?php    
                    } // End While
                } else {
                    echo '<h3 class="alert alert-warning text-capitalize text-center" role="alert" >no have any results <i class="far fa-frown"></i></h3>';
                }
                wp_reset_postdata(); 
            ?>
        </ul><!--- End ul --->
    </div><!--- End search-news --->
</div><!--- End body-search-post --->