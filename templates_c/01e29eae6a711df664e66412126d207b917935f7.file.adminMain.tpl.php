<?php /* Smarty version Smarty-3.1.11, created on 2012-08-18 00:12:30
         compiled from "C:\wamp\www\photo\templates\adminMain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31463502eddee248318-87849052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e29eae6a711df664e66412126d207b917935f7' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\adminMain.tpl',
      1 => 1345248574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31463502eddee248318-87849052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502eddee297ee0_13280125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502eddee297ee0_13280125')) {function content_502eddee297ee0_13280125($_smarty_tpl) {?><h2>Menu</h2>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<ul>
    <!--<li><a href="profile.php">Profile</a></li>-->
    <li><a href="list_photos.php">List Photos</a></li>
    <li><a href="log_file.php">View Log file</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php }} ?>