<a href="index.php">&laquo; Back</a><br />
<br />
<h2>Photographs</h2>
{$message}
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
    <th>Comments</th>
    <th>&nbsp;</th>
  </tr>
{foreach $photos as $photo}
  <tr>
    <td><img src="../{$photo->image_path()}" width="100" /></td>
    <td>{$photo->filename}</td>
    <td>{$photo->caption}</td>
    <td>{$photo->size_as_text()}</td>
    <td>{$photo->type}</td>
    <td>
        <a href="comments.php?id={$photo->id}">
            {$photo->comments()|@count}
        </a>
    </td>
    <td><a href="delete_photo.php?id={$photo->id}">Delete</a></td>
  </tr>
{/foreach}
</table>
<br />
{if empty($photos)}
No Photos.
{/if} 
<br />
<br />
<div id="pagination">

{if $pagination->total_pages() > 1}
    
    {if $pagination->has_previous_page()}
        <a href="list_photos.php?page={$pagination->previous_page()}">&laquo; Previous</a>
    {/if}
    
     
    {section name=foo loop=$pagination->total_pages()} 
        {if $smarty.section.foo.iteration == $current_page}
            <span class="selected">{$smarty.section.foo.iteration}</span>
        {else}
            <a href="list_photos.php?page={$smarty.section.foo.iteration}">{$smarty.section.foo.iteration}</a>
        {/if}
    {/section}
    
    {if $pagination->has_next_page()}
        <a href="list_photos.php?page={$pagination->next_page()}">Next &raquo;</a>
    {/if}
    
{/if}
</div>
<br />
<br />
<a href="photo_upload.php">Upload a new photograph</a>
