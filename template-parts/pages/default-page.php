<div class="silder-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'template-parts/index-parts/slider'); ?>
            </div> <!--- col-12--->
        </div> <!--- row --->
    </div><!--- container-fluid --->
</div>
<!---End Slider Container --->
<!--- Start Articals Section--->
<div class="artical-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <!--- Start Articals Body-->
                <div class="artical-body">
                   <?php get_template_part( 'template-parts/index-parts/latest-news');?>
                   <?php get_template_part( 'template-parts/index-parts/old-post');?>
                   <?php get_template_part( 'template-parts/index-parts/category-index');?>
                   <?php get_template_part( 'template-parts/index-parts/top-post');?>
                   <?php get_template_part( 'template-parts/index-parts/tab-categoy');?>
                   <?php get_template_part( 'template-parts/index-parts/slider-categories');?>
                   <?php get_template_part( 'template-parts/index-parts/latest-articales');?>
                </div><!--- End Articals Body --->
            </div><!--- End col-9 --->
            <div class="col-sm-12 col-md-12 col-lg-3">
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
</div><!--- End Articals --->