<!--- Start Latest Post News --->
<div class="latest-news-title">
    <div class="body-latest-news-title">
        <div class="latest-news">
            <ul>
                <?php
                    // Ordring Posy by Date & Order ASC & Show 15 Post
                    // Used WP_Query Class
                    $latest_news_args = (array(
                        'orderby'        => 'date',
                        'order'          => 'DESC', 
                        'posts_per_page' => 15, // Number Show Post
                        'post_status'    => 'publish', //Show Onley Post Puplish
                    ));
                    $latest_news = new WP_Query($latest_news_args);
                    if( $latest_news->have_posts()){ // Check Have Posts Or No
                        while($latest_news->have_posts() ){ 
                            // Start Loop
                            $latest_news->the_post(); // Echo Post?>
                            <li>
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </li>
                            
                <?php    
                        } // End While
                    } // End If
                    wp_reset_postdata(); 
                    wp_reset_query();
                ?>
            </ul><!--- End ul --->
        </div><!--- End latest-news --->
    </div><!--- End body-latest-news-title --->
</div><!--- Start Latest Post News --->