<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
   <input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" name="author" value="name" type="text">
   <input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" name="email"  value="email" type="text">
   <textarea onfocus="if(this.value == 'message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'message'; }" name="comment">message</textarea>
   <input type="hidden" name="comment_post_ID" value="1">
   <input type="hidden" name="comment_parent" id="comment_parent" value="1">
   <input type="submit" name="submit" value="Post Comment" /> 
</form>
<div class="posted-comments">
    <?php if ($comments) : ?>  
        <ul>
            <?php foreach ($comments as $comment) : ?> 
                <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
                    <div class="comment-info">
                        <?php echo get_avatar( $comment, 45 ); ?>
                        <div class="cauthorinfo"><strong><?php comment_author_link() ?></strong></div><br />
                        <div class="cauthordata"><?php comment_date('F jS, Y') ?></div>
                    </div>
                    <div class="comment-data">
                        <span id="commenttext"><?php comment_text() ?></span> 
                        <?php if ($comment->comment_approved == '0') : ?> 
                            <em>Your comment is awaiting moderation.</em>
                        <?php endif; ?>
                        <?php edit_comment_link('edit', '&nbsp;&nbsp;', ''); ?> 
                    </div>

                </li>
                <?php
                /* Changes every other comment to a different class */
                $oddcomment = ( empty($oddcomment) ) ? 'class="alt" ' : ''; /* different style for the class named as "alt" */
                ?>
            <?php endforeach; /* end for each comment */ ?>
        </ul>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if ('open' == $post->comment_status) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php else : // comments are closed ?>
            <!-- If comments are closed. -->
            <p class="nocomments">Comments are closed.</p>
        <?php endif; ?>
</div>
        <?php if ('open' == $post->comment_status) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php else : // comments are closed ?>
            <!-- If comments are closed. -->
            <p class="nocomments">Comments are closed.</p>
        <?php endif; ?>
    <?php endif; ?>