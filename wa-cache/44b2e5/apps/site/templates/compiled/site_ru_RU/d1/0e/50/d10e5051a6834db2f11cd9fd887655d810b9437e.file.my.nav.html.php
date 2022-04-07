<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:43:49
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:6037240276244b2f58f5cd4-13690528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10e5051a6834db2f11cd9fd887655d810b9437e' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/default/my.nav.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6037240276244b2f58f5cd4-13690528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b2f59231e4_15041023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b2f59231e4_15041023')) {function content_6244b2f59231e4_15041023($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>