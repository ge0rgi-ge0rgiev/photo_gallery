<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 02:09:37
         compiled from "C:\wamp\www\photo\templates\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1209750319a6215eaf8-46937153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a8caefcffb0608925a706670a3bf7f720e5a12' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\comments.tpl',
      1 => 1345428572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209750319a6215eaf8-46937153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50319a62214125_91514467',
  'variables' => 
  array (
    'photo' => 0,
    'message' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50319a62214125_91514467')) {function content_50319a62214125_91514467($_smarty_tpl) {?><a href="list_photos.php">&laquo; Back</a><br />
<br />
<h2>Comments on <?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
</h2>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<div id="comments">
    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="comment" style="margin-bottom: 2em;">
            <div class="author">
                <?php echo htmlentities($_smarty_tpl->tpl_vars['comment']->value->author);?>
 wrote:
            </div>
            <div class="body">
                <?php echo strip_some_tags($_smarty_tpl->tpl_vars['comment']->value->body,'<strong><em><p>');?>

            </div>
            <div class="meta-info" style="font-size: 0.8em;">
                <?php echo date_as_text($_smarty_tpl->tpl_vars['comment']->value->created);?>

            </div>
            <div class="actions" style="font-size: 0.8em;">
                <a href="delete_comment.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">Delete Comment</a>
            </div>
        </div>
    <?php } ?>

    <?php if (empty($_smarty_tpl->tpl_vars['comments']->value)){?>
        No Comments.
    <?php }?> 
</div><?php }} ?>