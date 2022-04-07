<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:49:37
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/settings/SettingsCheckout2.html" */ ?>
<?php /*%%SmartyHeaderCode:13263472956244b45155ea35-31550454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265fd6760205055169ffa6ea4a225b5acc8e51ba' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/settings/SettingsCheckout2.html',
      1 => 1617788924,
      2 => 'file',
    ),
    '569eb0dbc968ec6067c1496abdad048db58442b9' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/settings/SettingsCheckout2Blocks.inc.html',
      1 => 1626346255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13263472956244b45155ea35-31550454',
  'function' => 
  array (
    'renderScheduleExtraWorkday' => 
    array (
      'parameter' => 
      array (
        'day' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'renderScheduleWeekend' => 
    array (
      'parameter' => 
      array (
        'date' => '',
      ),
      'compiled' => '',
    ),
    'fieldLocalizedType' => 
    array (
      'parameter' => 
      array (
        'field' => NULL,
      ),
      'compiled' => '',
    ),
    'renderContactFieldsEditor' => 
    array (
      'parameter' => 
      array (
        '_fields' => 
        array (
        ),
        '_type' => 'contact',
      ),
      'compiled' => '',
    ),
    'renderShippingLocation' => 
    array (
      'parameter' => 
      array (
        '_location' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'renderShippingNoLocations' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'design_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'cart_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'recommendations_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'order_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'customer_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'shipping_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'payment_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'confirmation_block' => 
    array (
      'parameter' => 
      array (
        'settings' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    '_class' => 0,
    'checkout_sidebar' => 0,
    'route' => 0,
    'checkout_config' => 0,
    '_id' => 0,
    '_storefront_settings_path' => 0,
    'shipping_plugins' => 0,
    'payment_plugins' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    '_title' => 0,
    'demo_terms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b4517d32f0_85143119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b4517d32f0_85143119')) {function content_6244b4517d32f0_85143119($_smarty_tpl) {?><?php /*  Call merged included template "./SettingsCheckout2Blocks.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsCheckout2Blocks.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13263472956244b45155ea35-31550454');
content_6244b451587275_44487162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsCheckout2Blocks.inc.html" */?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(strtr(("Оформление заказа").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_class'] = new Smarty_variable('s-settings-checkout-content', null, 0);?>
<?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['_class']->value), null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['checkout_sidebar']->value;?>


<?php if ($_smarty_tpl->tpl_vars['route']->value&&$_smarty_tpl->tpl_vars['checkout_config']->value){?>
<div class="<?php echo $_smarty_tpl->tpl_vars['_class']->value;?>
 content blank left200px" id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
    <div class="s-settings-form">
        <form action="?module=SettingsCheckout2Save">
            <div class="block double-padded">
                <h1>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['route']->value['domain'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['route']->value['url'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php echo sprintf('Настройка <span class="s-checkout-2-label">оформления заказа в корзине</span> для <i class="icon16 status-green"></i><span class="gray">%s/%s</span>',$_tmp2,$_tmp3);?>

                </h1>

                <div class="s-page-description" style="margin: 0 0 2em;">
                    <?php $_smarty_tpl->tpl_vars['_storefront_settings_path'] = new Smarty_variable(sprintf("?action=storefronts#/design/theme=%s&domain=%s&route=%s&action=settings",urlencode((($tmp = @$_smarty_tpl->tpl_vars['route']->value['theme'])===null||$tmp==='' ? 'default' : $tmp)),urlencode(waIdna::enc($_smarty_tpl->tpl_vars['route']->value['domain'])),urlencode($_smarty_tpl->tpl_vars['route']->value['route_id'])), null, 0);?>
                    <div>
                        <a href="https://support.webasyst.ru/shop-script/29292/in-cart-checkout/" target="_blank"><i class="icon16 info"></i>Инструкция по настройке</a>
                    </div>
                    <div style="margin: 2em 0 0;">
                        <span style="color: #888"><?php echo sprintf('В <a href="%s" target="_blank">настройках витрины <i class="icon16 new-window"></i></a> можно переключаться между <strong>пошаговым оформлением заказа</strong> и <strong>оформлением заказа в корзине</strong>.',$_smarty_tpl->tpl_vars['_storefront_settings_path']->value);?>
</span>
                    </div>
                </div>

                
                <?php smarty_template_function_design_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['design']));?>


                

                <table class="s-big-table js-big-table" style="width: 100%; margin: 20px 0;">
                    <tbody>
                        
                        <tr class="js-block-wrapper" data-block="cart">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link">
                                        <i class="icon16 settings"></i>
                                        <b><i>Настройки</i></b>
                                    </a>
                                </div>
                                <h3 class="name">Корзина</h3>
                                <div class="js-block-content" style="display: none;">
                                    <?php smarty_template_function_cart_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['cart']));?>

                                </div>
                            </td>
                        </tr>

                        
                        <tr class="js-block-wrapper" data-block="cart">
                            <td class="s-block-container">
                                
                                <div class="float-right">

                                    <div class="s-toggle-wrapper js-block-toggle-wrapper">
                                        <input type="hidden" name="data[recommendations][used]" value="0" />
                                        <input id="recommendations_used" name="data[recommendations][used]" class="ibutton js-toggle" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['recommendations']['used']){?> checked="checked"<?php }?>>
                                        <label for="recommendations_used">
                                            <span class="s-toggle-status js-toggle-status<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['recommendations']['used']){?> disabled<?php }?>"><?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['recommendations']['used']){?>Включен<?php }else{ ?>Выключен<?php }?></span>
                                        </label>
                                    </div>

                                    <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link"<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['recommendations']['used']){?> style="display: none;"<?php }?>>
                                        <i class="icon16 settings"></i>
                                        <b><i>Настройки</i></b>
                                    </a>
                                </div>
                                <h3 class="name">Рекомендации</h3>
                                <div class="js-block-content" style="display: none;">
                                    <?php smarty_template_function_recommendations_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['recommendations']));?>

                                </div>
                            </td>
                        </tr>

                        
                        <tr class="block-wrapper js-block-wrapper" data-block="order">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link">
                                        <i class="icon16 settings"></i>
                                        <b><i>Настройки</i></b>
                                    </a>
                                </div>
                                <h3 class="name">Общие настройки оформления заказа</h3>
                                <div class="js-block-content" style="display: none;">
                                    <?php smarty_template_function_order_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['order']));?>

                                </div>
                            </td>
                        </tr>

                        
                        <tr class="js-block-wrapper" data-block="customer">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link">
                                        <i class="icon16 settings"></i>
                                        <b><i>Настройки</i></b>
                                    </a>
                                </div>
                                <h3 class="name">Покупатель</h3>
                                <div class="js-block-content" style="display: none;">
                                    <?php smarty_template_function_customer_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['customer']));?>

                                </div>
                            </td>
                        </tr>

                        
                        <tr class="js-block-wrapper" data-block="shipping">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['shipping_plugins']->value)){?>
                                        <div class="s-toggle-wrapper js-block-toggle-wrapper">
                                            <input type="hidden" name="data[shipping][used]" value="0" />
                                            <input id="shipping_used" name="data[shipping][used]" class="ibutton js-toggle" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['shipping']['used']){?> checked="checked"<?php }?>>
                                            <label for="shipping_used">
                                                <span class="s-toggle-status js-toggle-status<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['shipping']['used']){?> disabled<?php }?>"><?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['shipping']['used']){?>Включен<?php }else{ ?>Выключен<?php }?></span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link"<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['shipping']['used']){?> style="display: none;"<?php }?>>
                                            <i class="icon16 settings"></i>
                                            <b><i>Настройки</i></b>
                                        </a>
                                    <?php }else{ ?>
                                        <span style="margin-right: 12px; vertical-align: top; display: inline-block;">
                                            <?php echo sprintf('<a href="%s" target="_blank">Добавьте способ доставки</a>','?action=settings#/shipping/');?>

                                            <i class="icon16 new-window"></i>
                                        </span>
                                        <div class="s-toggle-wrapper js-block-toggle-wrapper">
                                            <label for="shipping_used">
                                                <input id="shipping_used" class="ibutton js-toggle" type="checkbox" disabled>
                                                <span class="s-toggle-status js-toggle-status disabled">Выключен</span>
                                            </label>
                                        </div>
                                    <?php }?>
                                </div>
                                <h3 class="name">Доставка</h3>
                                <?php if (!empty($_smarty_tpl->tpl_vars['shipping_plugins']->value)){?>
                                    <div class="js-block-content" style="display: none;">
                                        <?php smarty_template_function_shipping_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['shipping']));?>

                                    </div>
                                <?php }?>
                            </td>
                        </tr>

                        
                        <tr class="js-block-wrapper" data-block="payment">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['payment_plugins']->value)){?>
                                        <div class="s-toggle-wrapper js-block-toggle-wrapper">
                                            <input type="hidden" name="data[payment][used]" value="0" />
                                            <input id="payment_used" name="data[payment][used]" value="1" class="ibutton js-toggle" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['payment']['used']){?> checked="checked"<?php }?>>
                                            <label for="payment_used">
                                                <span class="s-toggle-status js-toggle-status<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['payment']['used']){?> disabled<?php }?>"><?php if ($_smarty_tpl->tpl_vars['checkout_config']->value['payment']['used']){?>Включен<?php }else{ ?>Выключен<?php }?></span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link"<?php if (!$_smarty_tpl->tpl_vars['checkout_config']->value['payment']['used']){?> style="display: none;"<?php }?>>
                                            <i class="icon16 settings"></i>
                                            <b><i>Настройки</i></b>
                                        </a>
                                    <?php }else{ ?>
                                        <span style="margin-right: 12px; vertical-align: top; display: inline-block;">
                                            <?php echo sprintf('<a href="%s" target="_blank">Добавьте способ оплаты</a>','?action=settings#/payment/');?>

                                            <i class="icon16 new-window"></i>
                                        </span>
                                        <div class="s-toggle-wrapper js-block-toggle-wrapper">
                                            <label for="payment_used">
                                                <input id="payment_used" class="ibutton js-toggle" type="checkbox" disabled>
                                                <span class="s-toggle-status js-toggle-status disabled">Выключен</span>
                                            </label>
                                        </div>
                                    <?php }?>
                                </div>
                                <h3 class="name">Оплата</h3>
                                <?php if (!empty($_smarty_tpl->tpl_vars['payment_plugins']->value)){?>
                                    <div class="js-block-content" style="display: none;">
                                        <?php smarty_template_function_payment_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['payment']));?>

                                    </div>
                                <?php }?>
                            </td>
                        </tr>

                        
                        <tr class="js-block-wrapper" data-block="confirmation">
                            <td class="s-block-container">
                                
                                <div class="float-right">
                                    <a href="javascript:void(0);" class="inline-link s-settings-link js-settings-link">
                                        <i class="icon16 settings"></i>
                                        <b><i>Настройки</i></b>
                                    </a>
                                </div>
                                <h3 class="name">Подтверждение</h3>
                                <div class="js-block-content" style="display: none;">
                                    <?php smarty_template_function_confirmation_block($_smarty_tpl,array('settings'=>$_smarty_tpl->tpl_vars['checkout_config']->value['confirmation']));?>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['route']->value['checkout_storefront_id'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />

            
            <div class="s-form-buttons js-buttons-wrapper blank">
                <div class="s-footer-actions block double-padded js-footer-actions">
                    <div class="fixed">
                        
                        <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                        <i class="icon16 loading s-loading" style="display: none;"></i>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="clear-both"></div>
</div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/checkout2.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script>
    (function ($) {
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);

        new ShopSettingsCheckout2({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"),
            domain: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['route']->value['domain'])===null||$tmp==='' ? null : $tmp));?>
,
            route_id: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['route']->value['route_id'])===null||$tmp==='' ? null : $tmp));?>
