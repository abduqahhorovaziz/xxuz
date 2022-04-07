<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/details.html" */ ?>
<?php /*%%SmartyHeaderCode:62594861062468a47bfacf2-84363733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42675992599fdb346923a442f84f35ec289c0265' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/details.html',
      1 => 1594629660,
      2 => 'file',
    ),
    'd36a39715d4fe48e5f8ef1ff2fd6ce3d3990cdf4' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html',
      1 => 1588062360,
      2 => 'file',
    ),
    'f05994944ad2f7ed717fa51e8a26d6376bab7475' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/photo.html',
      1 => 1548948060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62594861062468a47bfacf2-84363733',
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
    'error_step_id' => 0,
    'errors' => 0,
    'details' => 0,
    '_hide_details' => 0,
    '_field_id' => 0,
    '_field' => 0,
    '_plugin' => 0,
    '_inline_field' => 0,
    '_custom_field' => 0,
    '_plugin_description' => 0,
    '_required_inline_fields' => 0,
    '_required_custom_fields' => 0,
    '_data' => 0,
    '_custom_data' => 0,
    '_est_delivery' => 0,
    '_storage_days' => 0,
    '_address' => 0,
    '_adapter' => 0,
    'wa' => 0,
    '_day' => 0,
    '_locale_string' => 0,
    '_way' => 0,
    '_additional' => 0,
    '_photos' => 0,
    'wa_url' => 0,
    '_photo' => 0,
    '_thumb_uri' => 0,
    '_inline_fields' => 0,
    '_custom_fields' => 0,
    '_errors' => 0,
    '_error' => 0,
    '_text_errors' => 0,
    'event_hook' => 0,
    '_' => 0,
    '_photo_template_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a47de15e1_77437113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a47de15e1_77437113')) {function content_62468a47de15e1_77437113($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="details"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_hide_details'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['details']->value)||!empty($_smarty_tpl->tpl_vars['details']->value['disabled']), null, 0);?><section class="wa-step-section wa-step-details-section" id="wa-step-details-section" style="<?php if (!empty($_smarty_tpl->tpl_vars['_hide_details']->value)){?>display:none;<?php }?>"><div class="wa-section-body"><form><?php if (empty($_smarty_tpl->tpl_vars['details']->value['disabled'])){?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value)){?><?php $_smarty_tpl->tpl_vars['_inline_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_custom_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_required_inline_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_required_custom_fields'] = new Smarty_variable(array(), null, 0);?><?php /*  Call merged included template "./render_field.function.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./render_field.function.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '62594861062468a47bfacf2-84363733');
content_62468a47c10815_87051481($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./render_field.function.html" */?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_address_fields'])){?><?php  $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value['shipping_address_fields_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field_id']->key => $_smarty_tpl->tpl_vars['_field_id']->value){
$_smarty_tpl->tpl_vars['_field_id']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_address_fields'][$_smarty_tpl->tpl_vars['_field_id']->value])){?><?php $_smarty_tpl->tpl_vars['_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['details']->value['shipping_address_fields'][$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?><?php }else{ ?><?php continue 1?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_field']->value['affects_rate'])){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_required_inline_fields"); ob_start(); ?><?php smarty_template_function_shop_order_render_field($_smarty_tpl,array('_field'=>$_smarty_tpl->tpl_vars['_field']->value));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }else{ ?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_inline_fields"); ob_start(); ?><?php smarty_template_function_shop_order_render_field($_smarty_tpl,array('_field'=>$_smarty_tpl->tpl_vars['_field']->value));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php } ?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['plugin_custom_fields_order'])){?><?php  $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value['plugin_custom_fields_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field_id']->key => $_smarty_tpl->tpl_vars['_field_id']->value){
$_smarty_tpl->tpl_vars['_field_id']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['plugin_custom_fields'][$_smarty_tpl->tpl_vars['_field_id']->value])){?><?php $_smarty_tpl->tpl_vars['_plugin'] = new Smarty_variable($_smarty_tpl->tpl_vars['details']->value['plugin_custom_fields'][$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['html'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['wa_css_class_added'])){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_inline_field", null); ob_start(); ?><div class="wa-field-wrapper size-small"><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['label'])){?><div class="wa-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_plugin']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['affects_rate'])){?><span class="wa-required"></span><?php }?></div><?php }?><?php echo $_smarty_tpl->tpl_vars['_plugin']->value['html'];?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['affects_rate'])){?><?php $_smarty_tpl->createLocalArrayVariable('_required_inline_fields', null, 0);
$_smarty_tpl->tpl_vars['_required_inline_fields']->value[] = $_smarty_tpl->tpl_vars['_inline_field']->value;?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_inline_fields', null, 0);
$_smarty_tpl->tpl_vars['_inline_fields']->value[] = $_smarty_tpl->tpl_vars['_inline_field']->value;?><?php }?><?php }else{ ?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_custom_field", null); ob_start(); ?><div class="wa-line wa-plugin-fields-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['label'])){?><div class="wa-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_plugin']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['affects_rate'])){?><span class="wa-required"></span><?php }?></div><?php }?><div class="wa-body"><?php echo $_smarty_tpl->tpl_vars['_plugin']->value['html'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['description'])){?><div class="wa-description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_plugin']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (!empty($_smarty_tpl->tpl_vars['_plugin']->value['affects_rate'])){?><?php $_smarty_tpl->createLocalArrayVariable('_required_custom_fields', null, 0);
$_smarty_tpl->tpl_vars['_required_custom_fields']->value[] = $_smarty_tpl->tpl_vars['_custom_field']->value;?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_custom_fields', null, 0);
$_smarty_tpl->tpl_vars['_custom_fields']->value[] = $_smarty_tpl->tpl_vars['_custom_field']->value;?><?php }?><?php }?><?php }?><?php }else{ ?><?php continue 1?><?php }?><?php } ?><?php }?><?php $_smarty_tpl->tpl_vars['_plugin_description'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['details']->value,'preliminary_shipping_rate','description',''), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_plugin_description']->value)){?><div class="wa-details-description"><?php echo $_smarty_tpl->tpl_vars['_plugin_description']->value;?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_required_inline_fields']->value)||!empty($_smarty_tpl->tpl_vars['_required_custom_fields']->value)){?><div class="wa-details-required-fields-section"><?php if (!empty($_smarty_tpl->tpl_vars['_required_inline_fields']->value)){?><div class="wa-line wa-fields-group line"><?php echo smarty_modifier_join('',$_smarty_tpl->tpl_vars['_required_inline_fields']->value);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_required_custom_fields']->value)){?><?php echo smarty_modifier_join('',$_smarty_tpl->tpl_vars['_required_custom_fields']->value);?>
<?php }?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate'])){?><?php $_smarty_tpl->tpl_vars['_address'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_way'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_additional'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_storage_days'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_photos'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['date_min'])){?><?php $_smarty_tpl->tpl_vars['_est_delivery'] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['date_min'],"shortdate"), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_est_delivery'] = new Smarty_variable(str_replace(date('Y'),'',(($tmp = @$_smarty_tpl->tpl_vars['details']->value['shipping_rate']['est_delivery'])===null||$tmp==='' ? '' : $tmp)), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['custom_data'])){?><?php $_smarty_tpl->tpl_vars['_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['custom_data'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['type'])&&!empty($_smarty_tpl->tpl_vars['_data']->value[$_smarty_tpl->tpl_vars['details']->value['shipping_rate']['type']])){?><?php $_smarty_tpl->tpl_vars['_custom_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['_data']->value[$_smarty_tpl->tpl_vars['details']->value['shipping_rate']['type']], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_data']->value['description'])){?><?php $_smarty_tpl->tpl_vars['_address'] = new Smarty_variable($_smarty_tpl->tpl_vars['_custom_data']->value['description'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_data']->value['way'])){?><?php $_smarty_tpl->tpl_vars['_way'] = new Smarty_variable($_smarty_tpl->tpl_vars['_custom_data']->value['way'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_data']->value['additional'])){?><?php $_smarty_tpl->tpl_vars['_additional'] = new Smarty_variable($_smarty_tpl->tpl_vars['_custom_data']->value['additional'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_data']->value['storage']['storage_days'])){?><?php $_smarty_tpl->tpl_vars['_storage_days'] = new Smarty_variable($_smarty_tpl->tpl_vars['_custom_data']->value['storage']['storage_days'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_data']->value['photos'])){?><?php $_smarty_tpl->tpl_vars['_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['_custom_data']->value['photos'], null, 0);?><?php }?><?php }?><?php }?><div class="wa-details-rates-section"><div class="wa-table"><div class="wa-row"><div class="wa-cell wa-cell-name"><div class="wa-name">Shipping cost</div></div><div class="wa-cell wa-cell-value"><span class="wa-delivery-price"><?php if ($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['rate']>0){?><?php echo shop_currency($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['rate'],array('in_currency'=>$_smarty_tpl->tpl_vars['details']->value['shipping_rate']['currency'],'format'=>'h'));?>
<?php }else{ ?>free<?php }?></span></div></div><?php if (!empty($_smarty_tpl->tpl_vars['_est_delivery']->value)){?><div class="wa-row"><div class="wa-cell wa-cell-name"><div class="wa-name">Estimated shipping time</div></div><div class="wa-cell wa-cell-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_est_delivery']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['details']->value['plugin_custom_fields']['desired_delivery']['html'])){?><div class="wa-cell-value-description">You can choose a convenient time starting from this date.</div><?php }?></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_storage_days']->value)){?><div class="wa-row"><div class="wa-cell wa-cell-name"><div class="wa-name">Order storage time</div></div><div class="wa-cell wa-cell-value"><?php echo _w('%d day','%d days',$_smarty_tpl->tpl_vars['_storage_days']->value);?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_address']->value)){?><div class="wa-row"><div class="wa-cell wa-cell-name"><div class="wa-name">Address</div></div><div class="wa-cell wa-cell-value"><?php $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_variable('', null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['map']['adapter'])){?><?php $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_variable($_smarty_tpl->tpl_vars['details']->value['map']['adapter'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_adapter']->value==="yandex"){?><span class="ymaps-geolink" data-description="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_address']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }elseif($_smarty_tpl->tpl_vars['_adapter']->value==="google"){?><a class="google-geolink" target="_blank" href="//maps.google.com/maps?q=<?php echo urlencode($_smarty_tpl->tpl_vars['_address']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_address']->value, ENT_QUOTES, 'UTF-8', true);?>
</a><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['service'])){?><div class="wa-row"><div class="wa-cell wa-cell-name"><div class="wa-name">Shipping service</div></div><div class="wa-cell wa-cell-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['service'], ENT_QUOTES, 'UTF-8', true);?>
</div></div><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule']['days'])){?><div class="wa-line wa-schedule-wrapper"><div class="wa-label">Business hours:</div><div class="wa-days-wrapper"><?php $_smarty_tpl->tpl_vars['_locale_string'] = new Smarty_variable(substr((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->locale())===null||$tmp==='' ? "en" : $tmp),0,2), null, 0);?><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule']['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
?><div class="wa-day-wrapper"><div class="wa-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['date_formatted'], ENT_QUOTES, 'UTF-8', true);?>
, <?php if ($_smarty_tpl->tpl_vars['_locale_string']->value=="ru"){?><?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['_day']->value['weekday_full']), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_day']->value['weekday_full'];?>
<?php }?></div><div class="wa-value"><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['works'])){?><span class="wa-time"<?php if ($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule']['timezone']!=$_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule']['user_timezone']){?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule']['timezone_text'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['time_start'], ENT_QUOTES, 'UTF-8', true);?>
—<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day']->value['time_end'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }else{ ?><span class="wa-text">day off</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['additional'])){?><span class="wa-additional"><?php echo htmlspecialchars(mb_substr($_smarty_tpl->tpl_vars['_day']->value['additional'],0,64), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></div></div><?php } ?></div></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule_html'])){?><div class="wa-line wa-schedule-wrapper"><div class="wa-label">Business hours:</div><div class="wa-days-wrapper"><?php echo $_smarty_tpl->tpl_vars['details']->value['shipping_rate']['pickup_schedule_html'];?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_way']->value)){?><div class="wa-line wa-comment-item"><div class="wa-label">How to reach:</div><div class="wa-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_way']->value, ENT_QUOTES, 'UTF-8', true);?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_additional']->value)){?><div class="wa-line wa-additional-item"><div class="wa-label">More details:</div><div class="wa-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_additional']->value, ENT_QUOTES, 'UTF-8', true);?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_photos']->value)){?><div class="wa-line wa-photos-section" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['shipping_rate']['name'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-action left js-scroll-prev"><i class="wa-icon arrow-left"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#arrow-left"></use></svg></i></div><div class="wa-photos-list"><?php  $_smarty_tpl->tpl_vars['_photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_photo']->key => $_smarty_tpl->tpl_vars['_photo']->value){
$_smarty_tpl->tpl_vars['_photo']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_photo']->value['uri'])){?><?php $_smarty_tpl->tpl_vars['_thumb_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl(htmlspecialchars($_smarty_tpl->tpl_vars['_photo']->value['uri'], ENT_QUOTES, 'UTF-8', true),'100x75'), null, 0);?><div class="wa-photo-wrapper" data-image-uri="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_photo']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
" data-thumb-uri="<?php echo $_smarty_tpl->tpl_vars['_thumb_uri']->value;?>
"><a class="wa-photo js-show-photo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_photo']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['_thumb_uri']->value;?>
);" target="_blank"></a></div><?php }?><?php } ?></div><div class="wa-action right js-scroll-next"><i class="wa-icon arrow-right"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#arrow-right"></use></svg></i></div></div><?php }?></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_inline_fields']->value)||!empty($_smarty_tpl->tpl_vars['_custom_fields']->value)){?><div class="wa-details-fields-section"><?php if (!empty($_smarty_tpl->tpl_vars['_inline_fields']->value)){?><div class="wa-line wa-fields-group line"><?php echo smarty_modifier_join('',$_smarty_tpl->tpl_vars['_inline_fields']->value);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_custom_fields']->value)){?><?php echo smarty_modifier_join('',$_smarty_tpl->tpl_vars['_custom_fields']->value);?>
<?php }?></div><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_text_errors'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_error']->value['id'])&&$_smarty_tpl->tpl_vars['_error']->value['id']==="details_plugin"&&!empty($_smarty_tpl->tpl_vars['_error']->value['text'])){?><?php $_smarty_tpl->createLocalArrayVariable('_text_errors', null, 0);
$_smarty_tpl->tpl_vars['_text_errors']->value[] = $_smarty_tpl->tpl_vars['_error']->value;?><?php }?><?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['_text_errors']->value)){?><div class="wa-errors-wrapper"><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_text_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><div class="wa-error-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_error']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php } ?></div><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?></form></div><?php $_smarty_tpl->_capture_stack[0][] = array('default', '_photo_template_html', null); ob_start(); ?><?php /*  Call merged included template "./dialog/photo.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./dialog/photo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '62594861062468a47bfacf2-84363733');
content_62468a47dc7983_32212910($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./dialog/photo.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><script>( function($) {var $section = $("#wa-step-details-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initDetails({$wrapper: $section,disabled: <?php if (!empty($_smarty_tpl->tpl_vars['details']->value['disabled'])){?>true<?php }else{ ?>false<?php }?>,templates: {photo: <?php echo waUtils::jsonEncode($_smarty_tpl->tpl_vars['_photo_template_html']->value);?>
},errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
});});})(jQuery);</script></section>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a47c10815_87051481')) {function content_62468a47c10815_87051481($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['shop_order_render_field_function']->value)){?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
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
<?php $_smarty_tpl->tpl_vars['shop_order_render_field_function'] = new Smarty_variable(true, null, 0);?><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:47
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/photo.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a47dc7983_32212910')) {function content_62468a47dc7983_32212910($_smarty_tpl) {?><div class="wa-order-dialog wa-photo-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body with-full-height without-footer">
        <header class="wa-dialog-header">
            <div class="wa-header">%title%</div>
            <span class="wa-close-wrapper js-close-dialog">
                <i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i>
            </span>
        </header>

        <div class="wa-dialog-content">

            <div class="wa-photo-slider-section js-photo-slider-section">
                <div class="wa-photo-body"></div>
                <div class="wa-photo-actions">
                    <span class="wa-action left js-show-prev">
                        <i class="wa-icon delete size-14"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#arrow-left"></use></svg></i>
                    </span>
                    <span class="wa-action right js-show-next">
                        <i class="wa-icon delete size-14"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#arrow-right"></use></svg></i>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div><?php }} ?>