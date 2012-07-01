<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 02:20:40
         compiled from "./templates/admin/admin_category_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11536817084d3201983c4761-29828559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ee6817fc91cd3361f25a66df811e9609116c64' => 
    array (
      0 => './templates/admin/admin_category_add.tpl',
      1 => 1295122833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11536817084d3201983c4761-29828559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="title"><a href="admin.php">Админ панель</a> | Добавить категорию</div>
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

<form action="admin.php?act=category_add" method="POST">
Название:<br/>
<input type="text" name="name"><br/>
Описание:<br/>
<input type="text" name="about"><br/>
Позиция:<br/>
<input type="text" name="position"><br/>
<input type="submit" name="send" value="Добавить">

<?php }?>
<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
