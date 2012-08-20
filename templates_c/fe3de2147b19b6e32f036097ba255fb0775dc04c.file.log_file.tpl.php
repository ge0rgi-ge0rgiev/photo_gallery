<?php /* Smarty version Smarty-3.1.11, created on 2012-08-18 00:38:21
         compiled from "C:\wamp\www\photo\templates\log_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24195502ee1aac896e0-52792769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe3de2147b19b6e32f036097ba255fb0775dc04c' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\log_file.tpl',
      1 => 1345250297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24195502ee1aac896e0-52792769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502ee1aace12e5_92719082',
  'variables' => 
  array (
    'records' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502ee1aace12e5_92719082')) {function content_502ee1aace12e5_92719082($_smarty_tpl) {?><a href="index.php">&laquo; Back</a><br />
<br />
<h2>Log File</h2>
<p><a href="log_file.php?clear=true">Clear log file</a><p>
<ul class="log-entries" ><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['item']->value!=''){?><li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li><?php }?><?php } ?></ul><?php }} ?>