<?php 
/*

@package foucs_newspaper
    ===============================
        Get All post Tag OrderedBy Count & DESC.
    ===============================
*/
?>
<!--- Start popular-tag-footer --->
<div class="popular-tag-footer">
    <!-- Start articals-tag-popular --->
    <div class="body-articals-tag-popular">
        <div class="name-artical">
            <span class="footer-name text-capitalize">popular tags</span>
        </div>
        <div class="tag-body"> 
            <?php foucs_show_taxonomy('post_tag','count', 'DESC', 10,) ?>      
        </div><!-- End tag-body --->
    </div><!-- End body-articals-tag-popular --->
</div><!-- End popular-tag-footer --->
                        