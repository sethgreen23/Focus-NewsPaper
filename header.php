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
        <!-- Start Uppernav  -->
        <nav class="navbar navbar-expand-lg upper-nav">
            <div class="navbar-brand">
                <i class="fas fa-calendar-alt"></i>
                <span class="date"><?php echo date('F j, Y'); ?></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php foucs_nav_custom_upper_menu() ?>
            </div>
        </nav>
        <!-- End Uppernav  -->
        <!-- Start container-fluid Header  -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Start Header Logo  -->
                    <div class="col-6">
                        <div class="header-container background-image">
                            <div class="foucs-logo">
                                <?php the_custom_logo();?>
                                <h5 class="desc-site text-capitalize text-center"><?php bloginfo( 'description' ); ?></h5>
                            </div><!-- foucs-logo -->
                        </div>
                    </div>
                    <!-- End Header Logo  -->
                    <!-- Start ADS block  -->
                    <div class="col-6">
                        <div class="foucs-ads">
                            <a href="<?php esc_url(home_url('/')) ?>">
                                <img src="<?php echo get_template_directory_uri() . '/image/foucs2.png' ?>" alt="Foucs News Paper Theme ads">
                            </a>
                        </div><!-- foucs-ads -->
                    </div><!-- End Start ADS block  -->
                </div><!-- End row -->
            </div>
        <!-- End container-fluid Header  -->
        <!-- Start Theme nav  -->
        <nav class="navbar navbar-expand-lg second-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php foucs_nav_custom_theme_menu() ?>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <!-- End Theme nav  -->