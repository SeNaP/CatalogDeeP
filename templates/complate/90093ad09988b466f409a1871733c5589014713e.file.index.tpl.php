<?php /* Smarty version Smarty-3.0.4, created on 2011-01-16 00:02:12
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284459474d31e124182df3-82645528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1294934319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284459474d31e124182df3-82645528',
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
<div class='title'>Категории</div>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
<div class="menu">
<img src='/templates/images/go.gif' alt='' /><a href="cat.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['id']) ? $_smarty_tpl->tpl_vars['i']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['name']) ? $_smarty_tpl->tpl_vars['i']->value['name'] : null);?>
</a> [<?php echo (isset($_smarty_tpl->tpl_vars['i']->value['user_act']) ? $_smarty_tpl->tpl_vars['i']->value['user_act'] : null);?>
 / <?php echo (isset($_smarty_tpl->tpl_vars['i']->value['user_all']) ? $_smarty_tpl->tpl_vars['i']->value['user_all'] : null);?>
]<br/>
&#187;<span class='menu_s'><?php echo (isset($_smarty_tpl->tpl_vars['i']->value['about']) ? $_smarty_tpl->tpl_vars['i']->value['about'] : null);?>
</span>
</div>
<?php }} ?>

<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
