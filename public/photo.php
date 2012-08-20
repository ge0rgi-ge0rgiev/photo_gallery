<?php 

require_once("../includes/initialize.php");

if(empty($_GET['id'])) {
    $session->message('No photograph ID was provided. ');
    redirect_to('index.php');
}

$smarty = new MySmarty();
$photo = Photograph::find_by_id($_GET['id']);

if(!$photo) {
    $session->message('The Photo could not be located');
    redirect_to('index.php');
}

if(isset($_POST['submit'])) {
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);
    
    $new_comment = Comment::make($photo->id, $author, $body);
    if($new_comment && $new_comment->save()) {
        redirect_to('photo.php?id=' . $photo->id);
    }
    else {
        $session->message('There was an error that prevented the comment from being saved. ');
        redirect_to('photo.php?id=' . $photo->id);
    }
}
else {
    $author = '';
    $body = '';
}

$comments = $photo->comments();

$smarty->assign('photo', $photo);
$smarty->assign('comments', $comments);
$smarty->assign('message', output_message($message));

$smarty->display('header.tpl');
$smarty->display('photo.tpl');
$smarty->display('footer.tpl');