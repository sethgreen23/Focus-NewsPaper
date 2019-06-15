<div class="my-info text-center ">
<!--- Start author-img zoom--->
    <div class="author-img zoom">
        <?php 
            $avatar_arg = array( 'class' => 'img-thumbnail rounded-circle');
            echo get_avatar(get_the_author_meta('ID'), 200, '','Author Photo', $avatar_arg);
        ?>
    </div> <!--- End author-img zoom --->
<!--- Start info-body --->  
    <div class="info-body">
        <h2 class="name text-capitalize"> <?php author_meta_name('nickname') ?> </h2>
        <p class="descript text-capitalize">  <?php author_description() ?></p>
        <div class="post-count text-capitalize">  
           <p> post number : </p> <span><?php author_count_post() ?></span> 
        </div>
        <a 
            class="btn web-btn text-capitalize" 
            role="button" 
            aria-pressed="true"
            href="<?php author_meta_name('user_url') ?>" 
            target="blank">
            website 
        </a>
    </div><!--- End info-body --->
</div><!--- End my-info--->