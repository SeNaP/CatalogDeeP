<?php /* Smarty version Smarty-3.0.4, created on 2011-01-19 07:10:01
         compiled from "./templates/admin/admin_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1792563174d3639e91d3564-77889671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8485674ac002d0aaf0f18ad81c1dcfc4b31212' => 
    array (
      0 => './templates/admin/admin_system.tpl',
      1 => 1295399207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1792563174d3639e91d3564-77889671',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="title"><a href="admin.php">Админ панель</a> | Настройка системы</div>
<?php $_tmp1=$_smarty_tpl->getVariable('msg')->value;?><?php if (!empty($_tmp1)){?>
	<div class="rmenu"><p><b>Внимание!</b></p>
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

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
<form action="admin.php?act=system" method="POST">
Модерация: <br/>
<select name="moderacia">
	<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['mod']) ? $_smarty_tpl->tpl_vars['i']->value['mod'] : null);?>

</select><br/>
Регистрация: <br/>
<select name="registration">
	<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['reg']) ? $_smarty_tpl->tpl_vars['i']->value['reg'] : null);?>

</select><br/>
Белый каталог: <br/>
<select name="whitecat">
	<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['wc']) ? $_smarty_tpl->tpl_vars['i']->value['wc'] : null);?>

</select><br/>
<input type="submit" name="send" value="Изменить">
<?php }} ?>

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
