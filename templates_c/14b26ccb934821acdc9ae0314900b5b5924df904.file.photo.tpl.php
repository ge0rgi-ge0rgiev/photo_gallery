<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 02:37:17
         compiled from "C:\wamp\www\photo\templates\photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126385031a25f6538c8-98971660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b26ccb934821acdc9ae0314900b5b5924df904' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\photo.tpl',
      1 => 1345430236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126385031a25f6538c8-98971660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031a25f727ea7_29350818',
  'variables' => 
  array (
    'photo' => 0,
    'comments' => 0,
    'comment' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031a25f727ea7_29350818')) {function content_5031a25f727ea7_29350818($_smarty_tpl) {?>
<a href="index.php">&laquo; Back</a><br />
<br />

<div style="margin-left: 20px;">
  <img src="../<?php echo $_smarty_tpl->tpl_vars['photo']->value->image_path();?>
" />
  <p><?php echo $_smarty_tpl->tpl_vars['photo']->value->caption;?>
</p>
</div>


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
    </div>
  <?php } ?>
  <?php if (empty($_smarty_tpl->tpl_vars['comments']->value)){?>
        No Comments.
    <?php }?> 
</div>


<div id="comment-form">
  <h3>New Comment</h3>
  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

  <form action="photo.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
" method="post">
        <label for="author">Your name:</label>
        <br/>
        <input type="text" id="author" name="author"  /></p>
        <label for="body">Your comment:</label>
        <br />
        <textarea id="body" name="body" cols="40" rows="8"></textarea></p>
        <input type="submit" name="submit" value="Submit Comment" />
    </form>
</div><?php }} ?>