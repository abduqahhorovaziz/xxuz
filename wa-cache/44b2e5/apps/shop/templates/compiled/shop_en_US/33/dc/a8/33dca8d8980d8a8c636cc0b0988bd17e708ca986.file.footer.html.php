<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:49:04
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:20569872046244b430b28118-54896973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33dca8d8980d8a8c636cc0b0988bd17e708ca986' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/footer.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20569872046244b430b28118-54896973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_footer' => 0,
    '_' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b430b33af5_04264793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b430b33af5_04264793')) {function content_6244b430b33af5_04264793($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><div class="s-footer-bottom"><div class="s-layout"><div class="s-column left middle"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['site_copyright'])){?><span class="s-copyright"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['site_copyright'];?>
</span><?php }?></div><div class="s-column right middle"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['age_limit'])){?><span class="s-age-wrapper"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['age_limit'];?>
</span><?php }?></div></div></div><?php }} ?>