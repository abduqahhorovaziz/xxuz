<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:49:04
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/breadcrumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:8026769396244b430948cf8-42847714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ca719b9264baa2fd012c84307bf6c9fa72be91' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/breadcrumbs.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8026769396244b430948cf8-42847714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'breadcrumbs' => 0,
    '_breadcrumbs' => 0,
    '_global_breadcrumbs' => 0,
    '_hide_crumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b43095fdd9_50958600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b43095fdd9_50958600')) {function content_6244b43095fdd9_50958600($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_personal_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount"), null, 0);?><?php $_smarty_tpl->tpl_vars['_global_breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("breadcrumbs"), null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_crumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("hideCrumbs"), null, 0);?><?php $_smarty_tpl->tpl_vars['_breadcrumbs'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['breadcrumbs']->value), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_global_breadcrumbs']->value)){?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_breadcrumbs']->value,$_smarty_tpl->tpl_vars['_global_breadcrumbs']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['breadcrumbs'] = new Smarty_variable($_smarty_tpl->tpl_vars['_breadcrumbs']->value, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_hide_crumbs']->value)){?><?php smarty_template_function__renderBreadcrumbs($_smarty_tpl,array('breadcrumbs'=>$_smarty_tpl->tpl_vars['breadcrumbs']->value));?>
<?php }?><?php }} ?>