<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/payment.html" */ ?>
<?php /*%%SmartyHeaderCode:30428679662468a47df5cf7-87835534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4934c22dad7645c42222c9c1aab27698f3f60661' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/payment.html',
      1 => 1621849848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30428679662468a47df5cf7-87835534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'error_step_id' => 0,
    'errors' => 0,
    'payment' => 0,
    '_hide_payment' => 0,
    '_config' => 0,
    '_method' => 0,
    '_payments_count' => 0,
    '_is_active' => 0,
    '_active_method' => 0,
    '_field_id' => 0,
    '_field' => 0,
    '_inline_fields' => 0,
    '_custom_fields' => 0,
    'event_hook' => 0,
    '_' => 0,
    '_errors' => 0,
    '_payment_first' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a47ecbc03_02898624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a47ecbc03_02898624')) {function content_62468a47ecbc03_02898624($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['payment'], null, 0);?><?php $_smarty_tpl->tpl_vars['_payments_count'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['_payment_first'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="payment"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_hide_payment'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['payment']->value['disabled'])||empty($_smarty_tpl->tpl_vars['payment']->value['methods']), null, 0);?><section class="wa-step-section wa-step-payment-section" id="wa-step-payment-section" style="<?php if (!empty($_smarty_tpl->tpl_vars['_hide_payment']->value)){?>display: none;<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['methods'])){?><?php $_smarty_tpl->tpl_vars['_active_method'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['selected_method_id'])&&!empty($_smarty_tpl->tpl_vars['payment']->value['methods'][$_smarty_tpl->tpl_vars['payment']->value['selected_method_id']])){?><?php $_smarty_tpl->tpl_vars['_active_method'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment']->value['methods'][$_smarty_tpl->tpl_vars['payment']->value['selected_method_id']], null, 0);?><?php }?><header class="wa-section-header"><h3 class="wa-header"><?php echo $_smarty_tpl->tpl_vars['_config']->value['block_name'];?>
</h3></header><div class="wa-section-body"><form><?php if (empty($_smarty_tpl->tpl_vars['payment']->value['disabled'])){?><div class="wa-methods-list wide js-methods-list"><?php  $_smarty_tpl->tpl_vars['_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment']->value['methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_method']->key => $_smarty_tpl->tpl_vars['_method']->value){
$_smarty_tpl->tpl_vars['_method']->_loop = true;
 $_smarty_tpl->tpl_vars['_method']->index++;
 $_smarty_tpl->tpl_vars['_method']->first = $_smarty_tpl->tpl_vars['_method']->index === 0;
?><?php if ($_smarty_tpl->tpl_vars['_method']->first){?><?php $_smarty_tpl->tpl_vars['_payment_first'] = new Smarty_variable(array("id"=>$_smarty_tpl->tpl_vars['_method']->value['id'],"name"=>(($tmp = @$_smarty_tpl->tpl_vars['_method']->value['name'])===null||$tmp==='' ? "Unknown" : $tmp)), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_payments_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_payments_count']->value+1, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_method']->value['id']==$_smarty_tpl->tpl_vars['payment']->value['selected_method_id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?><div class="wa-method-wrapper <?php if ($_smarty_tpl->tpl_vars['_is_active']->value){?>is-active<?php }?>" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_method']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-method"><div class="wa-checkbox-wrapper"><input type="radio" class="wa-radio js-method-field" name="payment[id]" data-reload="true" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_method']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['_is_active']->value){?>checked<?php }?>></div><?php if (!empty($_smarty_tpl->tpl_vars['_method']->value['logo'])){?><div class="wa-image-wrapper"><img src="<?php echo $_smarty_tpl->tpl_vars['_method']->value['logo'];?>
" alt=""></div><?php }?><div class="wa-method-body"><div class="wa-payment-name"><a href="javascript:void(0);"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_method']->value['name'])===null||$tmp==='' ? "Unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</a></div><?php if (!empty($_smarty_tpl->tpl_vars['_method']->value['description'])){?><div class="wa-description"><?php echo $_smarty_tpl->tpl_vars['_method']->value['description'];?>
</div><?php }?></div></div></div><?php } ?></div><?php if (!empty($_smarty_tpl->tpl_vars['_active_method']->value)){?><div class="wa-payment-fields-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['_active_method']->value['custom_fields_order'])){?><?php $_smarty_tpl->tpl_vars['_inline_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_custom_fields'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_method']->value['custom_fields_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field_id']->key => $_smarty_tpl->tpl_vars['_field_id']->value){
$_smarty_tpl->tpl_vars['_field_id']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_active_method']->value['custom_fields'][$_smarty_tpl->tpl_vars['_field_id']->value])){?><?php $_smarty_tpl->tpl_vars['_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_method']->value['custom_fields'][$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?><?php }else{ ?><?php continue 1?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['html'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['wa_css_class_added'])){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_inline_fields"); ob_start(); ?><div class="wa-field-wrapper size-small"><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['label'])){?><div class="wa-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?><?php echo $_smarty_tpl->tpl_vars['_field']->value['html'];?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }else{ ?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_custom_fields"); ob_start(); ?><div class="wa-line wa-plugin-field-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['label'])){?><div class="wa-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['affects_rate'])){?><span class="wa-required"></span><?php }?></div><?php }?><?php echo $_smarty_tpl->tpl_vars['_field']->value['html'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['description'])){?><div class="wa-description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }?><?php } ?><div class="wa-line wa-payment-plugins-section"><?php if (!empty($_smarty_tpl->tpl_vars['_inline_fields']->value)){?><div class="wa-line wa-fields-group line"><?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_inline_fields']->value,'');?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_fields']->value)){?><?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_custom_fields']->value,'');?>
<?php }?></div><?php }?></div><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?></form></div><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?><script>( function($) {var $step = $("#wa-step-payment-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initPayment({$wrapper: $step,disabled: <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['disabled'])){?>true<?php }else{ ?>false<?php }?>,errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
,locales: {"method_required": <?php echo json_encode(_w("Please select a payment method"));?>
},payment_first: <?php echo json_encode($_smarty_tpl->tpl_vars['_payment_first']->value);?>
,payments_count: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_payments_count']->value, ENT_QUOTES, 'UTF-8', true);?>
});});})(jQuery);</script></section><?php }} ?>