<?php
    /*
		This is the template Author Page
		
		@package foucs_newspaper
	*/
?>
<?php get_header('author.head');?>

<!---Start author-silder-container --->
<div class="author-silder-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'template-parts/author-parts/slider');?>
            </div> <!--- col-12--->
        </div> <!--- row --->
    </div><!--- container-fluid --->
</div>
<!---End author-silder-container --->
<!--- Start author-artical-container --->
<div class="author-artical-container">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <!--- Start Articals Body-->
                <div class="author-artical-body">
                   <?php get_template_part( 'template-parts/author-parts/post');?>
                   <?php get_template_part( 'template-parts/author-parts/comment');?>
                </div><!--- End Articals Body --->
            </div><!--- End col-9 --->
            <div class="col-3">
                <!--- Start author-info --->  
                <div class="author-info">
                   <?php get_template_part( 'template-parts/author-parts/author-info');?>
                </div><!--- End author-info --->  
                <div class="foucs-newspaper-sidebar">
                    <?php 
                        if(is_active_sidebar('foucs-author-page-sidebar')) {
                            dynamic_sidebar('foucs-author-page-sidebar');
                        } else {
                           get_sidebar();
                        }
                    ?>
                </div>
            </div>
        </div><!--- End row --->
    </div><!--- End container --->
</div><!--- End author-artical-container --->



<?php get_footer(); ?>