<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 02:04:58
         compiled from "./templates/admin/admin_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10437731004d31fdea3c1553-04014150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1652a6ea7a25d13eb6f0cdd5af29c01086f51beb' => 
    array (
      0 => './templates/admin/admin_category.tpl',
      1 => 1295121896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10437731004d31fdea3c1553-04014150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="title"><a href="admin.php">Админ панель</a> | Категории</div>
<?php $_tmp1=$_smarty_tpl->getVariable('msg')->value;?><?php if (!empty($_tmp1)){?>
	<div class="rmenu"><p><b>Внимение!</b></p>
	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('msg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
?>
		 <div><?php echo (isset($_smarty_tpl->tpl_vars['message']->value) ? $_smarty_tpl->tpl_vars['message']->value : null);?>
</div>
	<?php }} ?>
	<p></p></div>
<?php }?>
&#187;	<a href="admin.php?act=category_add"><b>Добавить категорию</b></a><br/><br/>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
<div class="blog">
&#187; <b><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
</b><br/>
Описание: <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
<br/>
<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['edit']) ? $_smarty_tpl->tpl_vars['i']->value['edit'] : null);?>
 | <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['del']) ? $_smarty_tpl->tpl_vars['i']->value['del'] : null);?>

</div>
<?php }} ?>
<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
