<?php

require_once '../includes/initialize.php';
if ($session->is_logged_in()) {
    redirect_to('index.php');
}
$smarty = new MySmarty();

if(isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $user = User::authenticate($username, $password);
    
    if($user) {
        $session->login($user);
        log_action('Login', $user->username.' is logged in');
        redirect_to('index.php');
    }
    else {
        $session->message('Wrong username/password');
        redirect_to('login.php');
    }
}

$smarty->assign('message', output_message($message));

$smarty->display('admin_header.tpl');
$smarty->display('login.tpl');
$smarty->display('admin_footer.tpl');




