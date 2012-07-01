<?php /* Smarty version Smarty-3.0.4, created on 2011-01-19 08:19:25
         compiled from "templates/stats_sites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284582094d364a2da09610-88578580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '287d6db0c4c265db7959346712e30bf0f2a9fc8f' => 
    array (
      0 => 'templates/stats_sites.tpl',
      1 => 1294947493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284582094d364a2da09610-88578580',
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
<?php }else{ ?>
<table border="0"><tr bgcolor="" bordercolor=""><td><b>Страна</b></td><td><b>Оператор</b></td><td><b>Пришло</b></td><td><b>Ушло</b></td></tr>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>


 <tr class="td1"><td bgcolor=""><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['country']) ? $_smarty_tpl->tpl_vars['i']->value['country'] : null);?>
</td><td bgcolor=""><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['operator']) ? $_smarty_tpl->tpl_vars['i']->value['operator'] : null);?>
</td><td> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['in']) ? $_smarty_tpl->tpl_vars['i']->value['in'] : null);?>
</td><td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['out']) ? $_smarty_tpl->tpl_vars['i']->value['out'] : null);?>
</td></tr></td></tr>
 
<?php }} ?>






</table>




<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
