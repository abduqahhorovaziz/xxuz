<?php /* Smarty version Smarty-3.1.14, created on 2022-04-05 15:20:10
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1586975800624c17dadbcd90-64567345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e35265ebac82ed103dca2d7d08cc39c0e00f0d76' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/my.nav.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1586975800624c17dadbcd90-64567345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_nav_selected' => 0,
    '_is_profile' => 0,
    'wa' => 0,
    '_is_orders_page' => 0,
    '_is_affiliate_page' => 0,
    'frontend_my_nav' => 0,
    '_plugin' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624c17dadec222_60989014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624c17dadec222_60989014')) {function content_624c17dadec222_60989014($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['my_nav_selected']->value)){?><?php $_smarty_tpl->tpl_vars['my_nav_selected'] = new Smarty_variable('', null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_is_profile'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=="profile"){?><?php $_smarty_tpl->tpl_vars['_is_profile'] = new Smarty_variable(true, null, 0);?><?php }?><li class="<?php if (!empty($_smarty_tpl->tpl_vars['_is_profile']->value)){?>is-selected<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['_is_profile']->value)){?><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">My profile</a><?php }else{ ?><span class="s-link">My profile</span><?php }?></li><?php $_smarty_tpl->tpl_vars['_is_orders_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isOrdersPage"), null, 0);?><li class="<?php if (!empty($_smarty_tpl->tpl_vars['_is_orders_page']->value)){?>is-selected<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['_is_orders_page']->value)){?><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myOrders');?>
">My orders</a><?php }else{ ?><span class="s-link">My orders</span><?php }?></li><?php if (shopAffiliate::isEnabled()){?><?php $_smarty_tpl->tpl_vars['_is_affiliate_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("isAffiliatePage"), null, 0);?><li class="<?php if (!empty($_smarty_tpl->tpl_vars['_is_affiliate_page']->value)){?>is-selected<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['_is_affiliate_page']->value)){?><a class="s-link" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myAffiliate');?>
">Affiliate program</a><?php }else{ ?><span class="s-link">Affiliate program</span><?php }?></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['frontend_my_nav']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_plugin']->value = $_smarty_tpl->tpl_vars['_']->key;
?><li class="<?php if (waRequest::param('plugin')==str_replace('-plugin','',$_smarty_tpl->tpl_vars['_plugin']->value)){?>is-selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</li><?php } ?><?php }?><?php }} ?>