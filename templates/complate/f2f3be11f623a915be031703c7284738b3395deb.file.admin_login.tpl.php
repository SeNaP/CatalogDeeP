<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 01:53:00
         compiled from "./templates/admin/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3092098244d31fb1c8317b7-16890706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f3be11f623a915be031703c7284738b3395deb' => 
    array (
      0 => './templates/admin/admin_login.tpl',
      1 => 1294660659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3092098244d31fb1c8317b7-16890706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="title">Авторизация</div>
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

<form action="/input.php?act=aenter" method="POST">
Логин:<br/>
<input type="text" name="a_login"><br/>
Пароль:<br/>
<input type="text" name="a_password"><br/>
<input type="submit" name="send" value="Войти"><br/>

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
