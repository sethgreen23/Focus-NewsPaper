<?php 
/*

@package foucs_newspaper
    ===============================
        Get All post Categories Ordered By Count DESC.
    ===============================
*/
?>
<div class="popular-footer">
    <div class="articals-popular">
        <!-- Start body-popular-footer --->
        <div class="body-popular">
            <div class="name-artical">
                <span class="text-capitalize">popular category</span>
            </div>
            <div class="body-post"> 
                    <?php
                        // Terms Attributes
                        $terms_arry = array (
                            'order'      => 'DESC',
                            'orderby'    => 'count',
                        );
                        
                        $terms = get_terms( 'category', $terms_arry);
                        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){?>
                            <ul class="all-category">
                                <?php 
                                foreach ( $terms as $term ) { ?>
                                    <li class="cat-name">
                                        <a href="<?php echo get_term_link( $term ) // Get The Category Link?>">
                                            <span class="cat-name">
                                                <?php echo esc_html($term->name) // Show Category Name?>
                                            </span>
                                        </a>
                                        <span class="count-num"><?php echo esc_html($term->count) // Show Count Post In Category?></span>
                                    </li>
                              <?php
                                }?>
                            </ul>
                            <?php
                        } // End if 
                        ?>
                </div>
            </ul><!-- End ul body-post --->
        </div><!-- End body-popular --->
    </div><!-- End articals-popular --->
</div><!-- End popular-footer --->
