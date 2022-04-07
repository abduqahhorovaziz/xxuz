<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 01:06:32
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:1233297585624609c80a07e8-86591367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac4e40b857cc40cbf9d7652230d99dc9e00b4b8' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/signup.html',
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
  'nocache_hash' => '1233297585624609c80a07e8-86591367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'confirmed_email' => 0,
    'contact' => 0,
    'email_confirmation_hash' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624609c81bf7b7_30062102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624609c81bf7b7_30062102')) {function content_624609c81bf7b7_30062102($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isAuthPage",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader","Sign up");?>
<div class="s-auth-page"><div class="s-auth-section"><header class="s-auth-header"><?php /*  Call merged included template "./login.adapters.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./login.adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1233297585624609c80a07e8-86591367');
content_624609c813ac20_84285628($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./login.adapters.html" */?><p class="s-auth-text">Log in with your customer password or via the services listed above</p></header><div class="s-auth-body"><?php if (!empty($_smarty_tpl->tpl_vars['confirmed_email']->value)){?><h2 class="page-header">Thank you!</h2><p>You have successfully confirmed your email.</p><?php }elseif(!empty($_smarty_tpl->tpl_vars['contact']->value)){?><h2 class="page-header">Thank you!</h2><p>You have successfully signed up.</p><?php if (!empty($_smarty_tpl->tpl_vars['email_confirmation_hash']->value)){?><p><em>A confirmation link has been sent to you by email. Please click this link to confirm your signup and to sign in.</em></p><?php }?><?php }else{ ?><div class="wa-form-wrapper"><?php echo $_smarty_tpl->tpl_vars['wa']->value->signupForm($_smarty_tpl->tpl_vars['errors']->value);?>
</div><?php }?></div></div></div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 01:06:32
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/login.adapters.html" */ ?>
<?php if ($_valid && !is_callable('content_624609c813ac20_84285628')) {function content_624609c813ac20_84285628($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?><?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?><?php $_smarty_tpl->tpl_vars['_supported_icons'] = new Smarty_variable(array("vkontakte","facebook","mailru","twitter","google","yandex","webasystID"), null, 0);?><?php $_smarty_tpl->tpl_vars['oauth_adapter_sizes'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->defaultAuthAdapterWindowSizes(), null, 0);?><section class="s-adapters-section"><?php $_smarty_tpl->tpl_vars['linked_adapters'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['other_adapters'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
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