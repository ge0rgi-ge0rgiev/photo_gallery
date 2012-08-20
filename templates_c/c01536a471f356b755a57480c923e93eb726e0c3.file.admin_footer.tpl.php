<?php /* Smarty version Smarty-3.1.11, created on 2012-08-17 23:21:48
         compiled from "C:\wamp\www\photo\templates\admin_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23791502ed161376dd5-61964858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01536a471f356b755a57480c923e93eb726e0c3' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\admin_footer.tpl',
      1 => 1345245705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23791502ed161376dd5-61964858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502ed1613899d6_36508048',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502ed1613899d6_36508048')) {function content_502ed1613899d6_36508048($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\photo\\includes\\Smarty\\libs\\plugins\\modifier.date_format.php';
?></div>
<div id="footer">Copyright <?php echo smarty_modifier_date_format(time(),"%Y");?>
, Georgi Georgiev</div>
</body>
</html>
<?php }} ?>