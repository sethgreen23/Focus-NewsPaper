<?php
    /*
		This is the template for the hedaer Author Page
		
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
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse author-nav" id="navbarNav">
                <?php foucs_nav_custom_theme_menu() ?>
            </div>
            <?php get_search_form()?>
        </nav>
        <!-- End Theme nav  -->
