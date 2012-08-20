<?php

require_once '../includes/initialize.php';
if(!$session->is_logged_in()) {
    redirect_to('login.php');
}

$smarty = new MySmarty();

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$per_page = 3;
$total_count = Photograph::count_all();

$pagination = new Pagination($page, $per_page, $total_count);
$pages = $pagination->total_pages();

$sql = "SELECT * FROM photographs ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()} ";

$photos = Photograph::find_by_sql($sql);

$arr = array(1, 2, 3, 4);

//$smarty->assign('current_page', $page);
$smarty->assign('photos', $photos);
$smarty->assign('pagination', $pagination);
$smarty->assign('current_page', $page);
$smarty->assign('message', output_message($message));

$smarty->display('admin_header.tpl');
$smarty->display('list_photos.tpl');
$smarty->display('admin_footer.tpl');