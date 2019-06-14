<?php
    /*
		This is the template for the Category  Posts
		
		// @package foucs_newspaper
	*/
?>
<?php get_header(); ?>
<!---Start categor-silder-container --->
<div class="categor-silder-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php //get_template_part( 'template-parts/categories-parts/slider'); ?>
            </div> <!--- col-12--->
        </div> <!--- row --->
    </div><!--- container-fluid --->
</div>
<!---End categor-silder-container --->
<!--- Start categor-artical-container --->
<div class="categor-artical-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <!--- Start Articals Body-->
                <div class="artical-body">
                   <?php get_template_part( 'template-parts/categories-parts/posts');?>
                   <?php get_template_part( 'template-parts/categories-parts/pagination');?>
                </div><!--- End Articals Body --->
            </div><!--- End col-9 --->
            <div class="col-3">
                <div class="foucs-newspaper-sidebar">
                    <?php 
                        if(is_active_sidebar('foucs-category-page-sidebar')) {
                            dynamic_sidebar('foucs-category-page-sidebar');
                        } else {
                            get_sidebar();
                        }
                    ?>
                </div>
            </div>
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End categor-artical-container --->


<?php get_footer(); ?>