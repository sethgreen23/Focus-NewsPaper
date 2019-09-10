<?php
    /*
		This is the template for the footer
		
		@package foucs_newspaper
    */
?>      <!--- Start Footer --->
        <footer class="footer-section">
            <div class="footer-body">
                <div class="container-fluid">
                    <div class="row bord-footer">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <?php get_template_part( 'template-parts/footer-parts/footer-popular');?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <?php get_template_part( 'template-parts/footer-parts/footer-category');?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <?php get_template_part( 'template-parts/footer-parts/footer-tags');?>
                        </div>
                    </div>
                    <!--- End Row --->
                    <div class="row">
                        <!-- Start foucs-logo -->
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="foucs-logo">
                                <?php the_custom_logo();?>
                                <h5 class="desc-site text-capitalize text-center"><?php bloginfo( 'description' ); ?></h5>
                            </div>
                        </div>
                        <!-- End foucs-logo -->
                        <!-- Start foucs-about -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="foucs-about">
                                <span class="text-capitalize">about us</span>
                                <?php echo foucs_about_us_desc()?>
                            </div>
                        </div>
                        <!-- End foucs-about -->
                        <!-- Start social icon -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="follow-us">
                                <span class="follow text-capitalize" >follow us</span>
                                <?php echo foucs_social_icons_links() ?>
                            </div>
                        </div>
                        <!-- End social icon -->
                    </div>
                    <!--- End Row --->
                    <div class="row end-footer">
                        <div class="col-sm-12 col-md-12 col-lg-6 co-right">
                            <span class="copyright">
                                Copyright &copy; <?php echo date('Y');?> <?php bloginfo('name');?>   by <a href="https://www.facebook.com/relationscode/">Relat!ons Code</a>
                            </span>
                        </div>
                        <!-- Start Footer Nav --->
                        <div class="col-sm-12 col-md-12 col-lg-6 navigat">
                            <nav class="navbar navbar-expand-lg footer-nav">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php foucs_nav_custom_footer_menu() ?>
                                </div>
                            </nav>
                        </div><!-- End Footer Nav --->
                    </div><!--- End row --->
                </div><!--- End container-fluid --->
            </div> <!--- End Footer --->
        </footer><!--- End footer-body --->
        <?php wp_footer(); ?>
    </body>
</html>