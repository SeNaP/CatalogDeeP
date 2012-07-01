<?php /* Smarty version Smarty-3.0.4, created on 2011-01-19 07:06:26
         compiled from "./templates/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9327336234d363912046e77-75023259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4d6eb125bc74eda2c937147d3bd5cd8710da1ce' => 
    array (
      0 => './templates/registration.tpl',
      1 => 1294563454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9327336234d363912046e77-75023259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="title">Регистрация в катлоге</div>

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

<form action="/registration.php" method="POST">
URL сайта:<br/>
<input type="text" name="url" value="http://"><br/>
Название сайта:<br/>
<input type="text" name="name"><br/>
Описание сайта:<br/>
<input type="text" name="about"><br/>
Ваш пароль:<br/>
<input type="text" name="password"><br/>
Ваш E-mail:<br/>
<input type="text" name="email"><br/>
Категория:<br/>
<select name="category">

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>

<option value="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
</option>

<?php }} ?>

</select>
	
<input type="submit" name="send" value="Регистрация"><br/>




<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
