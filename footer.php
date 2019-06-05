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
                        <!--Copyright &copy; </*?php echo date('Y'); ?> </*?php bloginfo('name'); ?*/>-->
                        <?php get_template_part( 'template-parts/footer-parts/footer-popular');?>
                    </div>
                    <div class="col-4">
                        <?php get_template_part( 'template-parts/footer-parts/footer-category');?>
                    </div>
                </div><!--- End Row --->
            </div><!--- End container-fluid --->
        </div> <!--- End Footer --->
        <?php wp_footer(); ?>
    </body>
</html>