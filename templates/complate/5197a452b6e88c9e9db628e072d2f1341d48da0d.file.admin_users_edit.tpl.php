<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 02:45:26
         compiled from "./templates/admin/admin_users_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842727654d32076617ca22-61072973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5197a452b6e88c9e9db628e072d2f1341d48da0d' => 
    array (
      0 => './templates/admin/admin_users_edit.tpl',
      1 => 1294754507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842727654d32076617ca22-61072973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="title"><a href="admin.php">Админ панель</a> | Редактирование пользоателя</div>
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

<form action="/admin.php?act=user_edit&id=<?php echo (isset($_GET['id'])? $_GET['id'] : null);?>
" method="POST">
Пароль:<br/>
<input type="text" name="password" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['password']) ? $_smarty_tpl->tpl_vars['i']->value['password'] : null);?>
"><br/>
Email:<br/>
<input type="text" name="email" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['email']) ? $_smarty_tpl->tpl_vars['i']->value['email'] : null);?>
"><br/>
URL:<br/>
<input type="text" name="url" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['url']) ? $_smarty_tpl->tpl_vars['i']->value['url'] : null);?>
"><br/>
Описание:<br/>
<input type="text" name="about" value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
"><br/>
Категория:<br/>
<select name="category">

<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['set_cat']) ? $_smarty_tpl->tpl_vars['i']->value['set_cat'] : null);?>

	
</select><br/>
Статуc:<br/>
<select name="status">

<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['set_status']) ? $_smarty_tpl->tpl_vars['i']->value['set_status'] : null);?>


</select><br/>
<input type="submit" name="send" value="Изменить"><br/>

<?php }} ?> 

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
