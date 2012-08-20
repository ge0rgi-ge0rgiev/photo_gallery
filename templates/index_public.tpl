{$message}
{foreach $photos as $photo}
    <div style="float: left; margin-left: 20px;">
        <a href="photo.php?id={$photo->id}">
            <img src="../{$photo->image_path()}" width="200"  />
        </a>
        <p>{$photo->caption}</p>
    </div>
{/foreach}

<div id="pagination" style="clear: both; ">
    {if $pagination->total_pages() > 1}

        {if $pagination->has_previous_page()}
            <a href="index.php?page={$pagination->previous_page()}">&laquo; Previous</a>
        {/if}


        {section name=foo loop=$pagination->total_pages()} 
            {if $smarty.section.foo.iteration == $current_page}
                <span class="selected">{$smarty.section.foo.iteration}</span>
            {else}
                <a href="index.php?page={$smarty.section.foo.iteration}">{$smarty.section.foo.iteration}</a>
            {/if}
        {/section}

        {if $pagination->has_next_page()}
            <a href="index.php?page={$pagination->next_page()}">Next &raquo;</a>
        {/if}

    {/if}
</div>