,
            storefront_id: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['route']->value['checkout_storefront_id'])===null||$tmp==='' ? null : $tmp));?>
,
            shipping_location_template: <?php ob_start();?><?php smarty_template_function_renderShippingLocation($_smarty_tpl,array('_location'=>array()));?>
<?php $_tmp4=ob_get_clean();?><?php echo json_encode($_tmp4);?>
,
            shipping_no_locations_template: <?php ob_start();?><?php smarty_template_function_renderShippingNoLocations($_smarty_tpl,array());?>
<?php echo json_encode(ob_get_clean())?>,
            schedule_extra_workday_template: <?php ob_start();?><?php smarty_template_function_renderScheduleExtraWorkday($_smarty_tpl,array());?>
<?php echo json_encode(ob_get_clean())?>,
            schedule_extra_weekend_template: <?php ob_start();?><?php smarty_template_function_renderScheduleWeekend($_smarty_tpl,array());?>
<?php echo json_encode(ob_get_clean())?>,
            demo_terms: <?php echo json_encode($_smarty_tpl->tpl_vars['demo_terms']->value);?>
,
            date_format: <?php echo json_encode(waDateTime::getFormatJs('date'));?>
,
            locale: {
                enabled: <?php echo json_encode(_w('Enabled'));?>
,
                disabled: <?php echo json_encode(_w('Disabled'));?>

            }
        });
    })(jQuery);
