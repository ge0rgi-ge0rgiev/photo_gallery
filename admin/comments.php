<?php

require_once '../includes/initialize.php';
if(!$session->is_logged_in()) {
    redirect_to('login.php');
}

if(empty($_GET['id'])) {
    $session->message("No photograph ID was provided.");
    redirect_to('index.php');
}

$smarty = new MySmarty();

$photo = Photograph::find_by_id($_GET['id']);
$comments = $photo->comments();

$smarty->assign('comments', $comments);
$smarty->assign('photo', $photo);
$smarty->assign('message', output_message($message));

$smarty->display('admin_header.tpl');
$smarty->display('comments.tpl');
$smarty->display('admin_footer.tpl');