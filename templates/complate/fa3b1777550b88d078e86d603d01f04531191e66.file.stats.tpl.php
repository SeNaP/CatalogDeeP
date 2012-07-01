<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 03:11:52
         compiled from "templates/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10150716534d320d987c4b10-83951483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3b1777550b88d078e86d603d01f04531191e66' => 
    array (
      0 => 'templates/stats.tpl',
      1 => 1294949788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10150716534d320d987c4b10-83951483',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php if (($_smarty_tpl->getVariable('admin_page')->value !== null)){?>
<div class="niz_a">&#187; <?php echo $_smarty_tpl->getVariable('admin_page')->value;?>
</div>
<?php }?>
<div class='title'>Статистика | <b><?php echo $_smarty_tpl->getVariable('site')->value;?>
</b></div>
<?php $_tmp1=$_smarty_tpl->getVariable('msg')->value;?><?php if (!empty($_tmp1)){?>
	<div class="rmenu"><p><b>ОШИБКА!</b></p>
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

<ui>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

<li><?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null))===null||$tmp==='' ? 0 : $tmp);?>
</li>
 
 
<?php }} ?>
</ui>


<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
