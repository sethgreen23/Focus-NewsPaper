<?php
    /*
		This is the template for the Single Posts Page
		
		@package foucs_newspaper 
	*/
?>
<?php get_header();?>
<!--- Start Single Post Section--->
<div class="single-post-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <!--- Start breadcrumb-post-->
                <?php include(get_template_directory() . '/inc/theme-file/breadcrumb.php'); ?>
                <!--- End breadcrumb-post-->
                <!--- Start single-post-body-->
                <div class="single-post-body">
                <?php 
                    if (have_posts()) { // Check If Have Post Or No
                        // Start Loop
                        while (have_posts()) {
                            the_post();
                            get_template_part( 'template-parts/single-parts/posts');
                            get_template_part( 'template-parts/single-parts/share-box');
                            get_template_part( 'template-parts/single-parts/paginat');
                            get_template_part( 'template-parts/single-parts/slider');
                        } // End While Loop
                    } // End If ?>
                </div><!--- End single-post-body --->
            </div><!--- End col-9 --->
            <div class="col-3">
                <div class="foucs-newspaper-sidebar">
                    <?php 
                        if(is_active_sidebar('foucs-home-page-sidebar')) {
                            dynamic_sidebar('foucs-home-page-sidebar');
                        } else {
                            get_sidebar();
                        }
                    ?>
                </div>
            </div>
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End Single Post Section--->


<?php get_footer(); ?>