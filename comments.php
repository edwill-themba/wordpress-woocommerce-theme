
 <?php 
        $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send Your Comment',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
); 
?>

<?php 
  comment_form($comments_args);
 ?>