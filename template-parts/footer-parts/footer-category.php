<?php 
/*

@package foucs_newspaper
    ===============================
        Get All post Categories OrderedBy Count & DESC.
    ===============================
*/
?>
<!--- Start popular-cat-footer --->
<div class="popular-cat-footer">
    <!-- Start body-cat-popular --->
    <div class="body-articals-cat-popular">
        <div class="name-artical">
            <span class="footer-name text-capitalize">popular category</span>
        </div>
        <div class="category-body"> 
            <?php foucs_show_taxonomy('category','count', 'DESC', 10,) ?>      
        </div><!-- End category-body --->
    </div><!-- End body-articals-cat-popular --->
</div><!-- End popular-cat-footer --->
                        