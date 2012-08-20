<?php

require_once '../includes/initialize.php';
if(!$session->is_logged_in()) {
    redirect_to('login.php');
}

$smarty = new MySmarty();
$smarty->assign('message', output_message($message));


$smarty->display('admin_header.tpl');
$smarty->display('index_admin.tpl');
$smarty->display('admin_footer.tpl');

