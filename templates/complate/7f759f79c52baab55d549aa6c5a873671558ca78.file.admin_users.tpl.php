<?php /* Smarty version Smarty-3.0.4, created on 2011-01-19 05:27:14
         compiled from "./templates/admin/admin_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11672134754d3621d2612218-11000532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f759f79c52baab55d549aa6c5a873671558ca78' => 
    array (
      0 => './templates/admin/admin_users.tpl',
      1 => 1295393196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11672134754d3621d2612218-11000532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="title"><a href="admin.php">Админ панель</a> | Пользователи <?php echo $_smarty_tpl->getVariable('subtitle')->value;?>
</div>
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

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
	<div class="blog">
	<b>ID:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
<br/>
	<b>URL:</b> <a href="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['url']) ? $_smarty_tpl->tpl_vars['i']->value['url'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['url']) ? $_smarty_tpl->tpl_vars['i']->value['url'] : null);?>
</a> | <b>Название:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
 <br/>
	<b>Описание:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
<br/>
	<b>Сегодня переходов:</b><br/>
	В: <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['in']) ? $_smarty_tpl->tpl_vars['i']->value['in'] : null);?>
 | Из: <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['out']) ? $_smarty_tpl->tpl_vars['i']->value['out'] : null);?>
<br/>
	[<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['edit']) ? $_smarty_tpl->tpl_vars['i']->value['edit'] : null);?>
] | [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['stat']) ? $_smarty_tpl->tpl_vars['i']->value['stat'] : null);?>
]
	</div>
<?php }} ?>

<?php echo $_smarty_tpl->getVariable('navigator')->value;?>


<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
