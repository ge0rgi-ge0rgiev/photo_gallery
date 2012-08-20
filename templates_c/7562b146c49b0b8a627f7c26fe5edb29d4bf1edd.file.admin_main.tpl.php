<?php /* Smarty version Smarty-3.1.11, created on 2012-08-18 00:17:27
         compiled from "C:\wamp\www\photo\templates\admin_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26260502ede18334bd5-78415903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7562b146c49b0b8a627f7c26fe5edb29d4bf1edd' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\admin_main.tpl',
      1 => 1345249045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26260502ede18334bd5-78415903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502ede183856d2_72548711',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502ede183856d2_72548711')) {function content_502ede183856d2_72548711($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<h2>Menu</h2>
<ul>
    <!--<li><a href="profile.php">Profile</a></li>-->
    <li><a href="list_photos.php">List Photos</a></li>
    <li><a href="log_file.php">View Log file</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php }} ?>