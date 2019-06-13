<!--- Start categories-posts --->
<div class="categories-posts">
<!--- Start row --->
    <div class="row">
        <?php
            if(have_posts()){ // Check Have Posts Or No
                while(have_posts() ){ 
                    // Start Loop
                    the_post(); // Echo Post?>

                <div class="categories-card col-6">
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
<!--- Start share --->
                                    <li>
                                        <div id="menu" class="fas fa-share"></a>
                                    </li><!--- End share --->
<!--- Start Like --->
                                    <li>
                                        <div id="menu" class="far fa-heart">
                                            <span>100</span>
                                        </div>
                                    </li><!--- End Like --->
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
                                                <?php comments_number('0', '1', '% comments') ?>
                                            </span>
                                        </a>
                                    </li><!--- End  comment--->
                                </ul><!--- End menu-card--->
<!--- Start --->
                                <div class="card-content">
                                    <!--- Start --->
                                    <div class="content-card">
                                        <!--- Start --->
                                        <h3 class="title text-capitalize">
                                            <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                                <?php the_title()// Echo Name Post ?>
                                            </a>
                                        </h3><!--- End --->
                                        <!--- Start --->
                                        <div class="text text-capitalize">
                                            <?php the_excerpt();?> 
                                        </div><!--- End --->
                                        <!--- Start --->
                                        <a class="button text-capitalize" href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">read more</a>
                                    </div><!--- End --->
                                </div><!--- End --->
                                <!--- Start caption-shadow --->
                                <div class="caption-shadow"></div>
                                 <!--- End caption-shadow --->
                            </div><!--- End head-card --->
                        </div><!--- End imge-card overflow zoom --->
                    </div><!--- End Card --->
                </div><!--- End categories-card col-6 --->
            <?php      
            } // End While
        } // End If
    ?>
    </div><!--- End row --->
</div><!--- End categories-posts --->