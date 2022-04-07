<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:49:04
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/head.html" */ ?>
<?php /*%%SmartyHeaderCode:15293777976244b4308ff394-78959727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ec8c8140bd9f524b90f91f0f10e8ec00c9821e' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/head.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15293777976244b4308ff394-78959727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'action' => 0,
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_app_static_url' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b430923937_45991709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b430923937_45991709')) {function content_6244b430923937_45991709($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_lang'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['action']->value)&&($_smarty_tpl->tpl_vars['action']->value=="default")){?><meta itemprop="name" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
"><meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('country');?>
"><meta itemprop="telephone" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>
"><meta itemprop="currenciesAccepted" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><?php }?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
css/custom.shop.css?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" /><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
plugins/bxslider/jquery.bxslider.css?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" /><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
plugins/swipebox/css/swipebox.css?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" /><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
plugins/swipebox/js/jquery.swipebox.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/page.product.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/product.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/products.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/custom.shop.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>