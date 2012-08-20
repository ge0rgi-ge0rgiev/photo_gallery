<?php

require_once '../includes/initialize.php';



$smarty = new MySmarty();
//$var = '<strong>pedal</strong>';
$var = '15 August, 18:05:50';


$smarty->assign('var', $var);
$smarty->display('test.tpl');