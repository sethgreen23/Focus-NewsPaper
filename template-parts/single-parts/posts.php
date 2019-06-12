<!--- Start single-page-post --->
<div class="single-page-post">
    <section class="body-post">
        <article class="main-post">
            <div class="post-heading">
<!--- Start post-title --->                           
                <h3 class="post-title text-capitalize">
                    <?php the_title() // Get The Title Post ?>
                </h3><!--- End post-title --->
<!--- Start post-info --->
                <div class="post-info">
<!--- Start post-author --->
                    <span class="post-author icon">
                        <i class="fa fa-user"></i>
                        <?php the_author_posts_link() ?>
                    </span><!--- End post-author --->
<!--- Start post-time --->
                    <span class="post-time icon">
                        <i class="far fa-clock"></i>
                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; // Echo The time ?>
                    </span><!--- End post-time --->
<!--- Start Edit post --->
                    <?php edit_post_link('<i class="fa fa-pen"></i>  Edit') ?>
                    <!--- End Edit post --->
<!--- Start post-comment --->
                    <span class="post-comment icon">
                        <i class="fas fa-comment"></i>
                        <span class="comment text-capitalize">
                            <?php comments_popup_link('No Comment', 'One Comment', '%comments', 'comment-url', 'Comment Off') ?>
                        </span>
                    </span><!--- End post-comment --->
<!--- Start post-view --->
                    <span class="post-view icon">
                        <i class="far fa-eye"></i>
                        <?php foucs_post_views() //Get The Post Views?>
                    </span><!--- End post-view --->   
                </div><!--- End post-info --->
            </div><!--- End post-heading --->
<!--- Start single-post-img --->
                <div class="single-post-img">
                    <div class="post-img">
                        <?php foucs_check_post_image() //Get The Post Image?>
                    </div>
                </div><!--- End single-post-img --->
<!--- Start post-content --->
                <div class="post-content text-capitalize">
                    <?php the_content('') // Show Conten OF Post?>
                </div><!--- End post-content --->
        </article><!--- End main-post--->
    </section><!--- End body-post--->
    <?php echo '<div class="clearfix"></div>'; // fix Float Clear ?>
</div><!--- End single-page-post --->
<!--- Start share-box --->