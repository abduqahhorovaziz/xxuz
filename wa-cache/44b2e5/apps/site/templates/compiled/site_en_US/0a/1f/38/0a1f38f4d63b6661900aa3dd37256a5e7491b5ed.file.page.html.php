<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 09:34:36
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/page.html" */ ?>
<?php /*%%SmartyHeaderCode:879551509624680dccf4419-43145699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1f38f4d63b6661900aa3dd37256a5e7491b5ed' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/page.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879551509624680dccf4419-43145699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624680dcd1f7a5_98653647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624680dcd1f7a5_98653647')) {function content_624680dcd1f7a5_98653647($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isPage",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader",$_smarty_tpl->tpl_vars['page']->value['title']);?>
<article class="s-post-page"><div class="s-text-wrapper s-user-content"><?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>
</div></article><?php }} ?>