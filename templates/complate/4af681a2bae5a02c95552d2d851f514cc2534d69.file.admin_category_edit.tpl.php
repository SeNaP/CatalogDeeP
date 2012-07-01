<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 00:13:48
         compiled from "./templates/admin/admin_category_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19528341964d31e3dca2fd42-08658138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af681a2bae5a02c95552d2d851f514cc2534d69' => 
    array (
      0 => './templates/admin/admin_category_edit.tpl',
      1 => 1295115226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19528341964d31e3dca2fd42-08658138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="title"><a href="admin.php">Админ панель</a> | Редактировать категорию</div>
<?php $_tmp1=$_smarty_tpl->getVariable('msg')->value;?><?php if (!empty($_tmp1)){?>
	<div class="rmenu"><p><b>Внимение!</b></p>
	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('msg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
?>
		 <div><?php echo (isset($_smarty_tpl->tpl_vars['message']->value) ? $_smarty_tpl->tpl_vars['message']->value : null);?>
</div>
		 <div><a href="admin.php?act=category">К категориям</a></div>
	<?php }} ?>
	<p></p></div>
<?php }else{ ?>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
<form action="admin.php?act=category_edit&id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
" method="POST">
Название:<br/>
<input type="text" name="name" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
"><br/>
Описание:<br/>
<input type="text" name="about" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
"><br/>
Позиция:<br/>
<input type="text" name="position" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['position']) ? $_smarty_tpl->tpl_vars['i']->value['position'] : null);?>
"><br/>
<input type="submit" name="send" value="Изменить">


<?php }} ?>
<?php }?>
<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
