<h2>Photo Upload</h2>
{$message}
<form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="{$max_file_size}" />
    <p><input type="file" name="file_upload" /></p>
    <p>Caption: <input type="text" name="caption" value="" /></p>
    <input type="submit" name="submit" value="Upload" />
</form>