<?php /* Smarty version Smarty-3.0.4, created on 2011-01-22 03:11:06
         compiled from "./templates/admin/admin_update_ip_base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14677887184d39f66ad5eee2-34881987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19b5c4079df7fabee42d6e86ed99e06b2febc532' => 
    array (
      0 => './templates/admin/admin_update_ip_base.tpl',
      1 => 1295644253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14677887184d39f66ad5eee2-34881987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="title"><a href="admin.php">Админ панель</a> | Обновление IP базы</div>
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

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
