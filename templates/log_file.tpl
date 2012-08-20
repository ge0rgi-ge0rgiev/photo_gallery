<a href="index.php">&laquo; Back</a><br />
<br />
<h2>Log File</h2>
<p><a href="log_file.php?clear=true">Clear log file</a><p>
{strip}
<ul class="log-entries" >
    {foreach $records as $item}
        {if $item != ''}
            <li>{$item}</li>
        {/if}
    {/foreach}
</ul>
{/strip}