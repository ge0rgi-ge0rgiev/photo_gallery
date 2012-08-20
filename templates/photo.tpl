
<a href="index.php">&laquo; Back</a><br />
<br />

<div style="margin-left: 20px;">
  <img src="../{$photo->image_path()}" />
  <p>{$photo->caption}</p>
</div>


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
    </div>
  {/foreach}
  {if empty($comments)}
        No Comments.
    {/if} 
</div>


<div id="comment-form">
  <h3>New Comment</h3>
  {$message}
  <form action="photo.php?id={$photo->id}" method="post">
        <label for="author">Your name:</label>
        <br/>
        <input type="text" id="author" name="author"  /></p>
        <label for="body">Your comment:</label>
        <br />
        <textarea id="body" name="body" cols="40" rows="8"></textarea></p>
        <input type="submit" name="submit" value="Submit Comment" />
    </form>
</div>