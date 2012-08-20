<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 02:47:59
         compiled from "C:\wamp\www\photo\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213445030fc6d69e895-48232860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f782bf78dc24755e65ef6a6a7d38ffd595924e16' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\login.tpl',
      1 => 1345430877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213445030fc6d69e895-48232860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5030fc6d6ddc07_35755883',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5030fc6d6ddc07_35755883')) {function content_5030fc6d6ddc07_35755883($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form action="login.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="useraname" maxlength="30"  /></p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" maxlength="30"  /></p>
    <input type="submit" name="submit" value="Login" />
</form>
<a href="register.php">Register</a><?php }} ?>