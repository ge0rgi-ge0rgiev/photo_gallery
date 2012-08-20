<?php /* Smarty version Smarty-3.1.11, created on 2012-08-19 19:29:29
         compiled from "C:\wamp\www\photo\templates\list_photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286975030fe4a2e7739-31288498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bc2a2bbfc1530d9abbedfb55c4b3dce358f5cd' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\list_photos.tpl',
      1 => 1345404232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286975030fe4a2e7739-31288498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5030fe4a324d90_83989783',
  'variables' => 
  array (
    'message' => 0,
    'photos' => 0,
    'photo' => 0,
    'pagination' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5030fe4a324d90_83989783')) {function content_5030fe4a324d90_83989783($_smarty_tpl) {?><a href="index.php">&laquo; Back</a><br />
<br />
<h2>Photographs</h2>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
    <th>Comments</th>
    <th>&nbsp;</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
  <tr>
    <td><img src="../<?php echo $_smarty_tpl->tpl_vars['photo']->value->image_path();?>
" width="100" /></td>
    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->caption;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->size_as_text();?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->type;?>
</td>
    <td>
        <a href="comments.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
">
            <?php echo count($_smarty_tpl->tpl_vars['photo']->value->comments());?>

        </a>
    </td>
    <td><a href="delete_photo.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
">Delete</a></td>
  </tr>
<?php } ?>
</table>
<br />
<?php if (empty($_smarty_tpl->tpl_vars['photos']->value)){?>
No Photos.
<?php }?> 
<br />
<br />
<div id="pagination">

<?php if ($_smarty_tpl->tpl_vars['pagination']->value->total_pages()>1){?>
    
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_previous_page()){?>
        <a href="list_photos.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->previous_page();?>
">&laquo; Previous</a>
    <?php }?>
    
     
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pagination']->value->total_pages()) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?> 
        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration']==$_smarty_tpl->tpl_vars['current_page']->value){?>
            <span class="selected"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</span>
        <?php }else{ ?>
            <a href="list_photos.php?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</a>
        <?php }?>
    <?php endfor; endif; ?>
    
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_next_page()){?>
        <a href="list_photos.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->next_page();?>
">Next &raquo;</a>
    <?php }?>
    
<?php }?>
</div>
<br />
<br />
<a href="photo_upload.php">Upload a new photograph</a>
<?php }} ?>