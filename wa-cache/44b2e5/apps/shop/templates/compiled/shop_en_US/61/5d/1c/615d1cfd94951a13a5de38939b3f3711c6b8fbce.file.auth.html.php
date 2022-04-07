<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/auth.html" */ ?>
<?php /*%%SmartyHeaderCode:170197745962468a47694404-46054209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615d1cfd94951a13a5de38939b3f3711c6b8fbce' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/auth.html',
      1 => 1561471260,
      2 => 'file',
    ),
    'd36a39715d4fe48e5f8ef1ff2fd6ce3d3990cdf4' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html',
      1 => 1588062360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170197745962468a47694404-46054209',
  'function' => 
  array (
    'shop_order_render_field' => 
    array (
      'parameter' => 
      array (
        '_field' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'config' => 0,
    'error_step_id' => 0,
    'errors' => 0,
    '_config' => 0,
    'auth' => 0,
    'contact' => 0,
    '_me_is_company' => 0,
    '_me_is_person' => 0,
    '_person' => 0,
    '_company' => 0,
    '_types' => 0,
    '_active_type' => 0,
    '_is_company' => 0,
    '_hint' => 0,
    '_error_text' => 0,
    '_show_types_toggle' => 0,
    '_type' => 0,
    '_is_active' => 0,
    '_field_id' => 0,
    '_field' => 0,
    'event_hook' => 0,
    '_' => 0,
    '_errors' => 0,
    '_form_globals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a4781a053_85974314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a4781a053_85974314')) {function content_62468a4781a053_85974314($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_form_globals'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form"), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_form_globals', null, 0);
$_smarty_tpl->tpl_vars['_form_globals']->value["auth"] = array("locked"=>false);?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['customer'], null, 0);?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="auth"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_person'] = new Smarty_variable(shopCheckoutConfig::CUSTOMER_TYPE_PERSON, null, 0);?><?php $_smarty_tpl->tpl_vars['_company'] = new Smarty_variable(shopCheckoutConfig::CUSTOMER_TYPE_COMPANY, null, 0);?><?php $_smarty_tpl->tpl_vars['_show_types_toggle'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_config']->value['type']==shopCheckoutConfig::CUSTOMER_TYPE_PERSON_AND_COMPANY), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['contact_id'])){?><?php $_smarty_tpl->tpl_vars['_show_types_toggle'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_me_is_person'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_me_is_company'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['contact_id'])){?><?php $_smarty_tpl->tpl_vars['_me_is_person'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['contact']->value["is_company"]), null, 0);?><?php $_smarty_tpl->tpl_vars['_me_is_company'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['contact']->value["is_company"]), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_config']->value['type']==shopCheckoutConfig::CUSTOMER_TYPE_PERSON){?><?php if (!empty($_smarty_tpl->tpl_vars['_me_is_company']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_form_globals', null, 0);
$_smarty_tpl->tpl_vars['_form_globals']->value["auth"]["locked"] = true;?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable(sprintf('You are authorized as a company, and orders can be placed only by persons. Please %slog out%s of your account to check out as a person.',"<a class=\"js-logout-button\" href=\"?logout\">","</a>"), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['_config']->value['type']==shopCheckoutConfig::CUSTOMER_TYPE_COMPANY){?><?php if (!empty($_smarty_tpl->tpl_vars['_me_is_person']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_form_globals', null, 0);
$_smarty_tpl->tpl_vars['_form_globals']->value["auth"]["locked"] = true;?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable(sprintf('You are authorized as a person, and orders can be placed only by companies. Please %slog out%s of your account to check out as a company.',"<a class=\"js-logout-button\" href=\"?logout\">","</a>"), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['_config']->value['type']==shopCheckoutConfig::CUSTOMER_TYPE_PERSON_AND_COMPANY){?><?php if (!empty($_smarty_tpl->tpl_vars['_me_is_person']->value)||!empty($_smarty_tpl->tpl_vars['_me_is_company']->value)){?><?php $_smarty_tpl->tpl_vars['_show_types_toggle'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_types'] = new Smarty_variable(array(((string)$_smarty_tpl->tpl_vars['_person']->value)=>array('id'=>$_smarty_tpl->tpl_vars['_person']->value,'name'=>$_smarty_tpl->tpl_vars['_config']->value['person_mode_name']),((string)$_smarty_tpl->tpl_vars['_company']->value)=>array('id'=>$_smarty_tpl->tpl_vars['_company']->value,'name'=>$_smarty_tpl->tpl_vars['_config']->value['company_mode_name'])), null, 0);?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_types']->value["person"], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['selected_mode'])&&!empty($_smarty_tpl->tpl_vars['_types']->value[$_smarty_tpl->tpl_vars['auth']->value['selected_mode']])){?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_types']->value[$_smarty_tpl->tpl_vars['auth']->value['selected_mode']], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_is_company'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_active_type']->value['id']=="company"), null, 0);?><section class="wa-step-section wa-step-auth-section" id="wa-step-auth-section"><header class="wa-section-header"><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['contact_id'])){?><?php $_smarty_tpl->tpl_vars['_hint'] = new Smarty_variable($_smarty_tpl->tpl_vars['_config']->value['offer_logout'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_company']->value)){?><?php $_smarty_tpl->tpl_vars['_hint'] = new Smarty_variable($_smarty_tpl->tpl_vars['_config']->value['company_hint'], null, 0);?><?php }?><h3 class="wa-header"><?php echo $_smarty_tpl->tpl_vars['_config']->value['block_name'];?>
:</h3><span class="wa-contact-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><a class="wa-logout-link js-logout-button wa-tooltip bottom" href="?logout" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_hint']->value, ENT_QUOTES, 'UTF-8', true);?>
">Logout</a><?php }else{ ?><h3 class="wa-header"><?php echo $_smarty_tpl->tpl_vars['_config']->value['block_name'];?>
</h3><?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?><a class="wa-login-link js-show-login-dialog wa-tooltip bottom" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/login/');?>
" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_config']->value['offer_login'], ENT_QUOTES, 'UTF-8', true);?>
">Log in or sign up</a><?php }?><?php }?></header><div class="wa-section-body"><form><?php if (!empty($_smarty_tpl->tpl_vars['_error_text']->value)){?><div class="wa-errors-wrapper"><div class="wa-error-text"><?php echo $_smarty_tpl->tpl_vars['_error_text']->value;?>
</div></div><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['_show_types_toggle']->value)){?><div class="wa-line"><div class="wa-field-wrapper"><label class="wa-label">Customer type</label><div class="wa-toggle js-type-toggle"><?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_active_type']->value['id']==$_smarty_tpl->tpl_vars['_type']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?><span class="<?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php } ?></div><input class="js-type-field" name="auth[mode]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_type']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_is_company']->value)&&!empty($_smarty_tpl->tpl_vars['_config']->value["company_hint"])){?><div class="wa-line"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_config']->value["company_hint"], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['fields_order'])){?><div class="wa-line wa-fields-group line"><?php /*  Call merged included template "./render_field.function.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./render_field.function.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '170197745962468a47694404-46054209');
content_62468a4773a848_12770775($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./render_field.function.html" */?><?php  $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth']->value['fields_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field_id']->key => $_smarty_tpl->tpl_vars['_field_id']->value){
$_smarty_tpl->tpl_vars['_field_id']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['fields'][$_smarty_tpl->tpl_vars['_field_id']->value])){?><?php $_smarty_tpl->tpl_vars['_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['fields'][$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?><?php }else{ ?><?php continue 1?><?php }?><?php smarty_template_function_shop_order_render_field($_smarty_tpl,array('_field'=>$_smarty_tpl->tpl_vars['_field']->value));?>
<?php } ?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_config']->value["service_agreement"])&&!empty($_smarty_tpl->tpl_vars['_config']->value["service_agreement_hint"])){?><div class="wa-line wa-agreement-wrapper"><?php if (($_smarty_tpl->tpl_vars['_config']->value["service_agreement"]=="checkbox")){?><div class="wa-field-wrapper is-agreement-field"><input type="hidden" name="auth[service_agreement]" value="0"><label class="wa-checkbox-wrapper"><input class="wa-checkbox" type="checkbox" name="auth[service_agreement]" value="1" required<?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['service_agreement'])){?> checked="checked"<?php }?>><span class="wa-text"><?php echo $_smarty_tpl->tpl_vars['_config']->value["service_agreement_hint"];?>
</span></label></div><?php }else{ ?><div class="wa-text"><?php echo $_smarty_tpl->tpl_vars['_config']->value["service_agreement_hint"];?>
</div><input type="hidden" name="auth[service_agreement]" value="1"><?php }?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_is_company']->value)&&!empty($_smarty_tpl->tpl_vars['_config']->value["company_terms"])){?><div class="wa-line wa-agreement-wrapper"><div class="wa-text"><?php echo $_smarty_tpl->tpl_vars['_config']->value["company_terms"];?>
</div></div><?php }?><input name="auth[user_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->userId())===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" type="hidden"><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['auth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?></form></div><script>( function($) {var $section = $("#wa-step-auth-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initAuth({$wrapper: $section,contact_id: <?php if (!empty($_smarty_tpl->tpl_vars['auth']->value['contact_id'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['contact_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>null<?php }?>,errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
,templates: { }});});})(jQuery);</script></section><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form",$_smarty_tpl->tpl_vars['_form_globals']->value);?>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a4773a848_12770775')) {function content_62468a4773a848_12770775($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['shop_order_render_field_function']->value)){?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
if (!is_callable('smarty_modifier_wa_date')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_shop_order_render_field')) {
    function smarty_template_function_shop_order_render_field($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['shop_order_render_field']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php $_smarty_tpl->tpl_vars['_wrapper_classes'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['width'])){?><?php if ($_smarty_tpl->tpl_vars['_field']->value['width']==shopCheckoutConfig::FIELD_WIDTH_MINI){?><?php $_smarty_tpl->createLocalArrayVariable('_wrapper_classes', null, 0);
$_smarty_tpl->tpl_vars['_wrapper_classes']->value[] = "size-mini";?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['width']==shopCheckoutConfig::FIELD_WIDTH_SMALL){?><?php $_smarty_tpl->createLocalArrayVariable('_wrapper_classes', null, 0);
$_smarty_tpl->tpl_vars['_wrapper_classes']->value[] = "size-small";?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['width']==shopCheckoutConfig::FIELD_WIDTH_MEDIUM){?><?php $_smarty_tpl->createLocalArrayVariable('_wrapper_classes', null, 0);
$_smarty_tpl->tpl_vars['_wrapper_classes']->value[] = "size-medium";?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['width']==shopCheckoutConfig::FIELD_WIDTH_LARGE){?><?php $_smarty_tpl->createLocalArrayVariable('_wrapper_classes', null, 0);
$_smarty_tpl->tpl_vars['_wrapper_classes']->value[] = "size-large";?><?php }?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_wrapper_classes', null, 0);
$_smarty_tpl->tpl_vars['_wrapper_classes']->value[] = "size-medium";?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_label", null); ob_start(); ?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?><span class="wa-tooltip is-inline top" data-title="Required field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<span class="wa-required"></span></span><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if ($_smarty_tpl->tpl_vars['_field']->value['type']=="input"&&$_smarty_tpl->tpl_vars['_field']->value['content_type']=="date"){?><div class="wa-field-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_wrapper_classes']->value," ");?>
"><div class="wa-label"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</div><input class="wa-input wa-date js-datepicker" type="text"autocomplete="false"data-alt=".js-alt-date"<?php if ($_smarty_tpl->tpl_vars['_field']->value['id']==="birthday"){?>data-type="birthday"<?php }?>value="<?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['value'])){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_field']->value['value']);?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?>><input class="js-alt-date" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="input"){?><?php $_smarty_tpl->tpl_vars['_field_class'] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars['_field_type'] = new Smarty_variable("text", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['content_type'])){?><?php if ($_smarty_tpl->tpl_vars['_field']->value['content_type']=="email"){?><?php $_smarty_tpl->tpl_vars['_field_class'] = new Smarty_variable("wa-email", null, 0);?><?php $_smarty_tpl->tpl_vars['_field_type'] = new Smarty_variable("email", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['content_type']=="phone"){?><?php $_smarty_tpl->tpl_vars['_field_class'] = new Smarty_variable("wa-phone", null, 0);?><?php $_smarty_tpl->tpl_vars['_field_type'] = new Smarty_variable("tel", null, 0);?><?php $_smarty_tpl->tpl_vars['_field_placeholder'] = new Smarty_variable("+1-222-333-4455", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['content_type']=="url"){?><?php $_smarty_tpl->tpl_vars['_field_class'] = new Smarty_variable("wa-url", null, 0);?><?php $_smarty_tpl->tpl_vars['_field_type'] = new Smarty_variable("url", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['content_type']=="number"){?><?php $_smarty_tpl->tpl_vars['_field_class'] = new Smarty_variable("wa-number", null, 0);?><?php $_smarty_tpl->tpl_vars['_field_type'] = new Smarty_variable("number", null, 0);?><?php }?><?php }?><div class="wa-field-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_wrapper_classes']->value," ");?>
"><div class="wa-label"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</div><input class="wa-input <?php echo $_smarty_tpl->tpl_vars['_field_class']->value;?>
" autocomplete="false" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field_type']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['affects_rate'])){?>data-affects-rate="true"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['_field_placeholder']->value)){?>placeholder="<?php echo $_smarty_tpl->tpl_vars['_field_placeholder']->value;?>
"<?php }?>></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="select"){?><div class="wa-field-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_wrapper_classes']->value," ");?>
"><div class="wa-label"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</div><select class="wa-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?>><?php if (empty($_smarty_tpl->tpl_vars['_field']->value['required'])&&empty($_smarty_tpl->tpl_vars['_field']->value['value'])){?><option value="" selected disabled></option><?php }?><?php  $_smarty_tpl->tpl_vars['_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_field']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_option']->key => $_smarty_tpl->tpl_vars['_option']->value){
$_smarty_tpl->tpl_vars['_option']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_option']->value['value']==$_smarty_tpl->tpl_vars['_field']->value['value']), null, 0);?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_option']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_option']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="radio"){?><div class="wa-field-wrapper size-large"><div class="wa-label"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</div><?php if (empty($_smarty_tpl->tpl_vars['_field']->value['value'])&&!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['options'])){?><?php $_smarty_tpl->tpl_vars['_first'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['_field']->value['options']), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_field', null, 0);
$_smarty_tpl->tpl_vars['_field']->value['value'] = $_smarty_tpl->tpl_vars['_first']->value['value'];?><?php }?><?php }?><?php  $_smarty_tpl->tpl_vars['_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_field']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_option']->key => $_smarty_tpl->tpl_vars['_option']->value){
$_smarty_tpl->tpl_vars['_option']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_option']->value['value']==$_smarty_tpl->tpl_vars['_field']->value['value']), null, 0);?><div class="wa-radio-wrapper"><label><input class="wa-radio" type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_option']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>checked<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?>><span class="wa-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_option']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</span></label></div><?php } ?></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="checkbox"){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_field']->value['value']==1), null, 0);?><div class="wa-field-wrapper size-large"><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="0"><label class="wa-checkbox-wrapper"><input class="wa-checkbox" type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>checked<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?>><span class="wa-text"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</span></label></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="textarea"){?><div class="wa-field-wrapper size-large"><div class="wa-label"><?php echo $_smarty_tpl->tpl_vars['_label']->value;?>
</div><textarea class="wa-textarea" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['required'])){?>required<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></div><?php }elseif($_smarty_tpl->tpl_vars['_field']->value['type']=="checkbox"){?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_option']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_field']->value['type'];?>
<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php $_smarty_tpl->tpl_vars['shop_order_render_field_function'] = new Smarty_variable(true, null, 0);?><?php }?><?php }} ?>