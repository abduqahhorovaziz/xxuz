<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 09:34:37
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/breadcrumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:1762768433624680dd3372a5-43863272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf41e3a387e414bda291d71af89f4e9e883cbc6' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/breadcrumbs.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1762768433624680dd3372a5-43863272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'breadcrumbs' => 0,
    '_breadcrumbs' => 0,
    '_global_breadcrumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624680dd34b044_92721025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624680dd34b044_92721025')) {function content_624680dd34b044_92721025($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount"), null, 0);?><?php $_smarty_tpl->tpl_vars['_global_breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("breadcrumbs"), null, 0);?><?php $_smarty_tpl->tpl_vars['_breadcrumbs'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['breadcrumbs']->value), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_global_breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['_global_breadcrumbs']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['_breadcrumbs']->value, null, 0);?><?php }?><?php smarty_template_function__renderBreadcrumbs($_smarty_tpl,array('breadcrumbs'=>$_smarty_tpl->tpl_vars['breadcrumbs']->value));?>
<?php }} ?>