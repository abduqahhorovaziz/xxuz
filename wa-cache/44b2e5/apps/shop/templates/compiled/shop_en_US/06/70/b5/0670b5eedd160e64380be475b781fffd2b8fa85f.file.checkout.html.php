<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 11:20:38
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:1739324399624699b6ec5732-39446997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0670b5eedd160e64380be475b781fffd2b8fa85f' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.html',
      1 => 1639954883,
      2 => 'file',
    ),
    'ee0d5ff9deb13beb91d3bfac1071a93bd2d5eb73' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.auth.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739324399624699b6ec5732-39446997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_current_step' => 0,
    'wa' => 0,
    '_is_success' => 0,
    'checkout_steps' => 0,
    '_steps_keys' => 0,
    'step_id' => 0,
    '_step' => 0,
    'steps' => 0,
    'cart_total' => 0,
    '_is_current' => 0,
    '_after_current' => 0,
    'step' => 0,
    '_item_class' => 0,
    '_storage' => 0,
    '_text' => 0,
    'payment_success' => 0,
    'theme_settings' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624699b7072c75_43441311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624699b7072c75_43441311')) {function content_624699b7072c75_43441311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_is_success'] = new Smarty_variable(($_smarty_tpl->tpl_vars['checkout_current_step']->value=="success"), null, 0);?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("simplified",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("hideCrumbs",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("htmlClass","is-checkout-page");?>
<?php if (empty($_smarty_tpl->tpl_vars['_is_success']->value)){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader","Checkout");?>
<?php }?><?php $_smarty_tpl->tpl_vars['_storage'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->storage('shop/checkout'), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['checkout_steps']->value)){?><?php $_smarty_tpl->tpl_vars['steps'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['step'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['_steps_keys'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['checkout_steps']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars['step_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_steps_keys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['step_id']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['step_id']->key => $_smarty_tpl->tpl_vars['step_id']->value){
$_smarty_tpl->tpl_vars['step_id']->_loop = true;
 $_smarty_tpl->tpl_vars['step_id']->index++;
?><?php $_smarty_tpl->tpl_vars['_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['checkout_steps']->value[$_smarty_tpl->tpl_vars['step_id']->value], null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_step', null, 0);
$_smarty_tpl->tpl_vars['_step']->value['id'] = $_smarty_tpl->tpl_vars['step_id']->value;?><?php $_smarty_tpl->createLocalArrayVariable('_step', null, 0);
$_smarty_tpl->tpl_vars['_step']->value['index'] = $_smarty_tpl->tpl_vars['step_id']->index;?><?php $_smarty_tpl->createLocalArrayVariable('_step', null, 0);
$_smarty_tpl->tpl_vars['_step']->value['frontend_uri'] = ((string)$_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout')).((string)$_smarty_tpl->tpl_vars['step_id']->value);?><?php if ($_smarty_tpl->tpl_vars['step_id']->value==$_smarty_tpl->tpl_vars['checkout_current_step']->value){?><?php $_smarty_tpl->tpl_vars['step'] = new Smarty_variable($_smarty_tpl->tpl_vars['_step']->value, null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('steps', null, 0);
$_smarty_tpl->tpl_vars['steps']->value[] = $_smarty_tpl->tpl_vars['_step']->value;?><?php } ?><?php }?><div class="s-checkout-page"><div class="s-steps-wrapper"><?php if (isset($_smarty_tpl->tpl_vars['checkout_steps']->value)){?><form method="post" action=""><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['steps']->value)){?><?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['cart_total']->value>0){?><div class="s-step-wrapper is-done"><header class="s-step-header"><div class="s-layout"><div class="s-column"><h5 class="s-name">1. <a class="s-price" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
">Cart: <span class="s-value"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,true);?>
</span></a></h5></div><div class="s-column right middle"><div style="line-height: 1em;"><i class="icon yes"></i></div></div></div></header></div><?php }?><?php $_smarty_tpl->tpl_vars['_after_current'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_step']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_step']->key => $_smarty_tpl->tpl_vars['_step']->value){
$_smarty_tpl->tpl_vars['_step']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-done", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_current']->value)){?><?php $_smarty_tpl->tpl_vars['_after_current'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_after_current']->value)){?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-next", null, 0);?><?php $_smarty_tpl->tpl_vars['_link_href'] = new Smarty_variable("javascript:void(0);", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_step']->value['id']==$_smarty_tpl->tpl_vars['step']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-current", null, 0);?><?php $_smarty_tpl->tpl_vars['_link_href'] = new Smarty_variable("javascript:void(0);", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_step']->value['index']<$_smarty_tpl->tpl_vars['step']->value['index']){?><div class="s-step-wrapper <?php echo $_smarty_tpl->tpl_vars['_item_class']->value;?>
"><header class="s-step-header"><div class="s-layout"><?php if (!empty($_smarty_tpl->tpl_vars['_step']->value)){?><div class="s-column"><h5><?php echo $_smarty_tpl->tpl_vars['_step']->value['index']+2;?>
. <a href="<?php echo $_smarty_tpl->tpl_vars['_step']->value['frontend_uri'];?>
"><?php echo $_smarty_tpl->tpl_vars['_step']->value['name'];?>
</a><?php if (empty($_smarty_tpl->tpl_vars['_after_current']->value)&&empty($_smarty_tpl->tpl_vars['_is_current']->value)){?><?php $_smarty_tpl->tpl_vars['_text'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_step']->value['id']==="shipping"){?><?php if (!empty($_smarty_tpl->tpl_vars['_storage']->value[$_smarty_tpl->tpl_vars['_step']->value['id']]['name'])){?><?php $_smarty_tpl->createLocalArrayVariable('_text', null, 0);
$_smarty_tpl->tpl_vars['_text']->value[] = $_smarty_tpl->tpl_vars['_storage']->value[$_smarty_tpl->tpl_vars['_step']->value['id']]['name'];?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_text']->value)){?><span class="s-value">: <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_text']->value," ");?>
</span><?php }?><?php }?></h5></div><div class="s-column right middle"><div style="line-height: 1em;"><i class="icon yes"></i></div></div><?php }?></div></header></div><?php }?><?php } ?><?php }?><div class="s-step-wrapper" id="step-<?php echo $_smarty_tpl->tpl_vars['checkout_current_step']->value;?>
" data-step-id="<?php echo $_smarty_tpl->tpl_vars['checkout_current_step']->value;?>
"><header class="s-step-header"><div class="s-layout"><?php if (!empty($_smarty_tpl->tpl_vars['step']->value)){?><div class="s-column"><h5 class="s-name"><?php echo $_smarty_tpl->tpl_vars['step']->value['index']+2;?>
. <?php echo $_smarty_tpl->tpl_vars['step']->value['name'];?>
</h5></div><?php }else{ ?><div class="s-column"><h2 class="s-name"><?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value["checkout_payment_success_title"])){?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value["checkout_payment_success_title"];?>
<?php }else{ ?>Thank you!<?php }?></h2></div><?php }?></div></header><div class="s-step-content-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['step']->value)&&!($_smarty_tpl->tpl_vars['step']->value['index']>0)&&$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?><?php /*  Call merged included template "checkout.auth.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("checkout.auth.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1739324399624699b6ec5732-39446997');
content_624699b7024d84_61890799($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "checkout.auth.html" */?><?php }?><div class="s-step-content <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>is-hidden<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("checkout.".((string)$_smarty_tpl->tpl_vars['checkout_current_step']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php if (!$_smarty_tpl->tpl_vars['_is_success']->value){?><footer class="s-step-footer"><?php if (!empty($_smarty_tpl->tpl_vars['step']->value['id'])&&$_smarty_tpl->tpl_vars['step']->value['id']==="confirmation"){?><div class="s-confirm-button-wrapper"><input class="s-step-submit" type="submit" value="Send order"></div><?php }else{ ?><input class="s-step-submit" type="submit" value="Next"><?php }?><input type="hidden" name="step" value="<?php echo $_smarty_tpl->tpl_vars['checkout_current_step']->value;?>
"></footer><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['steps']->value)){?><?php $_smarty_tpl->tpl_vars['_after_current'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_step']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_step']->key => $_smarty_tpl->tpl_vars['_step']->value){
$_smarty_tpl->tpl_vars['_step']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-done", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_current']->value)){?><?php $_smarty_tpl->tpl_vars['_after_current'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_after_current']->value)){?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-next", null, 0);?><?php $_smarty_tpl->tpl_vars['_link_href'] = new Smarty_variable("javascript:void(0);", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_step']->value['id']==$_smarty_tpl->tpl_vars['step']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_current'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_item_class'] = new Smarty_variable("is-current", null, 0);?><?php $_smarty_tpl->tpl_vars['_link_href'] = new Smarty_variable("javascript:void(0);", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_step']->value['index']>$_smarty_tpl->tpl_vars['step']->value['index']){?><?php if (!empty($_smarty_tpl->tpl_vars['_step']->value)){?><div class="s-step-wrapper <?php echo $_smarty_tpl->tpl_vars['_item_class']->value;?>
"><header class="s-step-header"><h5 class="s-name"><?php echo $_smarty_tpl->tpl_vars['_step']->value['index']+2;?>
. <?php echo $_smarty_tpl->tpl_vars['_step']->value['name'];?>
</h5></header></div><?php }?><?php }?><?php } ?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['checkout_steps']->value)){?></form><?php }?></div></div><script>( function($) {$.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/checkout.js", function() {new window.waTheme.init.shop.Checkout({$wrapper: $(".s-checkout-page")})});})(jQuery);</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 11:20:39
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.auth.html" */ ?>
<?php if ($_valid && !is_callable('content_624699b7024d84_61890799')) {function content_624699b7024d84_61890799($_smarty_tpl) {?><div class="s-login-toggle-wrapper"><?php if (!$_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?><ul class="s-login-toggle"><li><label><input name="user_type" type="radio" <?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="0"> I’m a new customer</label></li><li><label><input name="user_type" type="radio" <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="1"> I already have an account</label></li></ul><div class="s-login-form" id="login-form" style="<?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>display:none;<?php }?>"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/login.adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['_auth_text'] = new Smarty_variable("Log in with your customer password", null, 0);?><?php $_smarty_tpl->tpl_vars['_auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_auth_adapters']->value)){?><?php $_smarty_tpl->tpl_vars['_auth_text'] = new Smarty_variable("Log in with your customer password or via the services listed above", null, 0);?><?php }?><p class="s-auth-text"><?php echo $_smarty_tpl->tpl_vars['_auth_text']->value;?>
</p><?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm($_smarty_tpl->tpl_vars['error']->value);?>
</div><script>( function($) {var $login = $("#login-form");if (!$login.length) {return false}var $inputs = $login.find("input"),$userType = $("input[name='user_type']");$userType.on("change", function() {onChangeUserType( $(this) );});$inputs.attr("disabled", "disabled");$userType.change();function onChangeUserType( $input ) {var $step = $input.closest(".s-step-wrapper"),$stepContent = $step.find(".s-step-content"),is_account_exist = ( $step.find("input[name='user_type']:checked").val() == "1" );if (is_account_exist) {$stepContent.hide();$inputs.removeAttr("disabled");$login.show();} else {$stepContent.show();$inputs.attr("disabled", "disabled");$login.hide();}}})(jQuery);</script><?php }else{ ?><div class="s-authorized-wrapper"><div class="s-authorized-user"><div class="left-column image"><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(50);?>
"></div><div class="righs-column"><p><?php echo sprintf("You are currently authorized as <strong>%s</strong>. Please verify or update your contact information using the form below. Your existing contact info will be automatically updated.",$_smarty_tpl->tpl_vars['wa']->value->user('name'));?>
</p></div></div><p class="s-hint">If you want to place an order on behalf of another customer, <a href="?logout">log out</a> from your current profile and proceed to checkout again.</p></div><?php }?></div><?php }} ?>