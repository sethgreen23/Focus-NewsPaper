<?php 
$comment_per_page = 10;
$comment_argu = array(
    'user_id'           => get_the_author_meta('ID'),
    'status'            =>'approve',
    'number'            => $comment_per_page,
    'post_status'       =>'publish',
    'post_type'         =>'post',
    
);
$comments = get_comments($comment_argu);?>

<h3 class="head-comment text-capitalize">
    latest comments
</h3>
<?php
if ($comments) { // Check Have Comment Or No
    foreach($comments as $comment) { ?>
        <div class="author-comment">
            <div class="comment">
                <h3 class="post-title">
                    <a href="<?php echo get_permalink($comment->comment_post_ID) ?>">
                        <?php echo get_the_title ($comment->comment_post_ID) ?>
                    </a>
                </h3>
                <span class="post-date">
                    <i class="fa fa-calendar"></i>
                        <span class="date"><?php  echo $comment->comment_date ?> </span>
                </span>
                <div class="post-content">
                    <p><?php echo $comment->comment_content ?></p>
                </div> 
            </div>
        </div>
    <?php }
} else {
    echo'<div class="alert alert-danger" role="alert">
            <strong>No Have Any Comment</strong>
        </div>';
}
