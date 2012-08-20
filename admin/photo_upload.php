<?php

require_once '../includes/initialize.php';
if(!$session->is_logged_in()) {
    redirect_to('login.php');
}

$smarty = new MySmarty();
$max_file_size = 1048576;

if(isset($_POST['submit'])) {
    $photo = new Photograph();
    $photo->caption = $_POST['caption'];
    $photo->attach_file($_FILES['file_upload']);
    if($photo->save()) {
        $session->message("Photograph uploaded successfully.");
        redirect_to('list_photos.php');
    }
    else {
        $message = join('<br />', $photo->errors);
    }
}

$smarty->assign('message', output_message($message));
$smarty->assign('max_file_size', $max_file_size);

$smarty->display('admin_header.tpl');
$smarty->display('photo_upload.tpl');
$smarty->display('admin_footer.tpl');