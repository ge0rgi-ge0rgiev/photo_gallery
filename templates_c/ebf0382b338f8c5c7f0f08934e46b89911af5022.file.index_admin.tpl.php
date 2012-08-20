<?php /* Smarty version Smarty-3.1.11, created on 2012-08-19 14:46:36
         compiled from "C:\wamp\www\photo\templates\index_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111075030fc4cf24c49-41733895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf0382b338f8c5c7f0f08934e46b89911af5022' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\index_admin.tpl',
      1 => 1345386992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111075030fc4cf24c49-41733895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5030fc4d12ba42_73133844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5030fc4d12ba42_73133844')) {function content_5030fc4d12ba42_73133844($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<h2>Menu</h2>
<ul>
    <li><a href="list_photos.php">List Photos</a></li>
    <li><a href="log_file.php">View Log file</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php }} ?>