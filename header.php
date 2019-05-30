<?php
    /*
		This is the template for the hedaer & Navegations
		
		@package foucs_newspaper
	*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="author" content="Hesham Adel">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript,pugjs,sass,php,wordpress,laravel,mysql">
        <title>
            <?php wp_title('|', 'true', 'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
        <?php wp_head(); ?>
        <?php 
			$custom_css = esc_attr( get_option( 'foucs_css' ) );
			if( !empty( $custom_css ) ):
				echo '<style>' . $custom_css . '</style>';
			endif;
        ?>
    </head>
    <!-- Start Body -->
    <body <?php body_class(); ?>>
        <!-- Start container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-container background-image">
                            <div class="foucs-logo">
                                <?php the_custom_logo();?>
                                <h5 class="desc-site text-capitalize text-center"><?php bloginfo( 'description' ); ?></h5>
                            </div><!-- foucs-logo -->
                            <div class="foucs-ads">
                                <a href="<?php esc_url(home_url('/')) ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/image/foucs2.png' ?>" alt="Foucs News Paper Theme ads">
                                </a>
                            </div><!-- foucs-ads -->
                        </div><!-- header-container -->
                    </div><!-- End col-12  -->
                </div><!-- End row -->
            </div>
        <!-- End container-fluid -->
