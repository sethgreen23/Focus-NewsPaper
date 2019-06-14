<?php
    function author_description() {
        if(get_the_author_meta('description')) {
            echo the_author_meta('description'); // Print Description If Have
        } else {
            echo '<div class="alert alert-danger" role="alert">No Have Description</div>';
        }
    } // admin = 0
    //$DDR = the_author_meta('user_status',get_the_author_meta('ID'));
    /*function author_des() {
        global $DDR;
        if( $DDR == 0) {
            
            echo 'admin'; // Print Description If Have
        } else {
            echo '<div class="alert alert-danger" role="alert">No admin</div>';
        }
    }*/
    //10 admin 7editor 2.1 author
?>    

<div class="info-body">
    <div class="my-info text-center ">
        <div class="author-img overflow zoom">
            <?php 
                $avatar_arg = array( 'class' => 'img-thumbnail rounded-circle');
                echo get_avatar(get_the_author_meta('ID'), 200, '','Author Photo', $avatar_arg);
            ?>
        </div>   

        <div class="info-body">
            <h2> <?php the_author_meta('nickname') ?> </h2>

            <p> <?php echo author_description() ?></p>
            <p><?php echo get_the_author_posts(); ?> </p>

            <span>
                <?php the_author_meta('user_level',get_the_author_meta('ID')); ?>
                <?php the_author_meta('user_url',get_the_author_meta('ID')); ?>
            </span>
        </div>


    </div>
</div>