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
    <div class="articals-cat-popular">
        <!-- Start body-cat-popular --->
        <div class="body-cat-popular">
            <div class="name-artical">
                <span class="text-capitalize">popular category</span>
            </div>
            <div class="category-body"> 
                <?php foucs_show_taxonomy('category','count', 'DESC', 10,) ?>      
            </div><!-- End category-body --->
        </div><!-- End body-cat-popular --->
    </div><!-- End articals-cat-popular --->
</div><!-- End popular-cat-footer --->
                        