</script>
<?php }else{ ?>
<div class="s-settings-checkout-empty-wrapper">
    <div class="s-settings-checkout-not-found">Витрина не найдена.</div>
    <div class="clear-both"></div>
</div>
<script>
    (function ($) {
        $('#s-settings-menu').find('a[href="?action=settings#/checkout/"]').parent().addClass('selected');
    })(jQuery);
</script>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:49:37
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/settings/SettingsCheckout2Blocks.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b451587275_44487162')) {function content_6244b451587275_44487162($_smarty_tpl) {?>
<?php if (!is_callable('smarty_modifier_wa_date')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_renderScheduleExtraWorkday')) {
    function smarty_template_function_renderScheduleExtraWorkday($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderScheduleExtraWorkday']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <tr class="js-day-wrapper worked">
        <td>
            <label>
                <input data-name="date" class="s-date js-datepicker" autocomplete="off" value="<?php echo htmlspecialchars(smarty_modifier_wa_date((($tmp = @$_smarty_tpl->tpl_vars['day']->value['date'])===null||$tmp==='' ? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
                <i class="icon16 calendar"></i>
            </label>
        </td>
        <td>
            от
            <input data-name="start_work" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['start_work'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="00:00" />
            до
            <input data-name="end_work" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['end_work'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="23:59" />
        </td>
        <td class="align-center">
            до
            <input data-name="end_processing" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['end_processing'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="14:00" />
        </td>
        <td>
            <i class="icon16 no s-remove js-remove"></i>
        </td>
    </tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if (!is_callable('smarty_modifier_wa_date')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_renderScheduleWeekend')) {
    function smarty_template_function_renderScheduleWeekend($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderScheduleWeekend']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <tr class="js-day-wrapper">
        <td>
            <label>
                <input class="s-date js-datepicker js-extra-weekend" autocomplete="off" value="<?php echo htmlspecialchars(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value), ENT_QUOTES, 'UTF-8', true);?>
" />
                <i class="icon16 calendar"></i>
            </label>
        </td>
        <td>
            <i class="icon16 no s-remove js-remove"></i>
        </td>
    </tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if (!function_exists('smarty_template_function_fieldLocalizedType')) {
    function smarty_template_function_fieldLocalizedType($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['fieldLocalizedType']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value instanceof waContactBranchField){?><?php echo $_smarty_tpl->tpl_vars['field_types']->value['Branch'];?>
<?php }elseif($_smarty_tpl->tpl_vars['field']->value instanceof waContactStringField&&$_smarty_tpl->tpl_vars['field']->value->getParameter('input_height')>1){?><?php echo $_smarty_tpl->tpl_vars['field_types']->value['Text'];?>
<?php }else{ ?><?php echo ifempty($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['field']->value->getType()],$_smarty_tpl->tpl_vars['field']->value->getType());?>
<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_renderContactFieldsEditor')) {
    function smarty_template_function_renderContactFieldsEditor($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderContactFieldsEditor']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field']->_loop = false;
 $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field']->key => $_smarty_tpl->tpl_vars['_field']->value){
$_smarty_tpl->tpl_vars['_field']->_loop = true;
 $_smarty_tpl->tpl_vars['_field_id']->value = $_smarty_tpl->tpl_vars['_field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['_type']->value=='address'){?>
            <?php $_smarty_tpl->tpl_vars['_f'] = new Smarty_variable($_smarty_tpl->tpl_vars['address_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_format_f'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['format_address_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value]), null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['_f'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_format_f'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['format_contact_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value]), null, 0);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['_field_id']->value==='company_contact_id'){?>
            <?php continue 1?>
        <?php }?>

        <tr class="js-field" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            
            <td>
                <i class="icon16 sort"></i>
                <label>
                    <input type="checkbox" data-name="used"<?php if ($_smarty_tpl->tpl_vars['_field']->value['used']){?> checked<?php }?> title="Использовать поле" />
                    <?php echo $_smarty_tpl->tpl_vars['_f']->value->getName(null,true);?>

                    <i class="hint"><?php echo $_smarty_tpl->tpl_vars['_field_id']->value;?>
 — <?php smarty_template_function_fieldLocalizedType($_smarty_tpl,array('field'=>$_smarty_tpl->tpl_vars['_f']->value));?>
</i>
                </label>
            </td>
            
            <td>
                <label>
                    <input type="checkbox" data-name="required"<?php if ($_smarty_tpl->tpl_vars['_field']->value['required']){?> checked<?php }?> />
                    <i class="small">Обязательное</i>
                </label>
            </td>
            
            <td class="js-field-width">
                <?php if (!empty($_smarty_tpl->tpl_vars['_format_f']->value['type'])&&$_smarty_tpl->tpl_vars['_format_f']->value['type']=='input'){?>
                    <label>
                        <i class="small">Ширина поля</i>
                        <select data-name="width">
                            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_width_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_field']->value['width']===$_smarty_tpl->tpl_vars['_id']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                    </label>
                <?php }?>
            </td>
        </tr>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!is_callable('smarty_modifier_truncate')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_renderShippingLocation')) {
    function smarty_template_function_renderShippingLocation($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderShippingLocation']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<tr class="js-location">
    
    <td style="min-width: 38px; width: 38px;">
        <i class="icon16 sort"></i>
        <input type="checkbox" data-name="enabled" <?php if (empty($_smarty_tpl->tpl_vars['_location']->value)||!empty($_smarty_tpl->tpl_vars['_location']->value['enabled'])){?>checked<?php }?> title="Использовать область доставки" />
    </td>
    
    <td title="Название области доставки">
        <span class="js-preview"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['name'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
        <input class="s-editor js-editor" type="text" autocomplete="off" data-name="name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['name'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Название области доставки" style="display: none;" />
    </td>
    
    <td title="Страна">
        <span class="js-preview"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['countries']->value[(($tmp = @$_smarty_tpl->tpl_vars['_location']->value['country'])===null||$tmp==='' ? null : $tmp)]['name'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
        <select class="js-location-country s-editor js-editor" data-name="country" style="display: none;">
            <option value="">Выберите страну</option>
            <?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_smarty_tpl->tpl_vars['_country_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
 $_smarty_tpl->tpl_vars['_country_id']->value = $_smarty_tpl->tpl_vars['_country']->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['country'])===null||$tmp==='' ? null : $tmp)===$_smarty_tpl->tpl_vars['_country_id']->value){?> selected<?php }?>><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true),30,'...');?>
</option>
            <?php } ?>
        </select>
    </td>
    
    <td title="Регион">
        <span class="js-preview">
            <?php if (isset($_smarty_tpl->tpl_vars['_location']->value['region'])){?>
                <?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?>
                    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['country'])===null||$tmp==='' ? null : $tmp)==$_smarty_tpl->tpl_vars['_region']->value['country_iso3']&&$_smarty_tpl->tpl_vars['_location']->value['region']===$_smarty_tpl->tpl_vars['_region']->value['code']){?>
                        <?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true),30,'...');?>

                    <?php }?>
                <?php } ?>
            <?php }?>
        </span>
        <select class="js-location-region s-editor js-editor" data-name="region" style="display: none;">
            <option value="">Выберите регион</option>
            <?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['country_iso3'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['country'])===null||$tmp==='' ? null : $tmp)==$_smarty_tpl->tpl_vars['_region']->value['country_iso3']&&(($tmp = @$_smarty_tpl->tpl_vars['_location']->value['region'])===null||$tmp==='' ? null : $tmp)===$_smarty_tpl->tpl_vars['_region']->value['code']){?> selected<?php }?>><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true),30,'...');?>
</option>
            <?php } ?>
        </select>
    </td>
    
    <td title="Населенный пункт">
        <span class="js-preview"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['city'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
        <input class="js-location-city s-editor js-editor" type="text" data-name="city" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['city'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" placeholder="Населенный пункт" style="display: none;" />
    </td>
    
    <td class="align-right" style="min-width: 42px;max-width: 42px;">
        <i class="icon16 edit js-edit-location" title="Редактировать"></i><i class="icon16 no js-delete-location" title="Удалить"></i>
    </td>
</tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_renderShippingNoLocations')) {
    function smarty_template_function_renderShippingNoLocations($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderShippingNoLocations']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<tr class="js-no-locations no-border">
    <td style="text-align: center;">Нет добавленных областей доставки</td>
</tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>




<?php if (!function_exists('smarty_template_function_design_block')) {
    function smarty_template_function_design_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['design_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    <div class="fields js-block-wrapper" data-block="design">
        
        <div class="field">
            <div class="name">Включить стандартный стиль дизайна</div>
            <div class="value">
                <input type="hidden" name="data[design][custom]" value="0" />
                <input class="js-design-toggle" type="checkbox" name="data[design][custom]" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['custom']){?> checked<?php }?> />
            </div>
            <div class="value js-design-values"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['custom']){?> style="display: none"<?php }?>>
                
                <?php $_smarty_tpl->tpl_vars['_logo'] = new Smarty_variable(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['logo'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true), null, 0);?>
                <div class="field">
                    <div class="name">
                        <label for="design_logo">Логотип</label>
                    </div>
                    <div class="value input js-logo-wrapper">
                        <input type="file" class="js-design-logo" data-block-name="design-logo" />
                        <input type="hidden" class="js-design-logo-field" name="data[design][logo]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['logo'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
                        <i class="icon16 loading" style="display: none;"></i>
                        <div class="s-design-logo-preview-wrapper js-design-logo-preview-wrapper"<?php if (empty($_smarty_tpl->tpl_vars['settings']->value['logo'])){?> style="display: none;"<?php }?>>
                            <div>
                                <img class="s-design-logo-preview transparent-sprite js-design-logo-preview" src="<?php if ($_smarty_tpl->tpl_vars['_logo']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo $_smarty_tpl->tpl_vars['_logo']->value;?>
<?php }?>">
                            </div>
                            <a href="javascript:void(0);" class="inline-link hint js-delete-design-logo"><b><i>Удалить логотип</i></b></a>
                        </div>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_business_scope">Сфера деятельности</label>
                    </div>
                    <div class="value input">
                        <input id="design_business_scope" type="text" name="data[design][business_scope]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['business_scope'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_phone">Телефон</label>
                    </div>
                    <div class="value input">
                        <input id="design_phone" type="text" name="data[design][phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_phone_hint">Подпись под номером телефона</label>
                    </div>
                    <div class="value input">
                        <input id="design_phone_hint" type="text" name="data[design][phone_hint]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['phone_hint'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_address">Адрес</label>
                    </div>
                    <div class="value input">
                        <input id="design_address" type="text" name="data[design][address]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_working_hours">Часы работы</label>
                    </div>
                    <div class="value input">
                        <input id="design_working_hours" type="text" name="data[design][working_hours]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['working_hours'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_order_background">Цвет фона страницы оформления заказа</label>
                    </div>
                    <div class="value input">
                        <input id="design_order_background" class="s-color-input js-color-input" type="text" name="data[design][order_background]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['order_background'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_layout_background">Цвет фона шапки и подвала страницы</label>
                    </div>
                    <div class="value input">
                        <input id="design_layout_background" class="s-color-input js-color-input" type="text" name="data[design][layout_background]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['layout_background'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="design_custom_css">Свои CSS-стили</label>
                    </div>
                    <div class="value">
                        <textarea id="design_custom_css" name="data[design][custom_css]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['custom_css'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <div class="hint" style="margin-top: 10px;">
                            Введенный CSS-код будет помещен внутри тега <code>&lt;style&gt; ... &lt;/style&gt;</code> в блоке <code>&lt;head&gt;</code> только на странице оформления заказа.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_cart_block')) {
    function smarty_template_function_cart_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['cart_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    
    <div class="field">
        <div class="name">Название блока</div>
        <div class="value input">
            <input type="text" name="data[cart][block_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
        </div>
    </div>

    
    <div class="field">
        <div class="name">Текст для пустой корзины</div>
        <div class="value input">
            <input type="text" name="data[cart][empty_text]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['empty_text'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
        </div>
    </div>

    
    <div class="field">
        <div class="name">Смена артикула</div>
        <div class="value">
            <label>
                <input type="hidden" name="data[cart][change_sku]" value="0" />
                <input type="checkbox" name="data[cart][change_sku]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['change_sku']){?> checked<?php }?> />
                Разрешить покупателям выбирать другой артикул товара в корзине
            </label>
            <div class="hint block-padded">Например, для изменения свойств товара: цвета, размера и т. п.</div>
        </div>
    </div>

    
    <div class="field">
        <div class="name">Отображение скидки на каждый товар</div>
        <div class="value radio">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_discount_item_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant">
                    <label>
                        <input type="radio" name="data[cart][discount_item]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['discount_item']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (isset($_smarty_tpl->tpl_vars['_variant']->value['description'])){?>
                            <p class="hint"><?php echo $_smarty_tpl->tpl_vars['_variant']->value['description'];?>
</p>
                        <?php }?>
                    </label>
                </div>
            <?php } ?>
        </div>
    </div>

    
    <div class="field">
        <div class="name">Отображение итоговой скидки</div>
        <div class="value radio">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_discount_general_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant">
                    <label>
                        <input type="radio" name="data[cart][discount_general]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['discount_general']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </label>
                </div>
            <?php } ?>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="data[cart][show_weight]">Показывать вес товаров и общий вес заказа</label>
        </div>
        <div class="value">
            <label>
                <input type="hidden" name="data[cart][show_weight]" value="0" />
                <input type="checkbox" name="data[cart][show_weight]" id="data[cart][show_weight]" <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_weight']){?>checked<?php }?> />
            </label>
        </div>
    </div>

