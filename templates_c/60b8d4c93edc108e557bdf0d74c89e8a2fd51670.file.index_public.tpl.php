<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 02:23:18
         compiled from "C:\wamp\www\photo\templates\index_public.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144450319d581e02b3-39951307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b8d4c93edc108e557bdf0d74c89e8a2fd51670' => 
    array (
      0 => 'C:\\wamp\\www\\photo\\templates\\index_public.tpl',
      1 => 1345429379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144450319d581e02b3-39951307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50319d581e0f11_52839044',
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
<?php if ($_valid && !is_callable('content_50319d581e0f11_52839044')) {function content_50319d581e0f11_52839044($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
    <div style="float: left; margin-left: 20px;">
        <a href="photo.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
">
            <img src="../<?php echo $_smarty_tpl->tpl_vars['photo']->value->image_path();?>
" width="200"  />
        </a>
        <p><?php echo $_smarty_tpl->tpl_vars['photo']->value->caption;?>
</p>
    </div>
<?php } ?>

<div id="pagination" style="clear: both; ">
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->total_pages()>1){?>

        <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_previous_page()){?>
            <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->previous_page();?>
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
                <a href="index.php?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</a>
            <?php }?>
        <?php endfor; endif; ?>

        <?php if ($_smarty_tpl->tpl_vars['pagination']->value->has_next_page()){?>
            <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->next_page();?>
">Next &raquo;</a>
        <?php }?>

    <?php }?>
</div><?php }} ?>