<?php /* Smarty version Smarty-3.0.4, created on 2011-01-26 03:22:20
         compiled from "templates/member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13921422204d3f3f0c1cb904-94265029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1ef57928e2136777afba46451cbba00612dbf2' => 
    array (
      0 => 'templates/member.tpl',
      1 => 1295645695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13921422204d3f3f0c1cb904-94265029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="title">Личная панель</div>
&#187; <a href="member.php?act=edit">Редактировать личные данные</a><br/>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>

<b>ID:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
 | <b>URL:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['url']) ? $_smarty_tpl->tpl_vars['i']->value['url'] : null);?>
<br/>
<b>Описание:</b> <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
<br/>
<b>Переходы:</b><br/>
Вчера: В [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['sy_in']) ? $_smarty_tpl->tpl_vars['i']->value['sy_in'] : null);?>
] <b>|</b> Из [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['sy_out']) ? $_smarty_tpl->tpl_vars['i']->value['sy_out'] : null);?>
]<br/>
Сегодня: В [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['this_in']) ? $_smarty_tpl->tpl_vars['i']->value['this_in'] : null);?>
] <b>|</b> Из [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['this_out']) ? $_smarty_tpl->tpl_vars['i']->value['this_out'] : null);?>
]<br/>


<?php }} ?>


<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
