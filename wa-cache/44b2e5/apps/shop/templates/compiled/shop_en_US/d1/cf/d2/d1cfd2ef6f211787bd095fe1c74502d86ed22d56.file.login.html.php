<?php /* Smarty version Smarty-3.1.14, created on 2022-04-05 15:20:03
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/login.html" */ ?>
<?php /*%%SmartyHeaderCode:409172153624c17d3a10786-77482251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1cfd2ef6f211787bd095fe1c74502d86ed22d56' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/login.html',
      1 => 1639954885,
      2 => 'file',
    ),
    'befbf414d558e6d079e5fb9c63c593d35f9b0850' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/login.adapters.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '409172153624c17d3a10786-77482251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624c17d3b44817_87176559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624c17d3b44817_87176559')) {function content_624c17d3b44817_87176559($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isAuthPage",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader","Log in");?>
<div class="s-auth-page"><div class="s-auth-section"><header class="s-auth-header"><?php /*  Call merged included template "./login.adapters.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./login.adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '409172153624c17d3a10786-77482251');
content_624c17d3abb629_29769445($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./login.adapters.html" */?><p class="s-auth-text">Log in with your customer password or via the services listed above</p></header><div class="s-auth-body"><div class="wa-form-wrapper"><?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm($_smarty_tpl->tpl_vars['error']->value);?>
</div></div></div></div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-05 15:20:03
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/login.adapters.html" */ ?>
<?php if ($_valid && !is_callable('content_624c17d3abb629_29769445')) {function content_624c17d3abb629_29769445($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?><?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?><?php $_smarty_tpl->tpl_vars['_supported_icons'] = new Smarty_variable(array("vkontakte","facebook","mailru","twitter","google","yandex","webasystID"), null, 0);?><?php $_smarty_tpl->tpl_vars['oauth_adapter_sizes'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->defaultAuthAdapterWindowSizes(), null, 0);?><section class="s-adapters-section"><?php $_smarty_tpl->tpl_vars['linked_adapters'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['other_adapters'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['wa']->value->user(((string)$_smarty_tpl->tpl_vars['a']->value->getId())."_id")){?><?php $_smarty_tpl->createLocalArrayVariable('linked_adapters', null, 0);
$_smarty_tpl->tpl_vars['linked_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('other_adapters', null, 0);
$_smarty_tpl->tpl_vars['other_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['other_adapters']->value){?><ul class="s-adapters-list"><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getName(), null, 0);?><li><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value->getUrl();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['oauth_adapter_sizes']->value[$_smarty_tpl->tpl_vars['_id']->value]['width'];?>
"data-height="<?php echo $_smarty_tpl->tpl_vars['oauth_adapter_sizes']->value[$_smarty_tpl->tpl_vars['_id']->value]['height'];?>
"><?php if (in_array($_smarty_tpl->tpl_vars['_id']->value,$_smarty_tpl->tpl_vars['_supported_icons']->value)){?><i class="icon32 rounded <?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i><?php }else{ ?><img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['a']->value->getIcon();?>
"/><?php }?></a></li><?php } ?></ul><?php }?></section><?php }?>
<?php }} ?>