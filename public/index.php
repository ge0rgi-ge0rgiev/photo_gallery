<?php

require_once '../includes/initialize.php';
$smarty = new MySmarty();

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 3;
$total_count = Photograph::count_all();

$pagination = new Pagination($page, $per_page, $total_count);

$sql = "SELECT * FROM photographs ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";

$photos = Photograph::find_by_sql($sql);

$smarty->assign('photos', $photos);
$smarty->assign('pagination', $pagination);
$smarty->assign('current_page', $page);
$smarty->assign('message', output_message($message));

$smarty->display('header.tpl');
$smarty->display('index_public.tpl');
$smarty->display('footer.tpl');