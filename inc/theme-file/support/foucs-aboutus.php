<?php
/*

@package foucs_newspaper
    =============================================
        Foucs Theme About Us Description Footer
    ============================================
*/
$about = esc_attr(get_option('about_us'));
?>

<div class="about-desc">
    <p class="about"> <?php echo $about; ?> </p>
</div>