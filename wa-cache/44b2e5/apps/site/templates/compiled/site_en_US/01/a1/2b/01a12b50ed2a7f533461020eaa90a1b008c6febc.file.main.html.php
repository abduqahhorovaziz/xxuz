<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 09:34:37
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/main.html" */ ?>
<?php /*%%SmartyHeaderCode:628378784624680dd3758a7-21293298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a12b50ed2a7f533461020eaa90a1b008c6febc' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/main.html',
      1 => 1639954885,
      2 => 'file',
    ),
    'a6897ae6da5e65f6922f3d65617f66b4dc88129c' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/page.welcome.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628378784624680dd3758a7-21293298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    '_is_main_page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624680dd3b0eb7_17294221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624680dd3b0eb7_17294221')) {function content_624680dd3b0eb7_17294221($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_main_page'] = new Smarty_variable(($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&(empty($_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['page']->value['content']))), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_is_main_page']->value){?><?php /*  Call merged included template "./page.welcome.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./page.welcome.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '628378784624680dd3758a7-21293298');
content_624680dd3945e5_59875851($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./page.welcome.html" */?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 09:34:37
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/page.welcome.html" */ ?>
<?php if ($_valid && !is_callable('content_624680dd3945e5_59875851')) {function content_624680dd3945e5_59875851($_smarty_tpl) {?><div class="welcome"><h1>Welcome to your new site!</h1><p><?php echo sprintf('Open “<a href="%s">Pages</a>” section and add a new page with an empty address. You will see its contents here.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p></div>
<?php }} ?>