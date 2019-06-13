<?php
    /*** 
        This is the Page for Comment Template
        @package foucs_newspaper
    ***/
?>
<div class="comment-area">
    <?php 
        if(comments_open()) { // Chick IF Comment Are Open ?>
            <h3 class="comment-count text-capitalize">
                <?php comments_number('add first comment', 'one comment', '% comments') ?>
            </h3>
            <div class="foucs-single-comments text-capitalize">
                <ul class="list-unstyled foucs-comments-list">
                    <?php 
                        $foucs_comment_args = array (
                            'max_depth'             => 2,          // Comment Level
                            'type'                  => 'comment',  // Comment Type
                            'avatar_size'           => 100,        // Avatar Size Pexl
                            'reverse_top_level'     => true,      // Last Comment To Top List Comment
                            'format'                => 'html5'
                        );
                        wp_list_comments($foucs_comment_args); // List All Comments
                    ?>
                </ul>
            </div>

            <div class="foucs-comment-form">
                <?php  
                    $foucs_commentform_arg= array(
                        // Form Filds
                        'fields' => array(
                            // Fild Author Name
                            'author'   => 
                                '<div class="input-group col-6 name-foucs-user"><span><i class="fas fa-user"></i></span>
                                    <input class="form-control" type="text" id="author" name="author" placeholder="Yor Name" required>
                                </div>',
                            // Fild Author E-mail
                            'email'    => 
                                ' <div class="input-group col-6 mail-foucs-user"><span><i class="fas fa-at"></i></span>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                                </div>',
                
                
                            // Fild Author WebSite Or Anther Link
                            'url'      => 
                                '<div class="input-group col-6 web-foucs-user"><span><i class="fas fa-mobile-alt"></i></span>
                                    <input class="form-control" type="text" id="url" name="url" placeholder="WebSite">
                                </div>',
                            
                            'cookies' => ''
                        ),
                        // Fild Writing Comments
                        'comment_field' =>    
                                '<div class="input-group col-12">
                                    <textarea class="form-control input-lg" type="text" id="comment" name="comment" placeholder="Your Comment" required></textarea>
                                </div>',
                            'comment_notes_before'    => '', // Disable Email Message
                            'must_log_in'             => '',
                            'logged_in_as'            => '',
                            'title_reply'             => '<i class="fas fa-thumbtack"></i>Add Your Comment',
                            'title_reply_to'          => 'Add a Reply To [%s]', // Show Name Hwo To Reply
                            'class_submit'            => 'foucs-btn', // Class To Edit CSS Style File
                            'label_submit'            => __( 'Submit Comment' ), // Button Name
                    );
                    comment_form($foucs_commentform_arg); 
                ?>
            </div> 
        <?php
        } else {
            echo 'sorry Comments Disabled';
        }
    ?>
</div>