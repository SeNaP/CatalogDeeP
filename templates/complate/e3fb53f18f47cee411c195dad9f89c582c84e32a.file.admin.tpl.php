<?php /* Smarty version Smarty-3.0.4, created on 2011-01-15 23:42:52
         compiled from "./templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6848593414d31dc9ca56b17-25655984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3fb53f18f47cee411c195dad9f89c582c84e32a' => 
    array (
      0 => './templates/admin/admin.tpl',
      1 => 1294950469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6848593414d31dc9ca56b17-25655984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="title">Админ панель</div>
<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
?>
	&#187; <?php echo (isset($_smarty_tpl->tpl_vars['res']->value) ? $_smarty_tpl->tpl_vars['res']->value : null);?>
<br/>
<?php }} ?>
<div class="blog">
<b>!</b> Версия каталога: <?php echo @CAT_VERSION;?>
<br/>
<b>!</b> Версия Smarty: <?php echo 'Smarty-3.0.4';?>
<br/>
</div>

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
