<?php /* Smarty version Smarty-3.0.4, created on 2011-01-19 08:19:22
         compiled from "templates/cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20342817034d364a2a48f897-51740540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ad41c36e1c0da28e1e9977ec9785bab050f00a' => 
    array (
      0 => 'templates/cat.tpl',
      1 => 1295403558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20342817034d364a2a48f897-51740540',
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

<?php $_tmp1=$_smarty_tpl->getVariable('msg')->value;?><?php if (!empty($_tmp1)){?>
	<div class="rmenu"><p><b>Ошибка!</b></p>
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

<div class='title'>Категория | <?php echo $_smarty_tpl->getVariable('category')->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
<div class="menu">
<img src='/templates/images/go.gif' alt='' /><a href="out.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
</a> [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['in']) ? $_smarty_tpl->tpl_vars['i']->value['in'] : null);?>
 /<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['out']) ? $_smarty_tpl->tpl_vars['i']->value['out'] : null);?>
 ] | <a href="stats.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
">инф.</a><br/>
&#187;<span class='menu_s'><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
</span>
</div>
<?php }} else { ?>
<b>Активных сайтов нет.</b>
<?php } ?>
<?php echo $_smarty_tpl->getVariable('navigator')->value;?>

<?php }?>
<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
