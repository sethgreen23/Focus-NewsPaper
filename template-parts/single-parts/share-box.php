<?php 

$title = get_the_title($post->ID); // Get The Title of Post

$permalink = get_permalink($post->ID); // Get The Link of Post

?>
<div class="link-post-btn-share">
    <ul class="butn-shere list-unstyled">
        <?php foucs_share_this_post($title,$permalink) ?> 
    </ul>
</div>