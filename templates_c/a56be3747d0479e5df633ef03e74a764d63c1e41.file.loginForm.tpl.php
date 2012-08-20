<?php /* Smarty version Smarty-3.1.11, created on 2012-08-17 23:33:16
         compiled from "C:\wamp\www\photo\templates\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9719502ec86b3ce0f1-78895874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56be3747d0479e5df633ef03e74a764d63c1e41' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\loginForm.tpl',
      1 => 1345246395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9719502ec86b3ce0f1-78895874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502ec86b408439_14936726',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502ec86b408439_14936726')) {function content_502ec86b408439_14936726($_smarty_tpl) {?><form action="login.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="useraname" maxlength="30"  /></p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" maxlength="30"  /></p>
    <input type="submit" name="submit" value="Login" />
</form><?php }} ?>