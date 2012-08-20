<a href="list_photos.php">&laquo; Back</a><br />
<br />
<h2>Comments on {$photo->filename}</h2>
{$message}
<div id="comments">
    {foreach $comments as $comment}
        <div class="comment" style="margin-bottom: 2em;">
            <div class="author">
                {$comment->author|htmlentities} wrote:
            </div>
            <div class="body">
                {$comment->body|strip_some_tags:'<strong><em><p>'}
            </div>
            <div class="meta-info" style="font-size: 0.8em;">
                {$comment->created|date_as_text}
            </div>
            <div class="actions" style="font-size: 0.8em;">
                <a href="delete_comment.php?id={$comment->id}">Delete Comment</a>
            </div>
        </div>
    {/foreach}

    {if empty($comments)}
        No Comments.
    {/if} 
</div>