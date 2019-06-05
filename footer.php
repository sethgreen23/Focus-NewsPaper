<?php
    /*
		This is the template for the footer
		
		@package foucs_newspaper
    */
?>      <!--- Start Footer --->
       <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <?php get_template_part( 'template-parts/footer-parts/footer-popular');?>
                    </div>
                    <div class="col-4">
                        <?php get_template_part( 'template-parts/footer-parts/footer-category');?>
                    </div>
                    <div class="col-4">
                        <?php get_template_part( 'template-parts/footer-parts/footer-tags');?>
                    </div>
                </div>
                <!--- End Row --->
                <div class="row">
                    <!-- Start foucs-logo -->
                    <div class="col-4">
                        <div class="foucs-logo">
                            <?php the_custom_logo();?>
                        </div>
                    </div>
                    <!-- End foucs-logo -->
                    <!-- Start foucs-about -->
                    <div class="col-4">
                        <div class="foucs-about">
                            <span>about us</span>
                            <?php echo foucs_about_us_desc()?>
                        </div>
                    </div>
                    <!-- End foucs-about -->
                    <!-- Start social icon -->
                    <div class="col-4">
                        <div class="followus">
                            <span>follow us</span>
                            <?php echo foucs_social_icons_links() ?>
                        </div>
                    </div>
                    <!-- End social icon -->
                </div>
                <!--- End Row --->
                <div class="end-foter">
                    <div class="row">
                        <div class="col-6">
                            <span>
                                Copyright &copy; <?php echo date('Y');?> <?php bloginfo('name');?>   by <a href="https://www.facebook.com/relationscode/">Relat!ons Code</a>
                            </span>
                        </div>
                        <!-- Start Footer Nav --->
                        <div class="col-6">
                            <nav class="navbar navbar-expand-lg footer-nav">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php foucs_nav_custom_footer_menu() ?>
                                </div>
                            </nav>
                        </div><!-- End Footer Nav --->
                    </div><!--- End row --->
                </div>
            </div><!--- End container-fluid --->
        </div> <!--- End Footer --->
        <?php wp_footer(); ?>
    </body>
</html>