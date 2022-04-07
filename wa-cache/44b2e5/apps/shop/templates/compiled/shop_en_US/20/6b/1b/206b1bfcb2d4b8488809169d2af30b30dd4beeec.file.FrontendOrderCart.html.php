<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/FrontendOrderCart.html" */ ?>
<?php /*%%SmartyHeaderCode:137293749162468a378e6021-74067091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206b1bfcb2d4b8488809169d2af30b30dd4beeec' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/FrontendOrderCart.html',
      1 => 1646833741,
      2 => 'file',
    ),
    '31c143e3410956ad9b47ba80d2114f74561bd647' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/cart/dialog/product.delete.html',
      1 => 1576582800,
      2 => 'file',
    ),
    '30e73bc2bb1ca9208d992574c62e61adaa7b33f3' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/cart/dialog/clear.html',
      1 => 1576582800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137293749162468a378e6021-74067091',
  'function' => 
  array (
    '_renderError' => 
    array (
      'parameter' => 
      array (
        '_text' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'config' => 0,
    '_text' => 0,
    'options' => 0,
    '_use_adaptive_styles' => 0,
    'wa' => 0,
    '_cart_classes' => 0,
    'cart' => 0,
    'event_hook' => 0,
    '_' => 0,
    '_item' => 0,
    'formatted_units' => 0,
    '_active_sku' => 0,
    'wa_app_static_url' => 0,
    '_stock_count' => 0,
    '_min_max' => 0,
    '_is_out_of_stock' => 0,
    '_is_more_than_limit' => 0,
    '_is_product_disabled' => 0,
    '_product_classes' => 0,
    '_product_front_uri' => 0,
    '_product_image_uri' => 0,
    '_config' => 0,
    'wa_url' => 0,
    '_locales' => 0,
    '_service' => 0,
    '_is_active' => 0,
    '_service_id' => 0,
    'variant_id' => 0,
    'v' => 0,
    '_stock_unit' => 0,
    '_is_limit' => 0,
    '_errors' => 0,
    '_error' => 0,
    '_show_fractional' => 0,
    '_currency' => 0,
    '_base_price' => 0,
    '_base_unit' => 0,
    '_stock_price' => 0,
    'fractional_config' => 0,
    '_max' => 0,
    '_full_price' => 0,
    '_compare_price' => 0,
    'coupon_code' => 0,
    'coupon_discount' => 0,
    'coupon_free_shipping' => 0,
    '_is_bad_code' => 0,
    'affiliate' => 0,
    '_total_discount' => 0,
    '_round_discounts' => 0,
    '_discout_html' => 0,
    '_partial_discount' => 0,
    '_show_weight' => 0,
    'currency_info' => 0,
    '_delete_product_dialog' => 0,
    '_clear_cart_dialog' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a37c20d33_84182797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a37c20d33_84182797')) {function content_62468a37c20d33_84182797($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['cart'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array("product_delete"=>_w('Delete product from the cart'),"product_disabled"=>_w('This item is not available'),"quantity_empty"=>_w("Out of stock"),"quantity_limit"=>_w("No more items in stock"),"quantity_delete"=>_w('Delete product from the cart'),"quantity_decrease"=>_w('Reduce quantity'),"quantity_increase"=>_w('Increase quantity'),"quantity_stock_error"=>_w("The quantity in your shopping cart is greater than that available in stock. Please reduce the quantity or delete this product from the cart.")), null, 0);?>

<?php if (!function_exists('smarty_template_function__renderError')) {
    function smarty_template_function__renderError($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderError']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="wa-error-text js-error-text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_text']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->tpl_vars['_use_adaptive_styles'] = new Smarty_variable(true, null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['options']->value)){?>
    <?php if (isset($_smarty_tpl->tpl_vars['options']->value["adaptive"])&&(empty($_smarty_tpl->tpl_vars['options']->value["adaptive"])||$_smarty_tpl->tpl_vars['options']->value["adaptive"]==="false")){?>
        <?php $_smarty_tpl->tpl_vars['_use_adaptive_styles'] = new Smarty_variable(false, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['_cart_classes'] = new Smarty_variable(array(), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['_use_adaptive_styles']->value)){?>
    <?php $_smarty_tpl->createLocalArrayVariable('_cart_classes', null, 0);
$_smarty_tpl->tpl_vars['_cart_classes']->value[] = "with-adaptive";?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['_currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(), null, 0);?>

<div class="wa-order-cart-wrapper is-not-ready <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_cart_classes']->value," ");?>
" id="wa-order-cart-wrapper">
    <script>
        ( function($) {
            $("#wa-order-cart-wrapper").data("ready", $.Deferred());
        })(jQuery);
    </script>

    <?php if (empty($_smarty_tpl->tpl_vars['cart']->value['count'])){?>
        <div class="wa-cart-body">
            <p class="align-center" style="margin: 100px 0;">Your shopping cart is empty.</p>
        </div>

    <?php }else{ ?>
        <div class="wa-cart-body">

            <div class="wa-cart-loader">
                <p>Generating a shopping cart from selected items...</p>
            </div>

            <div class="wa-cart-content js-invisible-content" style="display: none;">
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['_']->value['before_items'])){?>
                    <div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value['before_items'];?>
</div>
                <?php }?><?php } ?>

                
                <?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['items'])){?>
                    <div class="wa-products">
                        <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
?>
                            
                            <?php $_smarty_tpl->createLocalArrayVariable('_item', null, 0);
$_smarty_tpl->tpl_vars['_item']->value['product'] = shopFrac::inheritSkuFieldsFromProduct($_smarty_tpl->tpl_vars['_item']->value['product']);?>
                            <?php $_smarty_tpl->tpl_vars['_active_sku'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_item']->value['product']['skus'][$_smarty_tpl->tpl_vars['_item']->value['product']['sku_id']])===null||$tmp==='' ? null : $tmp), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_show_fractional'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]])&&!empty($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["base_unit_id"]])&&($_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]!==$_smarty_tpl->tpl_vars['_item']->value['product']["base_unit_id"])&&!empty($_smarty_tpl->tpl_vars['_active_sku']->value["stock_base_ratio"]), null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['_product_front_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['_item']->value['product']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_product_image_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['_item']->value['product'],'200',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_app_static_url']->value)."img/image-dummy.png")), null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['_stock_count'] = new Smarty_variable(null, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_is_in_stock'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_is_out_of_stock'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_is_more_than_limit'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_is_limit'] = new Smarty_variable(false, null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['_is_product_disabled'] = new Smarty_variable(false, null, 0);?>
                            <?php if (empty($_smarty_tpl->tpl_vars['_item']->value['sku_available'])){?>
                                <?php $_smarty_tpl->tpl_vars['_is_product_disabled'] = new Smarty_variable(true, null, 0);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['_item']->value['stock_count']===null){?>
                                <?php $_smarty_tpl->tpl_vars['_is_in_stock'] = new Smarty_variable(true, null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['_stock_count'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['_item']->value['stock_count']), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_min_max'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['_item']->value["order_count_min"])&&($_smarty_tpl->tpl_vars['_item']->value["order_count_min"]>$_smarty_tpl->tpl_vars['_stock_count']->value)), null, 0);?>
                                <?php if (($_smarty_tpl->tpl_vars['_stock_count']->value===0||$_smarty_tpl->tpl_vars['_stock_count']->value===0.0||$_smarty_tpl->tpl_vars['_min_max']->value)){?>
                                    <?php $_smarty_tpl->tpl_vars['_is_out_of_stock'] = new Smarty_variable(true, null, 0);?>
                                <?php }elseif($_smarty_tpl->tpl_vars['_stock_count']->value>0&&$_smarty_tpl->tpl_vars['_item']->value['quantity']<=$_smarty_tpl->tpl_vars['_stock_count']->value){?>
                                    <?php $_smarty_tpl->tpl_vars['_is_in_stock'] = new Smarty_variable(true, null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['_item']->value['quantity']==$_smarty_tpl->tpl_vars['_stock_count']->value){?>
                                        <?php $_smarty_tpl->tpl_vars['_is_limit'] = new Smarty_variable(true, null, 0);?>
                                    <?php }?>
                                <?php }elseif($_smarty_tpl->tpl_vars['_item']->value['quantity']>$_smarty_tpl->tpl_vars['_stock_count']->value){?>
                                    <?php $_smarty_tpl->tpl_vars['_is_more_than_limit'] = new Smarty_variable(true, null, 0);?>
                                <?php }?>
                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars['_product_classes'] = new Smarty_variable(array(), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['_is_out_of_stock']->value)){?>
                                <?php $_smarty_tpl->createLocalArrayVariable('_product_classes', null, 0);
$_smarty_tpl->tpl_vars['_product_classes']->value[] = "is-out-of-stock";?>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['_is_more_than_limit']->value)){?>
                                <?php $_smarty_tpl->createLocalArrayVariable('_product_classes', null, 0);
$_smarty_tpl->tpl_vars['_product_classes']->value[] = "is-more-than-limit";?>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)){?>
                                <?php $_smarty_tpl->createLocalArrayVariable('_product_classes', null, 0);
$_smarty_tpl->tpl_vars['_product_classes']->value[] = "is-disabled";?>
                            <?php }?>

                            <div class="wa-product <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_product_classes']->value," ");?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['product_id'], ENT_QUOTES, 'UTF-8', true);?>
" data-sku-id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_item']->value['sku_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">

                                <div class="wa-product-body">
                                    
                                    <div class="wa-column-image">
                                        <div class="wa-image-section">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_product_front_uri']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
                                                <?php echo $_smarty_tpl->tpl_vars['_product_image_uri']->value;?>

                                            </a>
                                        </div>
                                    </div>

                                    
                                    <div class="wa-column-details">
                                        <div class="wa-details-section">
                                            <div class="wa-details">
                                                <a class="wa-name" href="<?php echo $_smarty_tpl->tpl_vars['_product_front_uri']->value;?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                <?php if (isset($_smarty_tpl->tpl_vars['_item']->value['sku_name'])&&strlen($_smarty_tpl->tpl_vars['_item']->value['sku_name'])&&$_smarty_tpl->tpl_vars['_item']->value['sku_name']!=$_smarty_tpl->tpl_vars['_item']->value['product']['name']){?>
                                                    <span class="wa-sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['_config']->value["show_weight"])&&!empty($_smarty_tpl->tpl_vars['_item']->value['weight_html'])){?>
                                                    <span class="wa-weight" title="<?php echo htmlspecialchars(_w('One item’s weight'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['_item']->value['weight_html'];?>
</span>
                                                <?php }?>

                                                <span class="wa-actions">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['_config']->value['change_sku'])&&$_smarty_tpl->tpl_vars['_item']->value['product']['sku_count']>1){?>
                                                        <span class="wa-action js-edit-product">
                                                            <i class="wa-icon edit size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#edit"></use></svg></i> Select another SKU
                                                        </span>
                                                    <?php }?>
                                                    <span class="wa-action js-delete-product">
                                                        <span class="wa-tooltip is-inline bottom" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locales']->value["product_delete"], ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <i class="wa-icon delete size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#trash"></use></svg></i> Delete
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['services'])){?>
                                                <div class="wa-services">
                                                    <?php  $_smarty_tpl->tpl_vars['_service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_service']->_loop = false;
 $_smarty_tpl->tpl_vars['_service_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_item']->value['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_service']->key => $_smarty_tpl->tpl_vars['_service']->value){
$_smarty_tpl->tpl_vars['_service']->_loop = true;
 $_smarty_tpl->tpl_vars['_service_id']->value = $_smarty_tpl->tpl_vars['_service']->key;
?>
                                                        <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_service']->value['id']), null, 0);?>
                                                        <div class="wa-service <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>is-active<?php }?>" data-id="<?php if (!empty($_smarty_tpl->tpl_vars['_service']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['_service']->value['id'];?>
<?php }?>" data-service-id="<?php echo $_smarty_tpl->tpl_vars['_service_id']->value;?>
" data-enabled="<?php if (!empty($_smarty_tpl->tpl_vars['_service']->value['id'])){?>1<?php }else{ ?>0<?php }?>">
                                                            <label class="wa-label">
                                                                <span class="wa-field">
                                                                    <input class="js-service-field" <?php if (!empty($_smarty_tpl->tpl_vars['_service']->value['id'])){?>checked<?php }?> type="checkbox" name="services[<?php echo $_smarty_tpl->tpl_vars['_item']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['_service_id']->value;?>
">
                                                                </span>

                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>


                                                                <?php if ($_smarty_tpl->tpl_vars['_service']->value['price']&&!isset($_smarty_tpl->tpl_vars['_service']->value['variants'])){?>
                                                                    (<span>+<?php echo shop_currency($_smarty_tpl->tpl_vars['_service']->value['price'],array('in_currency'=>$_smarty_tpl->tpl_vars['_service']->value['currency'],'format'=>'h'));?>
</span>)
                                                                <?php }?>
                                                            </label>

                                                            <?php if (isset($_smarty_tpl->tpl_vars['_service']->value['variants'])){?>
                                                                <div class="wa-variant">
                                                                    <select class="js-variant-field" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['_item']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['_service_id']->value;?>
]" <?php if (empty($_smarty_tpl->tpl_vars['_service']->value['id'])){?>disabled<?php }?>>
                                                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_service']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                                            <option <?php if ($_smarty_tpl->tpl_vars['_service']->value['variant_id']==$_smarty_tpl->tpl_vars['variant_id']->value){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
">
                                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                                                (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],array('in_currency'=>$_smarty_tpl->tpl_vars['_service']->value['currency'],'extended_format'=>'%t{s}'));?>
)
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            <?php }else{ ?>
                                                                <input class="js-variant-field" type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['_item']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['_service_id']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['_service']->value['variant_id'];?>
">
                                                            <?php }?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    
                                    <div class="wa-column-quantity">
                                        

                                        <div class="wa-quantity-cart-section js-quantity-cart-section <?php if (!empty($_smarty_tpl->tpl_vars['_is_out_of_stock']->value)||!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)){?>disabled<?php }?>">
                                            <div class="wa-section-body">
                                                <div class="wa-button-wrapper">
                                                    <button class="wa-button s-minus-button transparent js-decrease" type="button" <?php if (!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)){?>disabled<?php }?>>
                                                        <span class="wa-icon-wrapper"><i class="wa-icon minus size-12"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#minus"></use></svg></i></span>
                                                        <span class="wa-description js-min-description" style="display: none;"></span>
                                                    </button>
                                                </div>
                                                <label class="wa-field-wrapper">
                                                    <input class="wa-field js-product-quantity <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['error'])){?>wa-error-field<?php }?>" name="quantity[<?php echo $_smarty_tpl->tpl_vars['_item']->value['id'];?>
]" value="<?php echo floatval($_smarty_tpl->tpl_vars['_item']->value['quantity']);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_out_of_stock']->value)||!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)){?>disabled<?php }?>>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['formatted_units']->value)&&!empty($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]])){?>
                                                        <?php $_smarty_tpl->tpl_vars['_stock_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]], null, 0);?>
                                                        <span class="wa-unit top"><?php echo $_smarty_tpl->tpl_vars['_stock_unit']->value["name_short"];?>
</span>
                                                    <?php }?>
                                                </label>
                                                <div class="wa-button-wrapper">
                                                    <button class="wa-button s-plus-button transparent js-increase" type="button" <?php if (!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)||!empty($_smarty_tpl->tpl_vars['_is_limit']->value)){?>disabled<?php }?>>
                                                        <span class="wa-icon-wrapper"><i class="wa-icon minus size-12"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#plus"></use></svg></i></span>
                                                        <span class="wa-description js-max-description" style="display: none;"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="wa-section-footer">
                                                <?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['_is_product_disabled']->value)){?>
                                                    <?php $_smarty_tpl->createLocalArrayVariable('_errors', null, 0);
$_smarty_tpl->tpl_vars['_errors']->value[] = $_smarty_tpl->tpl_vars['_locales']->value["product_disabled"];?>
                                                <?php }elseif(!empty($_smarty_tpl->tpl_vars['_is_out_of_stock']->value)){?>
                                                    <?php $_smarty_tpl->createLocalArrayVariable('_errors', null, 0);
$_smarty_tpl->tpl_vars['_errors']->value[] = "Out of stock";?>
                                                <?php }elseif(!empty($_smarty_tpl->tpl_vars['_is_more_than_limit']->value)){?>
                                                    <?php $_smarty_tpl->createLocalArrayVariable('_errors', null, 0);
$_smarty_tpl->tpl_vars['_errors']->value[] = sprintf($_smarty_tpl->tpl_vars['_locales']->value["quantity_stock_error"],$_smarty_tpl->tpl_vars['_item']->value['stock_count']);?>
                                                <?php }?>

                                                <?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?>
                                                    <?php smarty_template_function__renderError($_smarty_tpl,array('_text'=>$_smarty_tpl->tpl_vars['_error']->value));?>

                                                <?php } ?>

                                                <?php $_smarty_tpl->tpl_vars['_min'] = new Smarty_variable(floatval((($tmp = @$_smarty_tpl->tpl_vars['_active_sku']->value["order_count_min"])===null||$tmp==='' ? 1 : $tmp)), null, 0);?>

                                                <div class="wa-product-fractional-prices" style="<?php if (empty($_smarty_tpl->tpl_vars['_item']->value['quantity'])){?>display: none;<?php }?>">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['_show_fractional']->value)){?>
                                                        <?php $_smarty_tpl->tpl_vars['_stock_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]], null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['_base_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["base_unit_id"]], null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['_stock_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->formatPrice($_smarty_tpl->tpl_vars['_active_sku']->value["price"],array("unit"=>$_smarty_tpl->tpl_vars['_stock_unit']->value["name_short"],"currency"=>$_smarty_tpl->tpl_vars['_currency']->value)), null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['_base_price'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_active_sku']->value["price"]/$_smarty_tpl->tpl_vars['_active_sku']->value["stock_base_ratio"]), null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['_base_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->formatPrice($_smarty_tpl->tpl_vars['_base_price']->value,array("unit"=>$_smarty_tpl->tpl_vars['_base_unit']->value["name_short"],"currency"=>$_smarty_tpl->tpl_vars['_currency']->value)), null, 0);?>

                                                        <div class="wa-product-ratio-wrapper" data-ratio="<?php echo shop_number_format($_smarty_tpl->tpl_vars['_active_sku']->value["stock_base_ratio"]);?>
">
                                                            <span class="js-stock-value"><?php echo shop_number_format($_smarty_tpl->tpl_vars['_item']->value['quantity']);?>
</span>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['_stock_unit']->value["name_short"];?>
</span>
                                                            <span>&nbsp;=&nbsp;</span>
                                                            <span class="js-base-value"><?php echo shop_number_format($_smarty_tpl->tpl_vars['_item']->value['quantity']*$_smarty_tpl->tpl_vars['_active_sku']->value["stock_base_ratio"]);?>
</span>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['_base_unit']->value["name_short"];?>
</span>
                                                        </div>
                                                        <div class="wa-product-price"><?php echo $_smarty_tpl->tpl_vars['_stock_price']->value;?>
</div>
                                                        <div class="wa-product-base-price"><?php echo $_smarty_tpl->tpl_vars['_base_price']->value;?>
</div>

                                                    <?php }elseif($_smarty_tpl->tpl_vars['fractional_config']->value["stock_units_enabled"]&&!empty($_smarty_tpl->tpl_vars['formatted_units']->value)&&!empty($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]])){?>
                                                        <?php $_smarty_tpl->tpl_vars['_stock_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['formatted_units']->value[$_smarty_tpl->tpl_vars['_item']->value['product']["stock_unit_id"]], null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['_stock_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->formatPrice($_smarty_tpl->tpl_vars['_active_sku']->value["price"],array("unit"=>$_smarty_tpl->tpl_vars['_stock_unit']->value["name_short"],"currency"=>$_smarty_tpl->tpl_vars['_currency']->value)), null, 0);?>
                                                        <div class="wa-product-price"><?php echo $_smarty_tpl->tpl_vars['_stock_price']->value;?>
</div>
                                                    <?php }else{ ?>
                                                        <div class="wa-product-price">
                                                            <?php echo shop_currency($_smarty_tpl->tpl_vars['_item']->value['price'],array('in_currency'=>true,'format'=>'h'));?>
/item
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>

                                            <script>
                                                ( function($) {
                                                    var promise = $("#wa-order-cart-wrapper").data("ready");
                                                    promise.done( function(controller) {
                                                        var $wrapper = $(".wa-product[data-id=\"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
\"]");
                                                        if ($wrapper.length) {

                                                            <?php $_smarty_tpl->tpl_vars['_max'] = new Smarty_variable(0, null, 0);?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&$_smarty_tpl->tpl_vars['_active_sku']->value['count']>0){?><?php $_smarty_tpl->tpl_vars['_max'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_sku']->value['count'], null, 0);?><?php }?>

                                                            controller.initQuantity({
                                                                $wrapper: $wrapper,
                                                                denominator: <?php echo json_encode(floatval((($tmp = @$_smarty_tpl->tpl_vars['_item']->value['product']["order_multiplicity_factor"])===null||$tmp==='' ? 1 : $tmp)));?>
,
                                                                step: <?php echo json_encode(floatval((($tmp = @$_smarty_tpl->tpl_vars['_active_sku']->value["order_count_step"])===null||$tmp==='' ? 1 : $tmp)));?>
,
                                                                min: <?php echo json_encode(floatval((($tmp = @$_smarty_tpl->tpl_vars['_active_sku']->value["order_count_min"])===null||$tmp==='' ? 1 : $tmp)));?>
,
                                                                max: <?php echo json_encode(floatval($_smarty_tpl->tpl_vars['_max']->value));?>
,
                                                                locales: {
                                                                    "min": <?php echo json_encode(_w("min. %s"));?>
,
                                                                    "max": <?php echo json_encode(_w("max. %s"));?>

                                                                }
                                                            });
                                                        } else {
                                                            console.error("ERROR: Field not found");
                                                        }
                                                    });
                                                })(jQuery);
                                            </script>
                                        </div>

                                        <div class="wa-quantity-actions">
                                            <div class="wa-actions">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['_config']->value['change_sku'])&&$_smarty_tpl->tpl_vars['_item']->value['product']['sku_count']>1){?>
                                                    <div class="wa-action js-edit-product">
                                                        <i class="wa-icon edit size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#edit"></use></svg></i>
                                                    </div>
                                                <?php }?>
                                                <div class="wa-action js-delete-product">
                                                    <div class="wa-tooltip is-inline bottom" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locales']->value["product_delete"], ENT_QUOTES, 'UTF-8', true);?>
">
                                                        <i class="wa-icon delete size-11"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#trash"></use></svg></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="wa-column-price">
                                        <div class="wa-price-section">
                                            <div class="wa-price-total js-product-full-price">
                                                <?php $_smarty_tpl->tpl_vars['_full_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['_item']->value['full_price'], null, 0);?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['discount'])){?>
                                                    <?php $_smarty_tpl->tpl_vars['_full_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['_full_price']->value-$_smarty_tpl->tpl_vars['_item']->value['discount'], null, 0);?>
                                                <?php }?>

                                                <?php echo shop_currency($_smarty_tpl->tpl_vars['_full_price']->value,array('in_currency'=>true,'format'=>'h'));?>

                                            </div>

                                            <?php $_smarty_tpl->tpl_vars['_compare_price'] = new Smarty_variable(null, null, 0);?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['discount'])){?>
                                                <?php $_smarty_tpl->tpl_vars['_compare_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['_item']->value['full_price'], null, 0);?>
                                            <?php }?>

                                            <div class="wa-price-compare js-product-compare" <?php if (empty($_smarty_tpl->tpl_vars['_compare_price']->value)){?>style="display: none;"<?php }?>>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['_compare_price']->value)){?>
                                                    <?php echo shop_currency($_smarty_tpl->tpl_vars['_compare_price']->value,array('in_currency'=>true,'format'=>'h'));?>

                                                <?php }else{ ?>0<?php }?>
                                            </div>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['_config']->value['discount_item']===shopCheckoutConfig::DISCOUNT_ITEM_TYPE_AMOUNT){?>
                                                <div class="wa-price-discount js-product-discount" <?php if (empty($_smarty_tpl->tpl_vars['_item']->value['discount'])){?>style="display: none;"<?php }?>>
                                                    Discount
                                                    <span class="wa-discount js-discount"><?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['discount'])){?>
                                                        <?php echo shop_currency($_smarty_tpl->tpl_vars['_item']->value['discount'],array('in_currency'=>true,'format'=>'h'));?>

                                                    <?php }else{ ?>0<?php }?></span>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php if (isset($_smarty_tpl->tpl_vars['_item']->value['cart_custom_html'])){?>
                                    <div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_item']->value['cart_custom_html'];?>
</div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>

                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['_']->value['after_items'])){?>
                    <div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value['after_items'];?>
</div>
                <?php }?><?php } ?>

                <div class="wa-cart-details">
                    <div class="wa-column-content">

                        
                        <?php if (isset($_smarty_tpl->tpl_vars['coupon_code']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_is_bad_code'] = new Smarty_variable(false, null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['coupon_code']->value)){?>
                                <?php if (empty($_smarty_tpl->tpl_vars['coupon_discount']->value)&&empty($_smarty_tpl->tpl_vars['coupon_free_shipping']->value)){?>
                                    <?php $_smarty_tpl->tpl_vars['_is_bad_code'] = new Smarty_variable(true, null, 0);?>
                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?>
                                <?php }?>
                            <?php }?>

                            <div class="wa-coupon-section <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>is-active<?php }?>" data-enabled="<?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>1<?php }else{ ?>0<?php }?>"><div class="wa-inactive-state"><input class="wa-input js-coupon-code" type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon_code']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Coupon code" autocomplete="false"><button class="wa-button gray js-use-coupon" type="button">Activate</button></div><div class="wa-active-state"><span class="wa-text"><i class="wa-icon yes size-13"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#yes"></use></svg></i>&nbsp;Coupon applied</span><button class="wa-button transparent js-cancel-coupon" type="button">Undo</button></div><?php if ($_smarty_tpl->tpl_vars['_is_bad_code']->value){?><?php smarty_template_function__renderError($_smarty_tpl,array('_text'=>_w("Invalid coupon code")));?>
<?php }?></div>
                        <?php }?>

                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['affiliate']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['affiliate']->value['use_affiliate'])){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?>

                            <div class="wa-affiliate-section <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>is-active<?php }?>" data-enabled="<?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>1<?php }else{ ?>0<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['affiliate']->value['affiliate_bonus']>0){?>
                                    <div class="wa-bonus-details"><div class="wa-inactive-state"><div class="wa-details"><?php ob_start();?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['affiliate']->value['affiliate_discount'],true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf(_w('You have %s bonus point! You can use it to get an additional discount of up to %s.','You have %s bonus points! You can use some of them to get an additional discount of up to %s.',$_smarty_tpl->tpl_vars['affiliate']->value['affiliate_bonus'],false),"<strong>".((string)$_smarty_tpl->tpl_vars['affiliate']->value['affiliate_bonus'])."</strong>","<strong id=\"wa-affiliate-order-discount\">".$_tmp1."</strong>");?>
</div><button class="wa-button gray js-use-bonus" type="button">Use bonus</button></div><div class="wa-active-state"><span class="wa-text"><i class="wa-icon yes size-13"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#yes"></use></svg></i>&nbsp;Bonus used</span><button class="wa-button transparent js-cancel-bonus" type="button">Undo</button></div></div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['affiliate']->value['add_affiliate_bonus'])){?>
                                    <div class="wa-order-bonus" id="wa-affiliate-order-bonus"><?php echo sprintf("This order will add <strong>+%s bonuses</strong> to  your account, which you will be able to spend on getting additional discounts later.",$_smarty_tpl->tpl_vars['affiliate']->value['add_affiliate_bonus']);?>
</div>
                                <?php }?>
                            </div>
                        <?php }?>

                    </div>
                    <div class="wa-column-price">

                        <div class="wa-price-section">
                            <?php if ($_smarty_tpl->tpl_vars['_config']->value['discount_general']===shopCheckoutConfig::DISCOUNT_GENERAL_TYPE_AMOUNT){?>

                                
                                <?php $_smarty_tpl->tpl_vars['_total_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['discount'], null, 0);?>
                                <div class="wa-price-discount" id="wa-cart-full-discount" style="<?php if (empty($_smarty_tpl->tpl_vars['_total_discount']->value)){?>display: none;<?php }?>">
                                    Total discount

                                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_discout_html", null); ob_start(); ?>
                                        <span class="wa-discount js-price"><?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['discount'])){?><?php echo shop_currency($_smarty_tpl->tpl_vars['_total_discount']->value,array('in_currency'=>true,'format'=>'h'));?>
<?php }else{ ?>0<?php }?></span>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                    <?php $_smarty_tpl->tpl_vars['_round_discounts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('round_discounts'), null, 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_round_discounts']->value)){?>
                                        <span class="wa-tooltip is-inline top with-underline" data-title="Rounded discount value"><?php echo $_smarty_tpl->tpl_vars['_discout_html']->value;?>
</span>
                                    <?php }else{ ?>
                                        <?php echo $_smarty_tpl->tpl_vars['_discout_html']->value;?>

                                    <?php }?>
                                </div>

                            <?php }elseif($_smarty_tpl->tpl_vars['_config']->value['discount_general']===shopCheckoutConfig::DISCOUNT_GENERAL_TYPE_SEPARATION){?>
                                
                                <div class="wa-price-subtotal" id="wa-cart-subtotal">
                                    Subtotal
                                    <span class="wa-price js-price">
                                        <?php echo shop_currency($_smarty_tpl->tpl_vars['cart']->value['subtotal'],array('in_currency'=>true,'format'=>'h'));?>

                                    </span>
                                </div>

                                
                                <?php $_smarty_tpl->tpl_vars['_partial_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['discount'], null, 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['coupon_discount']->value)){?>
                                    <?php $_smarty_tpl->tpl_vars['_partial_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['_partial_discount']->value-$_smarty_tpl->tpl_vars['coupon_discount']->value, null, 0);?>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['affiliate']->value['use_affiliate'])&&!empty($_smarty_tpl->tpl_vars['affiliate']->value['affiliate_discount'])){?>
                                    <?php $_smarty_tpl->tpl_vars['_partial_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['_partial_discount']->value-$_smarty_tpl->tpl_vars['affiliate']->value['affiliate_discount'], null, 0);?>
                                <?php }?>
                                <div class="wa-price-discount" id="wa-cart-discount" style="<?php if (empty($_smarty_tpl->tpl_vars['_partial_discount']->value)){?>display: none;<?php }?>">
                                    Discount
                                    <span class="wa-discount js-price"><?php if (!empty($_smarty_tpl->tpl_vars['_partial_discount']->value)){?>
                                        <?php echo shop_currency($_smarty_tpl->tpl_vars['_partial_discount']->value,array('in_currency'=>true,'format'=>'h'));?>

                                    <?php }else{ ?>0<?php }?></span>
                                </div>
                                
                                <div class="wa-price-discount" id="wa-cart-discount-coupon" style="<?php if (empty($_smarty_tpl->tpl_vars['coupon_discount']->value)){?>display: none;<?php }?>">
                                    Coupon discount
                                    <span class="wa-discount js-price"><?php if (!empty($_smarty_tpl->tpl_vars['coupon_discount']->value)){?>
                                        <?php echo shop_currency($_smarty_tpl->tpl_vars['coupon_discount']->value,array('in_currency'=>true,'format'=>'h'));?>

                                    <?php }else{ ?>0<?php }?></span>
                                </div>
                                
                                <div class="wa-price-discount" id="wa-cart-discount-affiliate" style="<?php if (empty($_smarty_tpl->tpl_vars['affiliate']->value['use_affiliate'])){?>display: none;<?php }?>">
                                    Affiliate bonus discount
                                    <span class="wa-discount js-price"><?php if (!empty($_smarty_tpl->tpl_vars['affiliate']->value['use_affiliate'])){?>
                                        <?php echo shop_currency($_smarty_tpl->tpl_vars['affiliate']->value['affiliate_discount'],array('in_currency'=>true,'format'=>'h'));?>

                                    <?php }else{ ?>0<?php }?></span>
                                </div>
                            <?php }?>

                            
                            <div class="wa-price-total" id="wa-cart-total">
                                Total
                                <span class="wa-price js-price">
                                    <?php echo shop_currency($_smarty_tpl->tpl_vars['cart']->value['total'],array('in_currency'=>true,'format'=>'h'));?>

                                </span>
                            </div>
                        </div>

                        <?php $_smarty_tpl->tpl_vars['_show_weight'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['_config']->value["show_weight"])&&!empty($_smarty_tpl->tpl_vars['cart']->value['total_weight_html'])&&!empty($_smarty_tpl->tpl_vars['cart']->value['count_html'])), null, 0);?><div class="wa-weight-section" id="wa-cart-weight" style="<?php if (empty($_smarty_tpl->tpl_vars['_show_weight']->value)){?>display: none;<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['_show_weight']->value)){?><?php echo sprintf('%s with total weight %s',"<span class=\"wa-count\">".((string)$_smarty_tpl->tpl_vars['cart']->value['count_html'])."</span>","<span class=\"wa-weight\">".((string)$_smarty_tpl->tpl_vars['cart']->value['total_weight_html'])."</span>");?>
<?php }?></div>

                    </div>
                </div>

                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['_']->value['bottom'])){?>
                    <div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value['bottom'];?>
</div>
                <?php }?><?php } ?>
            </div>

        </div>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_delete_product_dialog", null); ob_start(); ?><?php /*  Call merged included template "./order/cart/dialog/product.delete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/cart/dialog/product.delete.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '137293749162468a378e6021-74067091');
content_62468a37b8fd64_13989726($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/cart/dialog/product.delete.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_clear_cart_dialog", null); ob_start(); ?><?php /*  Call merged included template "./order/cart/dialog/clear.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/cart/dialog/clear.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '137293749162468a378e6021-74067091');
content_62468a37bc4f84_59954011($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/cart/dialog/clear.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <script>
            ( function($) {

                load([
                    {
                        id: "wa-order-ui-css",
                        type: "css",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/frontend/order/ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                    },
                    {
                        id: "wa-order-ui-js",
                        type: "js",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/ui.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                    },
                    {
                        id: "wa-order-cart-css",
                        type: "css",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/frontend/order/cart.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                    },
                    {
                        id: "wa-order-cart-js",
                        type: "js",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/cart.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                    },
                    {
                        id: "wa-order-product-js",
                        type: "js",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/product.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                    }
                ]).then(init);

                function load(sources) {
                    var deferred = $.Deferred();

                    loader(sources).then( function() {
                        deferred.resolve();
                    }, function(bad_sources) {
                        if (console && console.error) {
                            console.error("Error loading resource", bad_sources);
                        }
                        deferred.reject(bad_sources);
                    });

                    return deferred.promise();

                    function loader(sources) {
                        var deferred = $.Deferred(),
                            counter = sources.length;

                        var bad_sources = [];

                        $.each(sources, function(i, source) {
                            switch (source.type) {
                                case "css":
                                    loadCSS(source).then(onLoad, onError);
                                    break;
                                case "js":
                                    loadJS(source).then(onLoad, onError);
                                    break;
                            }
                        });

                        return deferred.promise();

                        function loadCSS(source) {
                            var deferred = $.Deferred(),
                                promise = deferred.promise();

                            var $link = $("#" + source.id);
                            if ($link.length) {
                                promise = $link.data("promise");

                            } else {
                                $link = $("<link />", {
                                    id: source.id,
                                    rel: "stylesheet"
                                }).appendTo("head")
                                    .data("promise", promise);

                                $link
                                    .on("load", function() {
                                        deferred.resolve(source);
                                    }).on("error", function() {
                                    deferred.reject(source);
                                });

                                $link.attr("href", source.uri);
                            }

                            return promise;
                        }

                        function loadJS(source) {
                            var deferred = $.Deferred(),
                                promise = deferred.promise();

                            var $script = $("#" + source.id);
                            if ($script.length) {
                                promise = $script.data("promise");

                            } else {
                                var script = document.createElement("script");
                                document.getElementsByTagName("head")[0].appendChild(script);

                                $script = $(script)
                                    .attr("id", source.id)
                                    .data("promise", promise);

                                $script
                                    .on("load", function() {
                                        deferred.resolve(source);
                                    }).on("error", function() {
                                    deferred.reject(source);
                                });

                                $script.attr("src", source.uri);
                            }

                            return promise;
                        }

                        function onLoad(source) {
                            counter -= 1;
                            watcher();
                        }

                        function onError(source) {
                            bad_sources.push(source);
                            counter -= 1;
                            watcher();
                        }

                        function watcher() {
                            if (counter === 0) {
                                if (!bad_sources.length) {
                                    deferred.resolve();
                                } else {
                                    deferred.reject(bad_sources);
                                }
                            }
                        }
                    }
                }

                function init() {
                    window.waOrder.ui.initFormatPrice(<?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['currency_info']->value)===null||$tmp==='' ? '' : $tmp));?>
);
                    window.waOrder.cart = new window.waOrder.Cart({
                        $wrapper: $("#wa-order-cart-wrapper"),
                        outer_options: <?php echo json_encode($_smarty_tpl->tpl_vars['options']->value);?>
,
                        weight_enabled: <?php if (!empty($_smarty_tpl->tpl_vars['_config']->value["show_weight"])){?>true<?php }else{ ?>false<?php }?>,
                        templates: {
                            error: <?php ob_start();?><?php smarty_template_function__renderError($_smarty_tpl,array());?>
<?php echo json_encode(trim(preg_replace('!\s+!u', ' ',ob_get_clean())))?>,
                            delete_product_dialog: <?php echo json_encode(trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['_delete_product_dialog']->value)));?>
,
                            clear_cart_dialog: <?php echo json_encode(trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['_clear_cart_dialog']->value)));?>

                        },
                        urls: {
                            "add": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrderCart/add'));?>
,
                            "save": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrderCart/save'));?>
,
                            "refresh": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrderCart/render'));?>
,
                            "product_edit": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrderCart/productdialog'));?>

                        },
                        locales: {
                            coupon_invalid: <?php echo json_encode(_w('Invalid coupon code'));?>
,
                            coupon_empty: <?php echo json_encode(_w('Coupon code is empty'));?>
,

                            quantity_limit: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_limit"]);?>
,
                            quantity_empty: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_empty"]);?>
,
                            quantity_delete: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_delete"]);?>
,
                            quantity_decrease: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_decrease"]);?>
,
                            quantity_increase: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_increase"]);?>
,
                            quantity_stock_error: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value["quantity_stock_error"]);?>
,

                            weight_total: <?php echo json_encode(sprintf('%s with total weight %s',"<span class=\"wa-count\">%s</span>","<span class=\"wa-weight\">%s</span>"));?>
,
                            affiliate_bonus: <?php echo json_encode(_w('This order will add <strong>+%s bonuses</strong> to  your account, which you will be able to spend on getting additional discounts later.'));?>

                        }
                    });
                }

            })(jQuery);
        </script>
    <?php }?>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/cart/dialog/product.delete.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a37b8fd64_13989726')) {function content_62468a37b8fd64_13989726($_smarty_tpl) {?><div class="wa-order-dialog wa-confirm-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body">
        <header class="wa-dialog-header">
            <div class="wa-header">Delete product from the cart?</div>
            <span class="wa-close-wrapper js-close-dialog">
                <i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i>
            </span>
        </header>
        <div class="wa-dialog-content">
            <p>%message%</p>
        </div>
        <footer class="wa-dialog-footer">
            <button class="wa-button blue js-focus-button js-cancel" type="button">Don’t delete</button>
            <button class="wa-button gray js-confirm" type="button">Delete</button>
        </footer>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/cart/dialog/clear.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a37bc4f84_59954011')) {function content_62468a37bc4f84_59954011($_smarty_tpl) {?><div class="wa-order-dialog wa-confirm-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body">
        <header class="wa-dialog-header">
            <div class="wa-header">Empty cart</div>
            <span class="wa-close-wrapper js-close-dialog">
                <i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i>
            </span>
        </header>
        <div class="wa-dialog-content">
            <p>Delete all products from the cart?</p>
        </div>
        <footer class="wa-dialog-footer">
            <button class="wa-button blue js-focus-button js-cancel" type="button">Don’t delete</button>
            <button class="wa-button gray js-confirm" type="button">Delete</button>
        </footer>
    </div>
</div><?php }} ?>