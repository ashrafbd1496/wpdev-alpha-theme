<?php

//Get only the approved comments
$args = array(
    'status' => 'approve',
    'post_id' => get_the_ID(),
);
?>
<div class="comment mt-3">
    <?php
    // The comment Query
    $comments_query = new WP_Comment_Query;
    $comments       = $comments_query->query($args);

    // Comment Loop
    if ($comments) {
        foreach ($comments as $comment) {
            ?>

            <div class="media">
                <?php echo get_avatar($comment,50,null,null,array(
                    'class' =>  'mr-3',
                )) ;?>
                <div class="media-body">
                    <h6 class="mt-0">
                        <?php comment_author($comment);
                        ?>
                        <?php edit_comment_link(); ?>
                    </h6>
                    <?php comment_text($comment); ?>
                </div>
            </div>

            <?php
        }
    } else {
        echo 'No comments found.';
    }
    ?>
    <div class="comment-form">
        <?php comment_form(); ?>
    </div>
</div>
