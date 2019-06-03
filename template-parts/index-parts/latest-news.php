<div class="latest-news-title">
    <div class="body-latest-news-title">
        <div class="latest-news">
            <ul>
                <?php
                    // Ordring Posy by Date & Order ASC & Show One Post
                    // Used WP_Query Class
                    $latest_news_args = (array(
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'posts_per_page' => 2,
                        'post_status'    => 'publish',
                    ));
                    $latest_news = new WP_Query($latest_news_args);
                    if( $latest_news->have_posts()){ // Check Have Posts Or No
                        while($latest_news->have_posts() ){ 
                            // Start Loop
                            $latest_news->the_post(); // Echo Post?>
                            <li><?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?></li>
                            
                <?php    
                        } // End While
                    } // End If
                    wp_reset_postdata(); 
                    wp_reset_query();
                ?>
            </ul>
        </div>
    </div>
</div>