</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_recommendations_block')) {
    function smarty_template_function_recommendations_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['recommendations_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    <div style="margin-top: 10px;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
marketing/recommendations/" target="_blank">Настроить рекомендации (перекрестные продажи) <i class="icon16 new-window"></i></a>
   	</div>
    
    <div class="field">
        <div class="name">Название блока</div>
        <div class="value input">
            <input type="text" name="data[recommendations][block_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!is_callable('smarty_modifier_truncate')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_order_block')) {
    function smarty_template_function_order_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['order_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

<div class="s-checkout-field-group field-group">
    
    <div class="field">
        <div class="name">
            <label for="order_block_name">Название блока</label>
        </div>
        <div class="value input">
            <input id="order_block_name" type="text" name="data[order][block_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
        </div>
    </div>

    
    <?php $_smarty_tpl->tpl_vars['_schedule'] = new Smarty_variable($_smarty_tpl->tpl_vars['checkout_config']->value['schedule'], null, 0);?>
    <div class="field">
        <div class="name s-table-field-name bold">Режим работы магазина</div>
        <div class="value s-table-field-value radio js-schedule-block">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schedule_mode_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant js-variant" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <label>
                        <input class="js-schedule-mode-variant" type="radio" name="data[schedule][mode]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_schedule']->value['mode']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </label>
                    <div class="s-variant-params block-padded js-variant-params">
                        <div class="hint" style="margin: 10px 0;"><?php echo $_smarty_tpl->tpl_vars['_variant']->value['description'];?>
</div>
                        
                        <?php if (shopCheckoutConfig::SCHEDULE_MODE_CUSTOM===$_smarty_tpl->tpl_vars['_id']->value){?>
                            <div class="s-settings-schedule-content js-custom-schedule"<?php if ($_smarty_tpl->tpl_vars['_schedule']->value['mode']!==shopCheckoutConfig::SCHEDULE_MODE_CUSTOM){?> style="display: none;" <?php }?>>
                            <div class="field-group">
                                <div class="field">
                                    <div class="name">Часовой пояс</div>
                                    <div class="value">
                                        <select name="data[schedule][timezone]">
                                            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['timezone_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['timezone_id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['timezone_id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['timezone_id']->value==$_smarty_tpl->tpl_vars['_schedule']->value['timezone']){?> selected<?php }?>><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['info']->value,37,'...');?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field-group">
                                <div class="field">
                                    <div class="name s-table-field-name">Время приема и обработки заказов</div>
                                    <div class="value  s-table-field-value js-week-wrapper">
                                        <table class="zebra s-week" data-block-name="week" style="max-width: 600px; border: 1px solid #fff;">
                                            <thead class="header">
                                            <tr>
                                                <th>День недели</th>
                                                <th>Рабочий</th>
                                                <th>Часы работы</th>
                                                <th>Заказы в обработку</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['_day_params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day_params']->_loop = false;
 $_smarty_tpl->tpl_vars['_day_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day_params']->key => $_smarty_tpl->tpl_vars['_day_params']->value){
$_smarty_tpl->tpl_vars['_day_params']->_loop = true;
 $_smarty_tpl->tpl_vars['_day_id']->value = $_smarty_tpl->tpl_vars['_day_params']->key;
?>
                                                <?php $_smarty_tpl->tpl_vars['_work'] = new Smarty_variable($_smarty_tpl->tpl_vars['_day_params']->value['work'], null, 0);?>
                                                <tr class="s-day js-day-wrapper<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> worked<?php }?>">
                                                    <td class="s-day-name"><label for="day_<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label></td>
                                                    <td class="align-center"><input id="day_<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
" class="js-work" type="checkbox" name="data[schedule][week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][work]"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> checked<?php }?>/></td>
                                                    <td class="align-center">
                                                        от
                                                        <input class="s-time js-time" type="text" autocomplete="off" name="data[schedule][week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][start_work]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="00:00"<?php }?> data-placeholder="00:00" />
                                                        до
                                                        <input class="s-time js-time" type="text" autocomplete="off" name="data[schedule][week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][end_work]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="23:59"<?php }?> data-placeholder="23:59" />
                                                    </td>
                                                    <td class="align-center">
                                                        до
                                                        <input class="s-time js-time" type="text" autocomplete="off" name="data[schedule][week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][end_processing]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['end_processing'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="14:00"<?php }?> data-placeholder="14:00" />
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>

                                        <div class="hint" style="margin: 10px 0 0; max-width: 570px;"><?php echo sprintf('Значения полей «%s» и «%s» могут быть использованы для расчета сроков доставки.','Часы работы','Заказы в обработку');?>
</div>
                                        <div class="hint" style="margin: 10px 0 0; max-width: 570px;"><?php echo sprintf('Значения в столбце «%s» обозначают последний час рабочего дня, до которого заказы принимаются для обработки в течение дня. Заказы, оформленные после указанного часа, обрабатываются на следующий день.','Заказы в обработку');?>
</div>
                                    </div>
                                </div>
                            </div>

                            <div class="field-group">
                                <div class="field">
                                    <div class="name">
                                        <label for="processing_time">Количество рабочих часов на обработку заказа</label>
                                    </div>
                                    <div class="value">
                                        <input id="processing_time" class="s-time" type="text" autocomplete="off" name="data[schedule][processing_time]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_schedule']->value['processing_time'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />

                                        <div class="hint" style="margin: 10px 0 5px; max-width: 570px;">Используется для расчета сроков доставки. Указанный период добавляется ко времени оформления заказа и учитывается при переносе обработки заказов на другой день — для заказов, оформленных в конце или после окончания текущего рабочего дня. Дополнительное время комплектации заказа можно указать в настройках отдельных способов доставки.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="field-group">
                                <div class="field">
                                    <div class="name s-table-field-name">Дополнительные рабочие дни</div>
                                    <div class="value s-table-field-value js-extra-workdays-wrapper">
                                        <table class="zebra" style="max-width: 494px;">
                                            <thead class="header"<?php if (empty($_smarty_tpl->tpl_vars['_schedule']->value['extra_workdays'])){?> style="display: none;"<?php }?>>
                                            <tr>
                                                <th>Дата</th>
                                                <th>Часы работы</th>
                                                <th>Заказы в обработку</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody class="js-days-list">
                                            <?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['extra_workdays']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_day']->key;
?>
                                                <?php smarty_template_function_renderScheduleExtraWorkday($_smarty_tpl,array('day'=>$_smarty_tpl->tpl_vars['_day']->value));?>

                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <a href="javascript:void(0);" class="inline-link js-add-day" style="margin-top: 10px; display: inline-block;">
                                            <i class="icon16 add"></i>
                                            <b><i>Добавить день</i></b>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="field-group">
                                <div class="field">
                                    <div class="name s-table-field-name">Дополнительные выходные дни</div>
                                    <div class="value s-table-field-value js-extra-weekends-wrapper">
                                        <table class="zebra" style="max-width: 160px;">
                                            <tbody class="js-days-list">
                                            <?php  $_smarty_tpl->tpl_vars['_date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_date']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['extra_weekends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_date']->key => $_smarty_tpl->tpl_vars['_date']->value){
$_smarty_tpl->tpl_vars['_date']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_date']->key;
?>
                                                <?php smarty_template_function_renderScheduleWeekend($_smarty_tpl,array('date'=>$_smarty_tpl->tpl_vars['_date']->value));?>

                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <a href="javascript:void(0);" class="inline-link js-add-day" style="margin-top: 10px; display: inline-block;">
                                            <i class="icon16 add"></i>
                                            <b><i>Добавить день</i></b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_customer_block')) {
    function smarty_template_function_customer_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['customer_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    
    <div class="field">
        <div class="name">
            <label for="customer_block_name">Название блока</label>
        </div>
        <div class="value input">
            <input id="customer_block_name" type="text" name="data[customer][block_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="customer_offer_login">Текст предложения войти</label>
        </div>
        <div class="value">
            <textarea id="customer_offer_login" name="data[customer][offer_login]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['offer_login'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="customer_offer_logout">Текст предложения выйти из аккаунта</label>
        </div>
        <div class="value">
            <textarea id="customer_offer_logout" name="data[customer][offer_logout]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['offer_logout'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>

    
    <div class="field">
        <div class="name s-table-field-name bold">Типы покупателей</div>
        <div class="value s-table-field-value radio js-customer-type-wrapper">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customer_type_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant js-variant" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <label>
                        <input class="js-customer-type-variant" type="radio" name="data[customer][type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['type']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </label>
                    <div class="s-variant-params block-padded js-variant-params"></div>
                </div>
            <?php } ?>

            <div class="js-person-company-settings">
                <div class="field">
                    <div class="name">
                        <label for="customer_person_mode_name">Название режима для персон</label>
                    </div>
                    <div class="value input">
                        <input type="text" id="customer_person_mode_name" name="data[customer][person_mode_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['person_mode_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        <label for="customer_company_mode_name">Название режима для компаний</label>
                    </div>
                    <div class="value input">
                        <input type="text" id="customer_company_mode_name" name="data[customer][company_mode_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['company_mode_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                    </div>
                </div>
            </div>

            <div class="js-company-settings">
                <div class="field">
                    <div class="name">
                        <label for="customer_company_hint">Текст подсказки для компаний</label>
                    </div>
                    <div class="value">
                        <textarea id="customer_company_hint" name="data[customer][company_hint]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['company_hint'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        <label for="customer_company_terms">Текст условий работы с компаниями</label>
                    </div>
                    <div class="value">
                        <textarea id="customer_company_terms" name="data[customer][company_terms]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['company_terms'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>

            <div class="js-fields-editor" style="margin: 10px 0 20px 0;" data-type="person">
                <div class="heading bold js-contact-type" style="margin: 10px 0;">Персоны:</div>
                <table class="zebra s-sort-table js-sort-table">
                    <tbody>
                        <?php smarty_template_function_renderContactFieldsEditor($_smarty_tpl,array('_fields'=>$_smarty_tpl->tpl_vars['settings']->value['fields_person']));?>

                    </tbody>
                </table>
                <div class="hint" style="margin: 10px 0;">
                    <i class="icon10 edit"></i>
                    <?php echo sprintf(_w('<a href="%s" target="_blank">Edit contact fields</a> <i class="icon10 new-window"></i> in Settings app.'),((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/field/");?>

                </div>
            </div>
            <div class="js-fields-editor" style="margin: 10px 0 20px 0;" data-type="company">
                <div class="heading bold js-contact-type" style="margin: 10px 0;">Компании:</div>
                <table class="zebra s-sort-table js-sort-table">
                    <tbody>
                        <?php smarty_template_function_renderContactFieldsEditor($_smarty_tpl,array('_fields'=>$_smarty_tpl->tpl_vars['settings']->value['fields_company']));?>

                    </tbody>
                </table>
                <div class="hint" style="margin: 10px 0;">
                    <i class="icon10 edit"></i>
                    <?php echo sprintf(_w('<a href="%s" target="_blank">Edit contact fields</a> <i class="icon10 new-window"></i> in Settings app.'),((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/field/");?>

                </div>
            </div>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="shipping_service_agreement">
                Обработка персональных данных
            </label>
        </div>
        <div class="value radio js-customer-service-agreement-wrapper">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customer_service_agreement_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant js-variant" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['default_text'])){?> data-default-text="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['default_text'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <label>
                        <input type="radio" class="js-customer-service-agreement-variant"  name="data[customer][service_agreement]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['service_agreement']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </label>
                    <div class="s-variant-params js-variant-params"></div>
                </div>
            <?php } ?>
            <input type="checkbox" class="js-fake-checkbox" style="vertical-align: top; margin: 0 2px 90px; float: left; " checked="" disabled="">
            <div class="js-customer-service-agreement-edtior">
                <textarea class="js-customer-service-agreement-hint" name="data[customer][service_agreement_hint]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['service_agreement_hint'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <div class="hint">
                    <a href="javascript:void(0)" class="inline-link js-generate-example"><b><i>Восстановить стандартный текст</i></b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!is_callable('smarty_modifier_truncate')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_shipping_block')) {
    function smarty_template_function_shipping_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['shipping_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="s-checkout-field-group field-group">
        <div style="margin-top: 10px;"><?php echo sprintf(_w('<a href="%s" target="_blank">Add and configure shipping methods <i class="icon16 new-window"></i></a>'),'?action=settings#/shipping/');?>
</div>
        
        <div class="field">
            <div class="name">
                <label for="shipping_block_name">Название блока</label>
            </div>
            <div class="value input">
                <input id="shipping_block_name" type="text" name="data[shipping][block_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </div>
        </div>

        
        <div class="field">
            <div class="name">
                <label for="shipping_courier_name">Название для типа доставки «Курьер»</label>
            </div>
            <div class="value input">
                <input id="shipping_courier_name" type="text" name="data[shipping][courier_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['courier_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </div>
        </div>

        
        <div class="field">
            <div class="name">
                <label for="shipping_pickuppoint_name">Название для типа доставки «Самовывоз»</label>
            </div>
            <div class="value input">
                <input id="shipping_pickuppoint_name" type="text" name="data[shipping][pickuppoint_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['pickuppoint_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </div>
        </div>

        
        <div class="field">
            <div class="name">
                <label for="shipping_post_name">Название для типа доставки «Почта»</label>
            </div>
            <div class="value input">
                <input id="shipping_post_name" type="text" name="data[shipping][post_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['post_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </div>
        </div>

        
        <div class="field">
            <div class="name">
                <label for="shipping_plugin_timeout">Время ожидания ответа от плагинов доставки</label>
            </div>
            <div class="value input">
                <input id="shipping_plugin_timeout" class="s-input-seconds" type="text" name="data[shipping][plugin_timeout]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['plugin_timeout'], ENT_QUOTES, 'UTF-8', true);?>
" />
                <label for="shipping_plugin_timeout">сек</label>
                <div class="hint" style="margin-top: 10px;">
                    Варианты доставки плагинов, которые обрабатывают запросы к сторонним сервисам дольше указанного времени, будут недоступны для выбора.
                </div>
            </div>
        </div>

        <div class="field">
            <div class="name">
                <label for="shipping_auto_use_timeout">Время ожидания обновления способов доставки после ввода населенного пункта или индекса</label>
            </div>
            <div class="value input">
                <input id="shipping_auto_use_timeout" class="s-input-seconds" type="text" name="data[shipping][auto_use_timeout]" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['auto_use_timeout'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
                <label for="shipping_auto_use_timeout">сек</label>
                <div class="hint" style="margin-top: 10px;">
                    Подбор вариантов доставки будет запускаться автоматически спустя указанное время, после того как покупатель закончит вводить название населенного пункта или индекса. Рекомендуемое значение для комфортного оформления заказа — не меньше 3 секунд.<br>Если указать 0, то подбор вариантов доставки будет запускаться только после взаимодействия покупателя с другими элементами страницы, например, после щелчка в любом другом месте страницы оформления заказа.
                </div>
            </div>
        </div>

        
        <div class="field">
            <div class="name s-table-field-name bold">Выбор области доставки</div>
            <div class="value s-table-field-value radio js-shipping-mode-wrapper">
                <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_mode_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                    <div class="s-checkout-radio-variant js-variant" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <label>
                            <input class="js-shipping-mode-variant" type="radio" name="data[shipping][mode]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['mode']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                            <span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['description'])){?>
                                <div class="s-description hint" style="margin: 10px 0 20px 18px;"><?php echo $_smarty_tpl->tpl_vars['_variant']->value['description'];?>
</div>
                            <?php }?>
                        </label>
                        <div class="s-variant-params block-padded js-variant-params"<?php if ($_smarty_tpl->tpl_vars['settings']->value['mode']!==$_smarty_tpl->tpl_vars['_id']->value){?> style="display: none;"<?php }?>>
                            
                            <?php if (shopCheckoutConfig::SHIPPING_MODE_TYPE_DEFAULT===$_smarty_tpl->tpl_vars['_id']->value){?>
                                
                                <div class="field">
                                    <div class="name">Ограничить область доставки</div>
                                    <div class="value">
                                        <label>
                                            Страна
                                            <select name="data[shipping][fixed_delivery_area][country]" class="js-fix-delivery-country">
                                                <option value="">Выберите страну</option>
                                                <?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_smarty_tpl->tpl_vars['_country_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
 $_smarty_tpl->tpl_vars['_country_id']->value = $_smarty_tpl->tpl_vars['_country']->key;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['_country_id']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['fixed_delivery_area']['country']===$_smarty_tpl->tpl_vars['_country_id']->value){?> selected<?php }?>><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true),27,'...');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="value">
                                        <label>
                                            Регионы
                                            <select name="data[shipping][fixed_delivery_area][region]" class="js-fix-delivery-region">
                                                <option value="">Выберите регион</option>
                                                <?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['country_iso3'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['fixed_delivery_area']['country']==$_smarty_tpl->tpl_vars['_region']->value['country_iso3']&&$_smarty_tpl->tpl_vars['settings']->value['fixed_delivery_area']['region']===$_smarty_tpl->tpl_vars['_region']->value['code']){?> selected<?php }?>><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true),30,'...');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="value">
                                        <div class="hint" style="margin-top: 10px;">
                                            Выбранные страна и регион будут видны покупателям, но будут недоступны для изменения.<br>
                                            Чтобы скрыть выбранные страну и регион от покупателей, переключитесь на «Минимальный» режим и настройте единственную область доставки, в настройках которой выберите страну и регион.
                                        </div>
                                    </div>
                                    <div class="value">
                                        <label>
                                            Населенный пункт
                                            <input name="data[shipping][fixed_delivery_area][city]" class="js-fix-delivery-city" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['fixed_delivery_area']['city'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                                        </label>
                                    </div>
                                </div>

                            
                            <?php }else{ ?>
                                <div class="hint" style="margin: 10px 0;">Используйте фиксированные <strong>области доставки</strong>, если вы отправляете заказы в ограниченный список населенных пунктов или регионов. Покупатели смогут выбирать названия областей доставки из небольшого списка без необходимости указывать страну и регион.</div>
                                <div class="hint" style="margin: 10px 0;"><strong>Страну нужно выбрать обязательно</strong> в свойствах области доставки. Если регион или название города не указаны, их должны будут указывать покупатели.</div>
                                <div class="hint" style="margin: 10px 0;">Если вы <strong>не настроите области доставки</strong>, покупатели должны будут выбирать страну и регион и вводить название населенного пункта, чтобы увидеть список доступных вариантов доставки.</div>
                                <div class="hint" style="margin: 10px 0;">Если вы настроите <strong>только одну область доставки</strong> — с указанием <strong>страны</strong>, <strong>региона</strong> и <strong>города</strong>, покупатели сразу увидят все варианты доставки, доступные для этой области — без возможности сменить область доставки. Если вы не заполнили регион или населенный пункт в свойствах единственной доступной области доставки, то во время оформления заказа будут видны только эти незаполненные поля.</div>

                                <table class="zebra s-locations-table s-sort-table js-sort-table js-locations-table">
                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['_location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['locations_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_location']->key => $_smarty_tpl->tpl_vars['_location']->value){
$_smarty_tpl->tpl_vars['_location']->_loop = true;
?>
                                        <?php smarty_template_function_renderShippingLocation($_smarty_tpl,array('_location'=>$_smarty_tpl->tpl_vars['_location']->value));?>

                                        <?php }
if (!$_smarty_tpl->tpl_vars['_location']->_loop) {
?>
                                        <?php smarty_template_function_renderShippingNoLocations($_smarty_tpl,array());?>

                                    <?php } ?>
                                    </tbody>
                                </table>
                                <div style="margin-top: 10px;">
                                    <a href="javascript:void(0);" class="inline-link js-add-location">
                                        <i class="icon16 add"></i>
                                        <b><i>Добавить область доставки</i></b>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        
        <div class="field">
            <div class="name s-table-field-name bold">Выбор варианта доставки</div>
            <div class="value s-table-field-value radio js-map-mode-wrapper">
                <?php  $_smarty_tpl->tpl_vars['_map_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_map_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_map_variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_show_pickuppoint_map_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_map_variant']->key => $_smarty_tpl->tpl_vars['_map_variant']->value){
$_smarty_tpl->tpl_vars['_map_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_map_variant_id']->value = $_smarty_tpl->tpl_vars['_map_variant']->key;
?>
                    <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_pickuppoint_map']===$_smarty_tpl->tpl_vars['_map_variant_id']->value){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?>

                    <div class="s-checkout-radio-variant js-variant" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_map_variant_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <label>
                            <input class="s-radio js-radio" type="radio" name="data[shipping][show_pickuppoint_map]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_map_variant_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?> checked<?php }?>>
                            <span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_map_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </label>

                        <?php if (!empty($_smarty_tpl->tpl_vars['_map_variant']->value['description'])){?>
                            <div class="s-variant-params block-padded js-variant-params"<?php if (empty($_smarty_tpl->tpl_vars['_is_active']->value)){?> style="display: none;"<?php }?>>
                                <p class="s-description hint"><?php echo $_smarty_tpl->tpl_vars['_map_variant']->value['description'];?>
</p>
                            </div>
                        <?php }?>
                    </div>
                <?php } ?>

                <div class="s-variant-params block-padded">
                    <div class="hint">При выборе пункта самовывоза по нажатию на адрес будет показана мини-карта только с одним пунктом выдачи заказов.</div>
                </div>
            </div>
        </div>

        
        <div class="field">
            <div class="name s-table-field-name bold">Поля адреса</div>
            <div class="value s-table-field-value js-fields-editor" data-type="address">

                
                <div class="field" style="margin-top: 0;">
                    <div class="name">
                        Почтовый индекс
                    </div>
                    <div class="value">
                        <label>
                            <input type="hidden" name="data[shipping][ask_zip]" value="0" />
                            <input class="js-shipping-ask-zip" type="checkbox" name="data[shipping][ask_zip]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['ask_zip']){?> checked<?php }?> />
                            Запрашивать индекс вместе с названием населенного пункта
                        </label>
                    </div>
                    <div class="clear"></div>
                </div>

                <table class="zebra s-sort-table js-sort-table">
                    <tbody>
                        
                        <tr>
                            <td>
                                <i style="display: inline-block; width: 16px; height: 16px; margin: -0.1em 0.25em 0 0;"></i>
                                <label>
                                    <input type="checkbox" title="Использовать поле" checked disabled>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['system_address_field_names']->value['country'], ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="hint">страна — Текст (input)</i>
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="checkbox" checked disabled>
                                    <i class="small">Обязательное</i>
                                </label>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i style="display: inline-block; width: 16px; height: 16px; margin: -0.1em 0.25em 0 0;"></i>
                                <label>
                                    <input type="checkbox" title="Использовать поле" checked disabled>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['system_address_field_names']->value['region'], ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="hint">регион — Текст (input)</i>
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="checkbox" checked disabled>
                                    <i class="small">Обязательное</i>
                                </label>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i style="display: inline-block; width: 16px; height: 16px; margin: -0.1em 0.25em 0 0;"></i>
                                <label>
                                    <input type="checkbox" title="Использовать поле" checked disabled>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['system_address_field_names']->value['city'], ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="hint">населенный пункт — Текст (input)</i>
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="checkbox" checked disabled>
                                    <i class="small">Обязательное</i>
                                </label>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <?php smarty_template_function_renderContactFieldsEditor($_smarty_tpl,array('_fields'=>$_smarty_tpl->tpl_vars['settings']->value['address_fields'],'_type'=>'address'));?>

                    </tbody>
                </table>
                <div class="hint" style="margin-top: 10px;">
                    <i class="icon10 edit"></i>
                    <?php echo sprintf(_w('<a href="%s" target="_blank">Edit address fields</a> <i class="icon10 new-window"></i> in Settings app.'),((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/field/");?>
<br><br>
                    Поля адреса, запрашиваемые плагинами доставки, отображаются выше добавленных вами дополнительных полей.
                    <br><br>
                    Отключите поля адреса, которые не нужны для всех вариантов доставки. Плагины доставки добавят дополнительные поля адреса, если это необходимо для их работы. Размер полей, добавленных плагинами, зависит от выбранных значений свойства «Ширина поля».
                </div>
            </div>
        </div>

        
        <div class="field">
            <div class="name">
                <label for="shipping_service_agreement">
                    Обработка персональных данных
                </label>
            </div>
            <div class="value js-shipping-service-agreement-wrapper">
                <label>
                    <input type="hidden" name="data[shipping][service_agreement]" value="0" />
                    <input class="js-shipping-service-agreement" id="shipping_service_agreement" type="checkbox" name="data[shipping][service_agreement]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['service_agreement']){?> checked<?php }?> />
                    Показывать уведомление
                </label>
                <textarea class="block-padded js-shipping-service-agreement-hint"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['service_agreement']){?> style="display: none;"<?php }?> name="data[shipping][service_agreement_hint]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['service_agreement_hint'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_payment_block')) {
    function smarty_template_function_payment_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['payment_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    <div style="margin-top: 10px;"><?php echo sprintf(_w('<a href="%s" target="_blank">Add and configure payment methods <i class="icon16 new-window"></i></a>'),'?action=settings#/payment/');?>
</div>
    
    <div class="field">
        <div class="name">
            <label for="payment_block_name">Название блока</label>
        </div>
        <div class="value input">
            <input id="payment_block_name" type="text" name="data[payment][block_name]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['block_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_confirmation_block')) {
    function smarty_template_function_confirmation_block($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['confirmation_block']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="s-checkout-field-group field-group">
    
    <div class="field">
        <div class="name">
            <label for="confirmation_auto_submit">Автоматический переход к оплате</label>
        </div>
        <div class="value">
            <label>
                <input type="hidden" name="data[confirmation][auto_submit]" value="0" />
                <input id="confirmation_auto_submit" type="checkbox" name="data[confirmation][auto_submit]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['auto_submit']){?> checked<?php }?> />
                Перенаправлять покупателя на страницу оплаты
            </label>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="confirmation_order_comment">Комментарий к заказу</label>
        </div>
        <div class="value">
            <label>
                <input type="hidden" name="data[confirmation][order_comment]" value="0" />
                <input id="confirmation_order_comment" type="checkbox" name="data[confirmation][order_comment]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['order_comment']){?> checked<?php }?> />
                Разрешить покупателям оставлять комментарий к заказу
            </label>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="confirmation_terms">Условия предоставления услуг</label>
            <div class="hint">HTML</div>
        </div>
        <div class="value js-confirmation-terms-wrapper">
            <label>
                <input type="hidden" name="data[confirmation][terms]" value="0" />
                <input id="confirmation_terms" class="js-confirmation-terms" type="checkbox" name="data[confirmation][terms]"<?php if ($_smarty_tpl->tpl_vars['settings']->value['terms']){?> checked<?php }?> />
                Показывать
            </label>
            <div class="js-confirmation-terms-text-wrapper"<?php if (!$_smarty_tpl->tpl_vars['settings']->value['terms']){?> style="display: none;"<?php }?>>
                <div>
                    <textarea class="block-padded js-confirmation-terms-text" name="data[confirmation][terms_text]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['terms_text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>
                <div>
                    <a href="javascript:void(0);" class="js-confirmation-terms-generate hint inline-link block-padded"><b><i>Сгенерировать текст примера</i></b></a>
                </div>
                <div class="hint block-padded">
                    Введите текст условий предоставления услуг, возврата денежных средств или иной юридической информацией, с которыми покупатели должны ознакомиться и согласиться во время оформления заказа.
                    Если это поле заполнено, то при подтверждении заказа покупатели увидят ссылку на текст условий и флажок, чтобы подтвердить свое согласие с ними.
                </div>
            </div>
        </div>
    </div>

    
    <div class="field s-checkout-auth-with-code">
        <div class="name">Обновление профилей покупателей и автоматическая регистрация</div>
        <div class="value radio js-order-without-auth-wrapper">
            <?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['confirmation_order_without_auth_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_variant']->key;
?>
                <div class="s-checkout-radio-variant js-variant" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <label>
                        <input class="js-order-without-auth-variant" type="radio" name="data[confirmation][order_without_auth]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['order_without_auth']===$_smarty_tpl->tpl_vars['_id']->value){?> checked<?php }?> />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (isset($_smarty_tpl->tpl_vars['_variant']->value['description'])){?>
                            <div class="hint block-padded"><?php echo $_smarty_tpl->tpl_vars['_variant']->value['description'];?>
</div>
                        <?php }?>
                    </label>
                    <div class="s-variant-params js-variant-params"></div>
                </div>
            <?php } ?>

            <p class="hint"><?php echo sprintf('<a href="%s" target="_blank">Как выбрать подходящее значение для этой настройки</a>.','https://support.webasyst.ru/shop-script/29292/in-cart-checkout/#customer-profiles-updating');?>
 <a href="https://support.webasyst.ru/shop-script/29292/in-cart-checkout/#customer-profiles-updating" target="_blank"><i class="icon16 new-window"></i></a></p>

            
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="confirmation_recode_timeout">Повторно запросить код можно через</label>
        </div>
        <div class="value input">
            <input id="confirmation_recode_timeout" class="s-input-seconds" type="text" name="data[confirmation][recode_timeout]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['recode_timeout'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <label for="confirmation_recode_timeout">сек</label>
            <div class="hint" style="margin-top: 10px;">
                По истечении этого времени покупатель сможет повторно запросить код подтверждения по email или SMS при авторизации в момент подтверждения заказа.
            </div>
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="confirmation_thankyou_header">Заголовок страницы «Спасибо»</label>
        </div>
        <div class="value">
            <input id="confirmation_thankyou_header" type="text" name="data[confirmation][thankyou_header]" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['thankyou_header'], ENT_QUOTES, 'UTF-8', true);?>
" />
        </div>
    </div>

    
    <div class="field">
        <div class="name">
            <label for="confirmation_thankyou_content">Текст страницы «Спасибо»</label>
            <div class="hint">HTML</div>
        </div>
        <div class="value">
            <textarea id="confirmation_thankyou_content" name="data[confirmation][thankyou_content]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['thankyou_content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php }} ?>