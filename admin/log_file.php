<?php
require_once '../includes/initialize.php';
if(!$session->is_logged_in()) {
    redirect_to('login.php');
}

$smarty = new MySmarty();
$log_file = SITE_ROOT.DS.'logs'.DS.'log.txt';

if(isset($_GET['clear']) && $_GET['clear'] == true) {
    file_put_contents($log_file, '');
    log_action('Logs Cleared ', "by User ID {$session->user_id}");
    redirect_to('log_file.php');
}

if(file_exists($log_file) && is_readable($log_file) && $handle = fopen($log_file, 'r')) {
    $log_records = array();
    while(!feof($handle)) {
        $log_records[] = fgets($handle);
    }
    fclose($handle);
}

$smarty->assign('records', $log_records);

$smarty->display('admin_header.tpl');
$smarty->display('log_file.tpl');
$smarty->display('admin_footer.tpl');