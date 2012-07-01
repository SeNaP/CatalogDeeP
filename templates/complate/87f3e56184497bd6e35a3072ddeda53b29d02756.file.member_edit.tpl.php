<?php /* Smarty version Smarty-3.0.4, created on 2011-01-26 03:22:29
         compiled from "templates/member_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14863154174d3f3f1549a2e7-66829620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f3e56184497bd6e35a3072ddeda53b29d02756' => 
    array (
      0 => 'templates/member_edit.tpl',
      1 => 1294559602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14863154174d3f3f1549a2e7-66829620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div class="title"><a href="/member.php">Личная панель</a> | редактор данных</div>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('msg')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>

 ! <b><?php echo (isset($_smarty_tpl->getVariable('msg')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? $_smarty_tpl->getVariable('msg')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']] : null);?>
</b><br/>
 
<?php endfor; endif; ?>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>

<form action="/member.php?act=edit" method="POST">
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

	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cat')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
	<?php if ((isset($_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']) ? $_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'] : null)==(isset($_smarty_tpl->tpl_vars['i']->value['category']) ? $_smarty_tpl->tpl_vars['i']->value['category'] : null)){?>
	
	<option value="<?php echo (isset($_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']) ? $_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'] : null);?>
" selected="selected"><?php echo (isset($_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name']) ? $_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'] : null);?>
</option>
	
	<?php }else{ ?>
    	
    	<option value="<?php echo (isset($_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']) ? $_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'] : null);?>
" ><?php echo (isset($_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name']) ? $_smarty_tpl->getVariable('cat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'] : null);?>
</option>
    	
    	<?php }?>
	<?php endfor; endif; ?>
	
</select>

<input type="submit" name="send" value="Изменить"><br/>

<?php }} ?> 

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
