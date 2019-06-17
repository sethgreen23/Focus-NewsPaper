<?php
    /*** 
        This is the Page for Include File Theme
        @package foucs_newspaper
    */

    // Admin File
    require get_template_directory() . '/inc/admin/function-admin.php';
    require get_template_directory() . '/inc/admin/enqueue.php';
    require get_template_directory() . '/inc/admin/admin-theme-option.php';
    require get_template_directory() . '/inc/admin/theme-shortcode.php';
    require get_template_directory() . '/inc/admin/custom-post-type.php';
    require get_template_directory() . '/inc/admin/ajax.php';

    // Theme File
    require get_template_directory() . '/inc/theme-file/enqueue-theme.php';
    require get_template_directory() . '/inc/theme-file/functions-theme.php';
    require get_template_directory() . '/inc/theme-file/theme-support.php';
    require get_template_directory() . '/inc/theme-file/widget.php';
