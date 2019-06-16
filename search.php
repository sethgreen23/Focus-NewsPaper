<?php
/**
 * The template for search Page 
 *
 * @package focus_newspaper
 */
?>
<?php get_header(); ?>
<!--- Start search-container --->
<div class="search-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <!--- Start search-body-->
                <div class="search-body">
                   <?php get_template_part( 'template-parts/search-parts/posts');?>
                </div><!--- End search-body --->
            </div><!--- End col-9 --->
            <div class="col-3">
                <div class="foucs-newspaper-sidebar">
                    <?php 
                        if(is_active_sidebar('foucs-search-page-sidebar')) {
                            dynamic_sidebar('foucs-search-page-sidebar');
                        } else {
                            get_sidebar();
                        }
                    ?>
                </div>
            </div>
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End search-container --->


<?php get_footer(); ?>