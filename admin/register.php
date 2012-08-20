<?php

require_once '../includes/initialize.php';
$smarty = new MySmarty();

if(isset($_POST['submit'])) {
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $rpassword = trim($_POST['rpassword']);
    $first_name = trim($_POST['fname']);
    $last_name = trim($_POST['lname']);
    
    $is_registered = User::register($username, $password, $rpassword, $first_name, $last_name);
    
    if($is_registered) {
        $session->message('Registration Successfully.');
        redirect_to('login.php');
    }
    else {
        $session->message('Some fields are problematic. Try again.');
        redirect_to('register.php');
    }
}

$smarty->assign('message', output_message($message));

$smarty->display('admin_header.tpl');
$smarty->display('register.tpl');
$smarty->display('admin_footer.tpl');
