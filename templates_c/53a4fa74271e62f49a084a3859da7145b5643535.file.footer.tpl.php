<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 02:13:44
         compiled from "C:\wamp\www\photo\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10899502ec97fc786c1-86037670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a4fa74271e62f49a084a3859da7145b5643535' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\footer.tpl',
      1 => 1345245737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10899502ec97fc786c1-86037670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502ec97fc7b311_48743706',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502ec97fc7b311_48743706')) {function content_502ec97fc7b311_48743706($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\photo\\includes\\Smarty\\libs\\plugins\\modifier.date_format.php';
?></div>
<div id="footer">Copyright <?php echo smarty_modifier_date_format(time(),"%Y");?>
, Georgi Georgiev</div>
</body>
</html>
<?php }} ?>