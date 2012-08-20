<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 03:34:38
         compiled from "C:\wamp\www\photo\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190355031a64a0ab446-84820523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badc59f5519851f4f4b1e8a3bcc718d7eb510a19' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\register.tpl',
      1 => 1345433351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190355031a64a0ab446-84820523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031a64a0e9747_22285607',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031a64a0e9747_22285607')) {function content_5031a64a0e9747_22285607($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form action="register.php" method="POST">
    <label for="username">Username:</label>
    <br />
    <input type="text" name="username" id="useraname" maxlength="30"  /></p>

    <label for="password">Password:</label>
    <br />
    <input type="password" id="password" name="password" maxlength="30"  /></p>

    <label for="rpassword">Repeat Password:</label>
    <br />
    <input type="password" id="rpassword" name="rpassword" maxlength="30"  /></p>

    <label for="fname">First Name:</label>
    <br />
    <input type="text" id="fname" name="fname" maxlength="30"  /></p>

    <label for="lname">Last Name:</label>
    <br />
    <input type="text" id="lname" name="lname" maxlength="30"  /></p>

    <input type="submit" name="submit" value="Register" />
</form><?php }} ?>