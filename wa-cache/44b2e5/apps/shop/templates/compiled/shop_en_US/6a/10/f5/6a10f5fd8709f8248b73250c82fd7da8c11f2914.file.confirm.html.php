<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/confirm.html" */ ?>
<?php /*%%SmartyHeaderCode:15578442062468a47ed6d18-24360916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a10f5fd8709f8248b73250c82fd7da8c11f2914' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/confirm.html',
      1 => 1638272723,
      2 => 'file',
    ),
    'd698b4b8febe7c906dbf6c4f4b6d3d78a4dd21d9' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/terms.html',
      1 => 1576582800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15578442062468a47ed6d18-24360916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    '_confirm_locked' => 0,
    'error_step_id' => 0,
    'errors' => 0,
    '_error' => 0,
    '_cart_is_invalid' => 0,
    '_locked' => 0,
    '_config' => 0,
    'confirm' => 0,
    'wa_url' => 0,
    'wa' => 0,
    '_round_discounts' => 0,
    '_discout_html' => 0,
    '_is_small' => 0,
    '_total_title' => 0,
    '_html' => 0,
    '_create_order' => 0,
    '_button_text' => 0,
    'event_hook' => 0,
    '_' => 0,
    '_errors' => 0,
    '_loading_html' => 0,
    '_terms_dialog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a48051603_72422289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a48051603_72422289')) {function content_62468a48051603_72422289($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value["confirmation"], null, 0);?><?php $_smarty_tpl->tpl_vars['_locked'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_confirm_locked']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_cart_is_invalid'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="confirm"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_error']->value['id'])&&$_smarty_tpl->tpl_vars['_error']->value['id']==="cart_invalid"){?><?php $_smarty_tpl->createLocalArrayVariable('_errors', null, 0);
$_smarty_tpl->tpl_vars['_errors']->value[] = $_smarty_tpl->tpl_vars['_error']->value;?><?php break 1?><?php }?><?php } ?><?php }?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_error']->value['id'])&&$_smarty_tpl->tpl_vars['_error']->value['id']==="cart_invalid"){?><?php $_smarty_tpl->tpl_vars['_cart_is_invalid'] = new Smarty_variable(true, null, 0);?><?php break 1?><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['_button_text'] = new Smarty_variable(_w("Confirm order"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['config']->value["shipping"]["used"])){?><?php if ($_smarty_tpl->tpl_vars['error_step_id']->value==="region"||$_smarty_tpl->tpl_vars['error_step_id']->value==="shipping"){?><?php $_smarty_tpl->tpl_vars['_button_text'] = new Smarty_variable(_w("Select shipping"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)){?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_error']->value['id'])&&$_smarty_tpl->tpl_vars['_error']->value['id']==="empty_region_options"){?><?php $_smarty_tpl->tpl_vars['_locked'] = new Smarty_variable(true, null, 0);?><?php break 1?><?php }?><?php } ?><?php }?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['config']->value["payment"]["used"])){?><?php if ($_smarty_tpl->tpl_vars['error_step_id']->value==="payment"){?><?php $_smarty_tpl->tpl_vars['_button_text'] = new Smarty_variable(_w("Select payment"), null, 0);?><?php }?><?php }?><section class="wa-step-section wa-step-confirm-section" id="wa-step-confirm-section"><div class="wa-section-body"><form style="<?php if (!empty($_smarty_tpl->tpl_vars['_cart_is_invalid']->value)){?>display: none;<?php }?>"><div class="wa-flex-wrapper"><?php if (empty($_smarty_tpl->tpl_vars['_locked']->value)&&!empty($_smarty_tpl->tpl_vars['_config']->value["order_comment"])){?><div class="wa-comment-section <?php if (!empty($_smarty_tpl->tpl_vars['confirm']->value['comment'])){?>is-opened<?php }?>"><div class="wa-visible"><span class="wa-link js-open-section">Comment to the order&nbsp;&nbsp;<i class="wa-icon arrow-bottom size-8"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#arrow-bottom"></use></svg></i></span></div><div class="wa-hidden"><div class="wa-field-wrapper full-line"><textarea class="wa-textarea js-order-comment-field" name="confirm[comment]"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['confirm']->value['comment'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea></div></div></div><?php }?><div class="wa-total-section"><div class="wa-item wa-item-price"><div class="wa-name">Items cost</div><div class="wa-value"><span class="wa-price"><?php echo shop_currency($_smarty_tpl->tpl_vars['confirm']->value['subtotal'],array('in_currency'=>true,'format'=>'h'));?>
</span></div></div><?php if (!empty($_smarty_tpl->tpl_vars['confirm']->value['discount'])){?><div class="wa-item wa-item-discount"><div class="wa-name">Discount</div><div class="wa-value"><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_discout_html", null); ob_start(); ?><span class="wa-price"><?php echo shop_currency($_smarty_tpl->tpl_vars['confirm']->value['discount'],array('in_currency'=>true,'format'=>'h'));?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->tpl_vars['_round_discounts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('round_discounts'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_round_discounts']->value)){?><span class="wa-tooltip is-inline top with-underline" data-title="Rounded discount value"><?php echo $_smarty_tpl->tpl_vars['_discout_html']->value;?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_discout_html']->value;?>
<?php }?></div></div><?php }?><div class="wa-item wa-item-shipping" <?php if (empty($_smarty_tpl->tpl_vars['config']->value["shipping"]["used"])){?>style="display: none;"<?php }?>><div class="wa-name">Shipping cost</div><div class="wa-value"><?php if ($_smarty_tpl->tpl_vars['confirm']->value['shipping']!==null){?><?php if ($_smarty_tpl->tpl_vars['confirm']->value['shipping']>0){?><span class="wa-price"><?php echo shop_currency($_smarty_tpl->tpl_vars['confirm']->value['shipping'],array('in_currency'=>true,'format'=>'h'));?>
</span><?php }else{ ?>free<?php }?><?php }else{ ?>not selected<?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['confirm']->value['tax'])){?><div class="wa-item wa-item-tax"><div class="wa-name">Tax</div><div class="wa-value"><span class="wa-price"><?php echo shop_currency($_smarty_tpl->tpl_vars['confirm']->value['tax'],array('in_currency'=>true,'format'=>'h'));?>
</span></div></div><?php }?><div class="wa-item wa-item-total"><?php $_smarty_tpl->tpl_vars['_total_title'] = new Smarty_variable(_w("Total"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_small'] = new Smarty_variable(true, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['config']->value["shipping"]["used"])){?><?php if ($_smarty_tpl->tpl_vars['confirm']->value['shipping']===null){?><?php $_smarty_tpl->tpl_vars['_is_small'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_total_title'] = new Smarty_variable(_w("Total less shipping cost"), null, 0);?><?php }?><?php }?><div class="wa-name <?php if (!empty($_smarty_tpl->tpl_vars['_is_small']->value)){?>is-small<?php }else{ ?>is-large<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_total_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</div><div class="wa-value"><span class="wa-price"><?php echo shop_currency($_smarty_tpl->tpl_vars['confirm']->value['total'],array('in_currency'=>true,'format'=>'h'));?>
</span></div></div></div><div class="wa-actions-section"><?php $_smarty_tpl->tpl_vars['_terms_dialog'] = new Smarty_variable('', null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_locked']->value)&&!empty($_smarty_tpl->tpl_vars['_config']->value["terms"])){?><div class="wa-terms-section"><div class="wa-field-wrapper is-agreement-field full-line"><label class="wa-checkbox-wrapper"><input class="wa-checkbox" type="checkbox" name="confirm[terms]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['confirm']->value['terms'])){?>checked<?php }?> required><span class="wa-text">accept our <a class="js-show-terms-dialog" href="javascript:void(0);">terms of service</a></span></label></div></div><?php if (!empty($_smarty_tpl->tpl_vars['_config']->value["terms_text"])){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_terms_dialog", null); ob_start(); ?><?php $_smarty_tpl->tpl_vars['_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['_config']->value["terms_text"], null, 0);?><?php /*  Call merged included template "./dialog/terms.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./dialog/terms.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_html'=>$_smarty_tpl->tpl_vars['_html']->value), 0, '15578442062468a47ed6d18-24360916');
content_62468a48017d85_67793423($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./dialog/terms.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_create_order'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['errors']->value), null, 0);?><button class="wa-button wa-submit-button js-submit-order-button" type="button" data-action="<?php if (!empty($_smarty_tpl->tpl_vars['_create_order']->value)){?>create<?php }else{ ?>calculate<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['_locked']->value)){?>disabled<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_button_text']->value, ENT_QUOTES, 'UTF-8', true);?>
</button></div></div><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['confirm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?></form><?php if (!empty($_smarty_tpl->tpl_vars['_cart_is_invalid']->value)){?><?php $_smarty_tpl->_capture_stack[0][] = array('delete_icon', null, null); ob_start(); ?>&nbsp;<span class="gray">(&nbsp;<i class="wa-icon delete size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#trash"></use></svg></i>&nbsp;)</span>&nbsp;<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('minus_icon', null, null); ob_start(); ?>&nbsp;<span class="gray">(&nbsp;<i class="wa-icon minus size-12"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#minus"></use></svg></i>&nbsp;)</span>&nbsp;<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('edit_icon', null, null); ob_start(); ?>&nbsp;<span class="gray">(&nbsp;<i class="wa-icon edit size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#edit"></use></svg></i>&nbsp;)</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="s-message is-cart-invalid"><p>To complete your order, please change the products in your shopping cart which are not available in stock:</p><ul><li><?php echo sprintf(_w("either delete them %s"),Smarty::$_smarty_vars['capture']['delete_icon']);?>
</li><li><?php echo sprintf(_w("or reduce their quantity %s"),Smarty::$_smarty_vars['capture']['minus_icon']);?>
</li><?php if (!empty($_smarty_tpl->tpl_vars['config']->value['cart']['change_sku'])){?><li><?php echo sprintf(_w("or select other SKUs %s"),Smarty::$_smarty_vars['capture']['edit_icon']);?>
</li><?php }?></ul></div><?php }?></div><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading_html", null); ob_start(); ?><span class="s-points-wrapper"><span class="s-point"></span><span class="s-point"></span><span class="s-point"></span></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><script>( function($) {var $step = $("#wa-step-confirm-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initConfirm({$wrapper: $step,errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
,templates: {loading_html: <?php echo waUtils::jsonEncode(trim(ifset($_smarty_tpl->tpl_vars['_loading_html']->value,'')));?>
,terms_dialog: <?php echo waUtils::jsonEncode(trim(ifset($_smarty_tpl->tpl_vars['_terms_dialog']->value,'')));?>
},urls: {"channel_dialog": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrderConfirmation/defaultDialog/'));?>
}});});})(jQuery);</script></section>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:48
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/terms.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a48017d85_67793423')) {function content_62468a48017d85_67793423($_smarty_tpl) {?><div class="wa-order-dialog"><div class="wa-dialog-background"></div><div class="wa-dialog-body"><header class="wa-dialog-header"><div class="wa-header">Terms of service</div><span class="wa-close-wrapper js-close-dialog"><i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i></span></header><div class="wa-dialog-content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_html']->value)===null||$tmp==='' ? '' : $tmp);?>
</div><footer class="wa-dialog-footer with-delimiter"><button class="wa-button gray js-close-dialog" type="button">Close</button></footer></div></div><?php }} ?>