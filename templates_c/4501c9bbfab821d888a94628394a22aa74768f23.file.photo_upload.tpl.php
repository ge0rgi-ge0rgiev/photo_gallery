<?php /* Smarty version Smarty-3.1.11, created on 2012-08-19 19:34:19
         compiled from "C:\wamp\www\photo\templates\photo_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817250313f644e4991-59386850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4501c9bbfab821d888a94628394a22aa74768f23' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\photo_upload.tpl',
      1 => 1345404815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817250313f644e4991-59386850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50313f6451cc09_30431914',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50313f6451cc09_30431914')) {function content_50313f6451cc09_30431914($_smarty_tpl) {?><h2>Photo Upload</h2>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="<<?php ?>?php echo $max_file_size; ?<?php ?>>" />
    <p><input type="file" name="file_upload" /></p>
    <p>Caption: <input type="text" name="caption" value="" /></p>
    <input type="submit" name="submit" value="Upload" />
</form><?php }} ?>