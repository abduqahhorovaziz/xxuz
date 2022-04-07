<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/FrontendOrderForm.html" */ ?>
<?php /*%%SmartyHeaderCode:69624656362468a37d891a4-37357815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd56035de19e7800385de8f50880ebb09cabca830' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/FrontendOrderForm.html',
      1 => 1613045820,
      2 => 'file',
    ),
    'd36a39715d4fe48e5f8ef1ff2fd6ce3d3990cdf4' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html',
      1 => 1588062360,
      2 => 'file',
    ),
    '615d1cfd94951a13a5de38939b3f3711c6b8fbce' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/auth.html',
      1 => 1561471260,
      2 => 'file',
    ),
    'b03eddf0b1aa632020700b653e199e5dd8e18dae' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/region.html',
      1 => 1626346255,
      2 => 'file',
    ),
    'fb15b6a7f8c1a656a0684172a60268a20f5eaaca' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/shipping.html',
      1 => 1626346255,
      2 => 'file',
    ),
    'f05994944ad2f7ed717fa51e8a26d6376bab7475' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/photo.html',
      1 => 1548948060,
      2 => 'file',
    ),
    '42675992599fdb346923a442f84f35ec289c0265' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/details.html',
      1 => 1594629660,
      2 => 'file',
    ),
    '4934c22dad7645c42222c9c1aab27698f3f60661' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/payment.html',
      1 => 1621849848,
      2 => 'file',
    ),
    'd698b4b8febe7c906dbf6c4f4b6d3d78a4dd21d9' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/terms.html',
      1 => 1576582800,
      2 => 'file',
    ),
    '6a10f5fd8709f8248b73250c82fd7da8c11f2914' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/confirm.html',
      1 => 1638272723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69624656362468a37d891a4-37357815',
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
    '_echo_size_class' => 
    array (
      'parameter' => 
      array (
        '_size' => '',
      ),
      'compiled' => '',
    ),
    '_render_label' => 
    array (
      'parameter' => 
      array (
        '_label' => '',
        '_required' => false,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'options' => 0,
    '_use_adaptive_styles' => 0,
    'root_path' => 0,
    'locale_file' => 0,
    '_form_classes' => 0,
    '_form_globals' => 0,
    '_hide_region' => 0,
    '_confirm_locked' => 0,
    'config' => 0,
    'locale_file_exist' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'confirm' => 0,
    'session_is_alive' => 0,
    '_loading_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a387a4970_48485134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a387a4970_48485134')) {function content_62468a387a4970_48485134($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form",array());?>
<?php $_smarty_tpl->tpl_vars['_use_adaptive_styles'] = new Smarty_variable(true, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['options']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['options']->value["adaptive"])&&(empty($_smarty_tpl->tpl_vars['options']->value["adaptive"])||$_smarty_tpl->tpl_vars['options']->value["adaptive"]==="false")){?><?php $_smarty_tpl->tpl_vars['_use_adaptive_styles'] = new Smarty_variable(false, null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_form_classes'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_use_adaptive_styles']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('_form_classes', null, 0);
$_smarty_tpl->tpl_vars['_form_classes']->value[] = "with-adaptive";?><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()=='ru_RU'||$_smarty_tpl->tpl_vars['wa']->value->locale()=='en_US'){?><?php $_smarty_tpl->tpl_vars['locale_file_exist'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['locale_file'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['root_path']->value)."/wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['wa']->value->locale()).".js", null, 0);?><?php $_smarty_tpl->tpl_vars['locale_file_exist'] = new Smarty_variable(file_exists($_smarty_tpl->tpl_vars['locale_file']->value), null, 0);?><?php }?><div class="wa-order-form-wrapper is-not-ready <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_form_classes']->value," ");?>
" id="wa-order-form-wrapper"><script>( function($) {$("#wa-order-form-wrapper").data("ready", $.Deferred());})(jQuery);</script><div class="wa-form-body"><div class="wa-form-loader"><p>Selecting shipping and payment options for selected items...</p></div><div class="wa-form-content js-invisible-content" style="display: none;"><?php /*  Call merged included template "./order/form/auth.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/auth.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a37db9e12_94625208($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/auth.html" */?><?php $_smarty_tpl->tpl_vars['_hide_region'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_form_globals'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_form_globals']->value["auth"]["locked"])){?><?php $_smarty_tpl->tpl_vars['_hide_region'] = new Smarty_variable(true, null, 0);?><?php }?><?php /*  Call merged included template "./order/form/region.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/region.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_hide_region'=>$_smarty_tpl->tpl_vars['_hide_region']->value), 0, '69624656362468a37d891a4-37357815');
content_62468a38023604_91279065($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/region.html" */?><?php /*  Call merged included template "./order/form/shipping.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/shipping.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a3824c068_29782288($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/shipping.html" */?><?php /*  Call merged included template "./order/form/details.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a38430ee5_23909724($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/details.html" */?><?php /*  Call merged included template "./order/form/payment.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/payment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a385f61e3_63406005($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/payment.html" */?><?php $_smarty_tpl->tpl_vars['_confirm_locked'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_form_globals'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_form_globals']->value["auth"]["locked"])){?><?php $_smarty_tpl->tpl_vars['_confirm_locked'] = new Smarty_variable(true, null, 0);?><?php }?><?php /*  Call merged included template "./order/form/confirm.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./order/form/confirm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_confirm_locked'=>$_smarty_tpl->tpl_vars['_confirm_locked']->value), 0, '69624656362468a37d891a4-37357815');
content_62468a38681ca4_63021089($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./order/form/confirm.html" */?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['config']->value["shipping"]["service_agreement"])){?><footer class="wa-form-footer js-form-footer js-invisible-content" style="display: none;"><div class="wa-line"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['config']->value["shipping"]["service_agreement_hint"])===null||$tmp==='' ? '' : $tmp);?>
</div></footer><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading_template", null); ob_start(); ?><div class="s-loading-animation"><span class="s-points-wrapper"><span class="s-point"></span><span class="s-point"></span><span class="s-point"></span></span></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <script>
        ( function($) { "use strict";

            var locale = <?php echo json_encode(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2));?>
,
                locale_file_exist = <?php echo json_encode($_smarty_tpl->tpl_vars['locale_file_exist']->value);?>
;

            
            load([
                {
                    id: "wa-content-jquery-ui-js",
                    type: "js",
                    uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/jquery-ui/jquery-ui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                },
                {
                    id: "wa-content-jquery-ui-css",
                    type: "css",
                    uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/jquery-ui/jquery-ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
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
                    id: "wa-order-ui-css",
                    type: "css",
                    uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/frontend/order/ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                },
                {
                    id: "wa-order-form-js",
                    type: "js",
                    uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/order/form.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                },
                {
                    id: "wa-order-form-css",
                    type: "css",
                    uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/frontend/order/form.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
                }
            ]).then( function() {
                if (locale !== "en" && locale_file_exist) {
                    load([{
                        id: "wa-content-jquery-ui-locale-js",
                        type: "js",
                        uri: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"
                    }]).then(init);

                } else {
                    init();
                }
            });

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
                window.waOrder.ui.initFormatPrice(<?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['confirm']->value['currency_info'])===null||$tmp==='' ? '' : $tmp));?>
);
                window.waOrder.form = new window.waOrder.Form({
                    $wrapper: $("#wa-order-form-wrapper"),
                    outer_options: <?php echo json_encode($_smarty_tpl->tpl_vars['options']->value);?>
,
                    use_storage: <?php if ($_smarty_tpl->tpl_vars['session_is_alive']->value){?>false<?php }else{ ?>true<?php }?>,
                    templates: {
                        loading: <?php echo json_encode($_smarty_tpl->tpl_vars['_loading_template']->value);?>

                    },
                    locales: {
                        invalid: <?php echo json_encode(_w("Incorrect value"));?>
,
                        required: <?php echo json_encode(_w("Required field"));?>
,
                        invalid_date: <?php echo json_encode(_w("Non-existent date."));?>
,
                        incorrect_date: <?php echo json_encode(_w("Delivery date cannot be earlier than specified."));?>

                    },
                    urls: {
                        "order": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl());?>
,
                        "calculate": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrder/calculate'));?>
,
                        "success": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/checkout',array('step'=>'success')));?>
,
                        "create": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrder/create'));?>
,
                        "auth_dialog": <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrder/authDialog'));?>

                    }
                });
            }
        })(jQuery);
    </script>
</div>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/auth.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a37db9e12_94625208')) {function content_62468a37db9e12_94625208($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_form_globals'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->globals("wa_order_form"), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_form_globals', null, 0);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./render_field.function.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a37e5d3b2_86330555($_smarty_tpl);
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

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/render_field.function.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a37e5d3b2_86330555')) {function content_62468a37e5d3b2_86330555($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['shop_order_render_field_function']->value)){?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
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
<?php $_smarty_tpl->tpl_vars['shop_order_render_field_function'] = new Smarty_variable(true, null, 0);?><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/region.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a38023604_91279065')) {function content_62468a38023604_91279065($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['shipping'], null, 0);?><?php $_smarty_tpl->tpl_vars['_system_address_field_names'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value->getSystemAddressFieldNames(), null, 0);?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="region"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_countries'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['countries'])){?><?php $_smarty_tpl->tpl_vars['_countries'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['countries'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_active_location'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_county'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_region'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['region']->value['selected_values']['location_id'])){?><?php  $_smarty_tpl->tpl_vars['_location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region']->value['locations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_location']->key => $_smarty_tpl->tpl_vars['_location']->value){
$_smarty_tpl->tpl_vars['_location']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['_location']->value['id']==$_smarty_tpl->tpl_vars['region']->value['selected_values']['location_id']){?><?php $_smarty_tpl->tpl_vars['_active_location'] = new Smarty_variable($_smarty_tpl->tpl_vars['_location']->value, null, 0);?><?php }?><?php } ?><?php if (empty($_smarty_tpl->tpl_vars['_active_location']->value)){?><?php $_smarty_tpl->tpl_vars['_active_location'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['region']->value['locations']), null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_is_default_mode'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_minimal_mode'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['config']->value['shipping']['mode']==shopCheckoutConfig::SHIPPING_MODE_TYPE_MINIMUM){?><?php $_smarty_tpl->tpl_vars['_is_default_mode'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_minimal_mode'] = new Smarty_variable(true, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_is_country_required'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_region_required'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_city_required'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_zip_required'] = new Smarty_variable(true, null, 0);?><?php if (!function_exists('smarty_template_function__echo_size_class')) {
    function smarty_template_function__echo_size_class($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_echo_size_class']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php $_smarty_tpl->tpl_vars['_size_class'] = new Smarty_variable("size-medium", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_size']->value)){?><?php if ($_smarty_tpl->tpl_vars['_size']->value==shopCheckoutConfig::FIELD_WIDTH_MINI){?><?php $_smarty_tpl->tpl_vars['_size_class'] = new Smarty_variable("size-mini", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_size']->value==shopCheckoutConfig::FIELD_WIDTH_SMALL){?><?php $_smarty_tpl->tpl_vars['_size_class'] = new Smarty_variable("size-small", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_size']->value==shopCheckoutConfig::FIELD_WIDTH_MEDIUM){?><?php $_smarty_tpl->tpl_vars['_size_class'] = new Smarty_variable("size-medium", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_size']->value==shopCheckoutConfig::FIELD_WIDTH_LARGE){?><?php $_smarty_tpl->tpl_vars['_size_class'] = new Smarty_variable("size-large", null, 0);?><?php }?><?php }?><?php echo $_smarty_tpl->tpl_vars['_size_class']->value;?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php if (!function_exists('smarty_template_function__render_label')) {
    function smarty_template_function__render_label($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_render_label']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if (!empty($_smarty_tpl->tpl_vars['_required']->value)){?><span class="wa-tooltip is-inline top" data-title="Required field"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_label']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<span class="wa-required"></span></span><?php }else{ ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_label']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_zip_field", null); ob_start(); ?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['ask_zip'])){?><div class="wa-field-wrapper wa-zip-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MINI));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['zip'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_zip_required']->value)));?>
</label><input class="wa-input js-zip-field" autocomplete="false" name="region[zip]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['region']->value['selected_values']['zip'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_zip_required']->value)){?>required<?php }?>></div><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->tpl_vars['_hide_region'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_hide_region']->value)||!empty($_smarty_tpl->tpl_vars['region']->value['disabled']), null, 0);?><section class="wa-step-section wa-step-region-section" id="wa-step-region-section" style="<?php if (!empty($_smarty_tpl->tpl_vars['_hide_region']->value)){?>display: none;<?php }?>"><header class="wa-section-header"><h3 class="wa-header"><?php echo $_smarty_tpl->tpl_vars['_config']->value['block_name'];?>
</h3></header><?php $_smarty_tpl->tpl_vars['_nothing_to_change'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_is_minimal_mode']->value&&isset($_smarty_tpl->tpl_vars['region']->value['locations'])&&count($_smarty_tpl->tpl_vars['region']->value['locations'])===1){?><?php if (!empty($_smarty_tpl->tpl_vars['_active_location']->value['country_id'])&&!(empty($_smarty_tpl->tpl_vars['_active_location']->value['region_id'])&&empty($_smarty_tpl->tpl_vars['_active_location']->value['region']))&&!(empty($_smarty_tpl->tpl_vars['_active_location']->value['city_id'])&&empty($_smarty_tpl->tpl_vars['_active_location']->value['city']))&&empty($_smarty_tpl->tpl_vars['region']->value['ask_zip'])){?><?php $_smarty_tpl->tpl_vars['_nothing_to_change'] = new Smarty_variable(true, null, 0);?><?php }?><?php }?><div class="wa-section-body"><form autocomplete="off"><?php if (empty($_smarty_tpl->tpl_vars['region']->value['disabled'])){?><div class="wa-line wa-required-text"><span class="wa-required"></span>To view shipping cost and estimated shipping time, please complete fields with an asterisk</div><?php if ($_smarty_tpl->tpl_vars['_is_default_mode']->value){?><div class="wa-line wa-fields-group line"><input name="region[location_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_location']->value['id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-field-wrapper wa-country-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['country'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_country_required']->value)));?>
</label><?php if (empty($_smarty_tpl->tpl_vars['_active_location']->value['country_locked'])){?><select class="wa-select js-country-field" name="region[country]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_country_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id'])){?>selected<?php }?>>Select a country</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id']==$_smarty_tpl->tpl_vars['_country']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_county'] = new Smarty_variable($_smarty_tpl->tpl_vars['_country']->value, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_country']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_active_country_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['country_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id'])){?><?php $_smarty_tpl->tpl_vars['_active_country_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id'], null, 0);?><?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id']==$_smarty_tpl->tpl_vars['_country']->value['id']){?><?php $_smarty_tpl->tpl_vars['_active_county'] = new Smarty_variable($_smarty_tpl->tpl_vars['_country']->value, null, 0);?><?php break 1?><?php }?><?php } ?><?php }?><input class="wa-input" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_county']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" disabled><input name="region[country]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_country_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></div><div class="wa-field-wrapper wa-region-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['region'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)));?>
</label><?php if (empty($_smarty_tpl->tpl_vars['_active_location']->value['region_locked'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_active_county']->value['has_regions'])){?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'])){?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'], null, 0);?><?php }?><select class="wa-select js-region-field js-region-field-id" name="region[region]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['_active_region_id']->value)){?>selected<?php }?>>Select a region</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_county']->value['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['_active_region_id']->value==$_smarty_tpl->tpl_vars['_region']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_region'] = new Smarty_variable($_smarty_tpl->tpl_vars['_region']->value, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_region']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'])){?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'], null, 0);?><?php }?><input class="wa-input js-region-field js-region-field-value" autocomplete="false" name="region[region]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_region_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)){?>required<?php }?>><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'])){?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'])){?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_active_region_id']->value)){?><?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_county']->value['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['_active_region_id']->value==$_smarty_tpl->tpl_vars['_region']->value['id']){?><?php $_smarty_tpl->tpl_vars['_active_region'] = new Smarty_variable($_smarty_tpl->tpl_vars['_region']->value, null, 0);?><?php }?><?php } ?><input class="wa-input" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_region']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" disabled><input class="js-region-field-id" name="region[region]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_region_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><input class="wa-input" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region_value']->value, ENT_QUOTES, 'UTF-8', true);?>
" disabled><input class="js-region-field-value" name="region[region]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_region_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php }?></div><div class="wa-field-wrapper wa-city-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['city'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)));?>
</label><?php if (empty($_smarty_tpl->tpl_vars['_active_location']->value['city_locked'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_active_region']->value['has_cities'])){?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'])){?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'], null, 0);?><?php }?><select class="wa-select js-city-field" name="region[city_id]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['_active_city_id']->value)){?>selected<?php }?>>Select a locality</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_region']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_city']->key => $_smarty_tpl->tpl_vars['_city']->value){
$_smarty_tpl->tpl_vars['_city']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['_active_city_id']->value==$_smarty_tpl->tpl_vars['_city']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(true, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_city']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_active_location']->value,'city',null), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'])){?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'], null, 0);?><?php }?><input class="wa-input js-city-field js-city-autocomplete" autocomplete="false" name="region[city]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_city_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)){?>required<?php }?>><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'])){?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'])){?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_active_city_id']->value)){?><?php $_smarty_tpl->tpl_vars['_active_city'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_region']->value)){?><?php  $_smarty_tpl->tpl_vars['_city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_region']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_city']->key => $_smarty_tpl->tpl_vars['_city']->value){
$_smarty_tpl->tpl_vars['_city']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['_active_city_id']->value==$_smarty_tpl->tpl_vars['_city']->value['id']){?><?php $_smarty_tpl->tpl_vars['_active_city'] = new Smarty_variable($_smarty_tpl->tpl_vars['_city']->value, null, 0);?><?php break 1?><?php }?><?php } ?><?php }?><input class="wa-input" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_city']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" disabled><input name="region[city_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_city_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><input class="wa-input" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_city_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" disabled><input name="region[city]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_city_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php }?></div><?php echo $_smarty_tpl->tpl_vars['_zip_field']->value;?>
</div><?php }elseif($_smarty_tpl->tpl_vars['_is_minimal_mode']->value){?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_location']->value['region'])){?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_location']->value['city'])){?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city'], null, 0);?><?php }?><div class="wa-line wa-fields-group line" <?php if (!empty($_smarty_tpl->tpl_vars['_nothing_to_change']->value)){?>style="display: none;"<?php }?>><?php if (count($_smarty_tpl->tpl_vars['region']->value['locations'])>1){?><div class="wa-field-wrapper wa-location-wrapper size-medium"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>"Shipping area",'_required'=>true));?>
</label><select class="wa-select js-location-field" name="region[location_id]" required><?php  $_smarty_tpl->tpl_vars['_location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region']->value['locations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_location']->key => $_smarty_tpl->tpl_vars['_location']->value){
$_smarty_tpl->tpl_vars['_location']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_active_location']->value['id']==$_smarty_tpl->tpl_vars['_location']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_location']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_location']->value['name'])===null||$tmp==='' ? "No name" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select></div><?php }else{ ?><input name="region[location_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_location']->value['id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php $_smarty_tpl->tpl_vars['_active_country_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['country_id'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_country_id']->value)){?><input class="js-country-field" name="region[country]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_country_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id']==$_smarty_tpl->tpl_vars['_country']->value['id']){?><?php $_smarty_tpl->tpl_vars['_active_county'] = new Smarty_variable($_smarty_tpl->tpl_vars['_country']->value, null, 0);?><?php break 1?><?php }?><?php } ?><?php }else{ ?><div class="wa-field-wrapper wa-country-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['country'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_country_required']->value)));?>
</label><select class="wa-select js-country-field" name="region[country]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_country_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id'])){?>selected<?php }?>>Select a country</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_country']->key => $_smarty_tpl->tpl_vars['_country']->value){
$_smarty_tpl->tpl_vars['_country']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['region']->value['selected_values']['country_id']==$_smarty_tpl->tpl_vars['_country']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_county'] = new Smarty_variable($_smarty_tpl->tpl_vars['_country']->value, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_country']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select></div><?php }?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region_id'], null, 0);?><?php $_smarty_tpl->tpl_vars['_active_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['region'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_region_id']->value)){?><input class="js-region-field js-region-field-id" name="region[region]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_region_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }elseif(!empty($_smarty_tpl->tpl_vars['_active_region_value']->value)){?><input class="js-region-field js-region-field-value" name="region[region]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_region_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><div class="wa-field-wrapper wa-region-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['region'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)));?>
</label><?php if (!empty($_smarty_tpl->tpl_vars['_active_county']->value['has_regions'])){?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'])){?><?php $_smarty_tpl->tpl_vars['_active_region_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region_id'], null, 0);?><?php }?><select class="wa-select js-region-field js-region-field-id" name="region[region]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['_active_region_id']->value)){?>selected<?php }?>>Select a region</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_county']->value['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_region']->key => $_smarty_tpl->tpl_vars['_region']->value){
$_smarty_tpl->tpl_vars['_region']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['_active_region_id']->value==$_smarty_tpl->tpl_vars['_region']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_region'] = new Smarty_variable($_smarty_tpl->tpl_vars['_region']->value, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_region']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_region']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'])){?><?php $_smarty_tpl->tpl_vars['_region_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['region'], null, 0);?><?php }?><input class="wa-input js-region-field js-region-field-value" autocomplete="false" name="region[region]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_region_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_region_required']->value)){?>required<?php }?>><?php }?></div><?php }?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city_id'], null, 0);?><?php $_smarty_tpl->tpl_vars['_active_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_location']->value['city'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_city_id']->value)){?><input class="js-city-field" name="region[city_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_city_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }elseif(!empty($_smarty_tpl->tpl_vars['_active_city_value']->value)){?><input class="js-city-field" name="region[city]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_active_city_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }else{ ?><div class="wa-field-wrapper wa-city-wrapper <?php smarty_template_function__echo_size_class($_smarty_tpl,array('_size'=>shopCheckoutConfig::FIELD_WIDTH_MEDIUM));?>
"><label class="wa-label"><?php smarty_template_function__render_label($_smarty_tpl,array('_label'=>$_smarty_tpl->tpl_vars['_system_address_field_names']->value['city'],'_required'=>!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)));?>
</label><?php if (!empty($_smarty_tpl->tpl_vars['_active_region']->value['has_cities'])){?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'])){?><?php $_smarty_tpl->tpl_vars['_active_city_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city_id'], null, 0);?><?php }?><select class="wa-select js-city-field" name="region[city_id]" <?php if (!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)){?>required<?php }?>><option value="" disabled <?php if (empty($_smarty_tpl->tpl_vars['_active_city_id']->value)){?>selected<?php }?>>Select a locality</option><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_region']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_city']->key => $_smarty_tpl->tpl_vars['_city']->value){
$_smarty_tpl->tpl_vars['_city']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['_is_active_set']->value)&&$_smarty_tpl->tpl_vars['_active_city_id']->value==$_smarty_tpl->tpl_vars['_city']->value['id']){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_set'] = new Smarty_variable(false, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['_city']->value['id'])){?><option value="" disabled></option><?php }else{ ?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?><?php } ?></select><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'])){?><?php $_smarty_tpl->tpl_vars['_city_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['region']->value['selected_values']['city'], null, 0);?><?php }?><input class="wa-input js-city-field js-city-autocomplete" autocomplete="false" name="region[city]" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_city_value']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_city_required']->value)){?>required<?php }?>><?php }?></div><?php }?><?php echo $_smarty_tpl->tpl_vars['_zip_field']->value;?>
</div><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['region']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?></form></div><script>( function($) {var $section = $("#wa-step-region-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initRegion({$wrapper: $section,disabled: <?php if (!empty($_smarty_tpl->tpl_vars['region']->value['disabled'])){?>true<?php }else{ ?>false<?php }?>,auto_use_timeout: <?php if (!empty($_smarty_tpl->tpl_vars['_config']->value['auto_use_timeout'])&&($_smarty_tpl->tpl_vars['_config']->value['auto_use_timeout']>0)){?><?php echo $_smarty_tpl->tpl_vars['_config']->value['auto_use_timeout']*1000;?>
<?php }else{ ?>0<?php }?>,errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
});});})(jQuery);</script></section><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/shipping.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a3824c068_29782288')) {function content_62468a3824c068_29782288($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="shipping"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_fast_render'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_errors']->value)){?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->key => $_smarty_tpl->tpl_vars['_error']->value){
$_smarty_tpl->tpl_vars['_error']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_error']->value["fast_render"])){?><?php $_smarty_tpl->tpl_vars['_is_fast_render'] = new Smarty_variable(true, null, 0);?><?php break 1?><?php }?><?php } ?><?php }?><?php $_smarty_tpl->tpl_vars['_types_sort'] = new Smarty_variable(array("todoor","pickup","post"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_default_mode'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_minimal_mode'] = new Smarty_variable(true, null, 0);?><?php if ($_smarty_tpl->tpl_vars['config']->value['order']['show_pickuppoint_map']===shopCheckoutConfig::PICKUPPOINT_MAP_TYPE_ALWAYS){?><?php $_smarty_tpl->tpl_vars['_is_default_mode'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_minimal_mode'] = new Smarty_variable(false, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['config']->value['order']['show_pickuppoint_map']===shopCheckoutConfig::PICKUPPOINT_MAP_TYPE_EXCEPT_GADGETS){?><?php $_smarty_tpl->tpl_vars['_is_default_mode'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_minimal_mode'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_map_display'] = new Smarty_variable("none", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_default_mode']->value)&&!empty($_smarty_tpl->tpl_vars['shipping']->value['selected_type_id'])&&$_smarty_tpl->tpl_vars['shipping']->value['selected_type_id']=="pickup"){?><?php if ($_smarty_tpl->tpl_vars['config']->value['order']['show_pickuppoint_map']===shopCheckoutConfig::PICKUPPOINT_MAP_TYPE_ALWAYS){?><?php $_smarty_tpl->tpl_vars['_map_display'] = new Smarty_variable("always", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['config']->value['order']['show_pickuppoint_map']===shopCheckoutConfig::PICKUPPOINT_MAP_TYPE_EXCEPT_GADGETS){?><?php $_smarty_tpl->tpl_vars['_map_display'] = new Smarty_variable("desktop", null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_variant_first'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_variants_count'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['_hide_shipping'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['shipping']->value['disabled'])||(empty($_smarty_tpl->tpl_vars['shipping']->value['types'])&&empty($_smarty_tpl->tpl_vars['_errors']->value)), null, 0);?><section class="wa-step-section wa-step-shipping-section" id="wa-step-shipping-section" style="<?php if (!empty($_smarty_tpl->tpl_vars['_hide_shipping']->value)){?>display: none;<?php }?>"><div class="wa-section-body"><form><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['possible_addresses'])){?><div class="wa-possible-addresses-section" id="js-possible-addresses-section"><div class="wa-header"><span class="wa-tooltip is-inline top" data-title="Required field">Please specify the address<span class="wa-required"></span></span></div><div class="wa-dropdown full-line js-possible-address-select"><div class="wa-dropdown-toggle"><?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address'])){?><?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['city'];?>
<?php }else{ ?>Please specify the address<?php }?></div><div class="wa-dropdown-area"><?php  $_smarty_tpl->tpl_vars['_possible_address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_possible_address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['possible_addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_possible_address']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_possible_address']->key => $_smarty_tpl->tpl_vars['_possible_address']->value){
$_smarty_tpl->tpl_vars['_possible_address']->_loop = true;
 $_smarty_tpl->tpl_vars['_possible_address']->index++;
?><div class="wa-dropdown-item<?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['name'])&&$_smarty_tpl->tpl_vars['_possible_address']->value['name']==$_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['name']&&$_smarty_tpl->tpl_vars['_possible_address']->value['plugin_id']==$_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['plugin_id']){?> is-selected<?php }?>"data-index="<?php echo $_smarty_tpl->tpl_vars['_possible_address']->index;?>
"><div class="wa-address-variant"><div class="wa-name"><?php if (!empty($_smarty_tpl->tpl_vars['_possible_address']->value['image'])){?><span class="wa-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_possible_address']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
');"></span><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_possible_address']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div></div></div><?php } ?></div></div><input type="hidden" name="region[possible_address][name]" class="js-possible-address-name" <?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['name'])){?>value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['name'];?>
"<?php }?>><input type="hidden" name="region[possible_address][region]" class="js-possible-address-region" <?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['region'])){?>value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['region'];?>
"<?php }?>><input type="hidden" name="region[possible_address][city]" class="js-possible-address-city" <?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['city'])){?>value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['city'];?>
"<?php }?>><input type="hidden" name="region[possible_address][zip]" class="js-possible-address-zip" <?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['zip'])){?>value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['zip'];?>
"<?php }?>><input type="hidden" name="region[possible_address][plugin_id]" class="js-possible-address-plugin-id" <?php if (isset($_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['plugin_id'])){?>value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value['selected_possible_address']['plugin_id'];?>
"<?php }?>></div><?php }?><?php if (empty($_smarty_tpl->tpl_vars['shipping']->value['disabled'])){?><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['types'])){?><?php if (!empty($_smarty_tpl->tpl_vars['_is_default_mode']->value)){?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable(null, null, 0);?><div class="wa-delivery-types-section" id="js-delivery-types-section"><div class="wa-header">Shipping types</div><div class="wa-types-list"><?php  $_smarty_tpl->tpl_vars['_type_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_types_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type_id']->key => $_smarty_tpl->tpl_vars['_type_id']->value){
$_smarty_tpl->tpl_vars['_type_id']->_loop = true;
?><?php if (empty($_smarty_tpl->tpl_vars['shipping']->value['types'][$_smarty_tpl->tpl_vars['_type_id']->value])){?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['types'][$_smarty_tpl->tpl_vars['_type_id']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_type']->value['is_selected'])){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_type']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_type']->value['date_formatted'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['_type']->value['date_formatted'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['_type']->value['rate_min'])&&$_smarty_tpl->tpl_vars['_type']->value['rate_min']!==null){?><?php if ($_smarty_tpl->tpl_vars['_type']->value['rate_min']>0){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(shop_currency($_smarty_tpl->tpl_vars['_type']->value['rate_min'],array('in_currency'=>$_smarty_tpl->tpl_vars['_type']->value['currency'],'format'=>'h')), null, 0);?><?php if (!(isset($_smarty_tpl->tpl_vars['_type']->value['rate_max'])&&$_smarty_tpl->tpl_vars['_type']->value['rate_min']===$_smarty_tpl->tpl_vars['_type']->value['rate_max'])){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_price']->value), null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['_type']->value['rate_min']!==$_smarty_tpl->tpl_vars['_type']->value['rate_max']){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(shop_currency($_smarty_tpl->tpl_vars['_type']->value['rate_min'],array('in_currency'=>$_smarty_tpl->tpl_vars['_type']->value['currency'],'format'=>'h')), null, 0);?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_price']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(_w("Free"), null, 0);?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_type']->value['variants'])){?><div class="wa-type-wrapper <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>is-active<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['_type']->value['variants'])){?>is-empty is-disabled<?php }?>" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-name"><a href="javascript:void(0);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div><?php if (!empty($_smarty_tpl->tpl_vars['_price']->value)){?><div class="wa-price"><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_date']->value)){?><div class="wa-date"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</div><?php }?></div><?php }?><?php } ?></div><input class="js-type-field" name="shipping[type_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['selected_type_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></div><?php if (!empty($_smarty_tpl->tpl_vars['_active_type']->value)){?><?php $_smarty_tpl->tpl_vars['_active_variant'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['selected_type_id'])&&!empty($_smarty_tpl->tpl_vars['_active_type']->value['variants'][$_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id']])){?><?php $_smarty_tpl->tpl_vars['_active_variant'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_type']->value['variants'][$_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id']], null, 0);?><?php }?><div class="wa-delivery-variants-section" id="js-delivery-variants-section"><div class="wa-header">Shipping options</div><div class="wa-dropdown full-line js-variants-select"><div class="wa-dropdown-toggle"><?php if (!empty($_smarty_tpl->tpl_vars['_active_variant']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Select a shipping option<?php }?></div><div class="wa-dropdown-area"><?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_type']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_variant']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_variant']->index++;
 $_smarty_tpl->tpl_vars['_variant']->first = $_smarty_tpl->tpl_vars['_variant']->index === 0;
?><?php if ($_smarty_tpl->tpl_vars['_variant']->first){?><?php $_smarty_tpl->tpl_vars['_variant_first'] = new Smarty_variable(array("id"=>$_smarty_tpl->tpl_vars['_variant']->value['variant_id'],"name"=>$_smarty_tpl->tpl_vars['_variant']->value['name']), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['date_locale'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['_variant']->value['date_locale'], null, 0);?><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['date_min'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_variant']->value['date_min'],'shortdate'), null, 0);?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_date']->value), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_variant']->value['date_max'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_variant']->value['date_max'],'shortdate'), null, 0);?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable("to ".((string)$_smarty_tpl->tpl_vars['_date']->value), null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['_variant']->value['rate_min'])&&$_smarty_tpl->tpl_vars['_variant']->value['rate_min']!==null){?><?php if ($_smarty_tpl->tpl_vars['_variant']->value['rate_min']>0){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(shop_currency($_smarty_tpl->tpl_vars['_variant']->value['rate_min'],array('in_currency'=>$_smarty_tpl->tpl_vars['_variant']->value['currency'],'format'=>'h')), null, 0);?><?php if (!(isset($_smarty_tpl->tpl_vars['_variant']->value['rate_max'])&&$_smarty_tpl->tpl_vars['_variant']->value['rate_min']===$_smarty_tpl->tpl_vars['_variant']->value['rate_max'])){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_price']->value), null, 0);?><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(_w("Free"), null, 0);?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['variant_id'])){?><?php if ($_smarty_tpl->tpl_vars['_map_display']->value!=="always"&&$_smarty_tpl->tpl_vars['_map_display']->value!=="desktop"&&!($_smarty_tpl->tpl_vars['_active_type']->value['id']==="pickup"&&count($_smarty_tpl->tpl_vars['_active_type']->value['variants'])>5)){?><div class="wa-dropdown-item js-set-dropdown-item" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['variant_id'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-delivery-variant"><div class="wa-name" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['_price']->value)){?><span class="wa-price"><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_date']->value)){?><span class="wa-date"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['service'])){?><span class="wa-service"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['service'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></div></div><?php }?><?php $_smarty_tpl->tpl_vars['_variants_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_variants_count']->value+1, null, 0);?><?php }?><?php } ?></div></div><input class="js-variant-field" name="shipping[variant_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></div><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['_active_variant']->value)){?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable("There are no shipping options available for specified location.<br>Please check values in location fields or contact us.", null, 0);?><?php }?><?php }?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_is_minimal_mode']->value)){?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_variant'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_variants'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_type_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_types_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type_id']->key => $_smarty_tpl->tpl_vars['_type_id']->value){
$_smarty_tpl->tpl_vars['_type_id']->_loop = true;
?><?php if (empty($_smarty_tpl->tpl_vars['shipping']->value['types'][$_smarty_tpl->tpl_vars['_type_id']->value])){?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['types'][$_smarty_tpl->tpl_vars['_type_id']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active_type'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_type']->value['is_selected']), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_is_active_type']->value)){?><?php $_smarty_tpl->tpl_vars['_active_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['_type']->value, null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_type']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_variant']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_variant']->index++;
 $_smarty_tpl->tpl_vars['_variant']->first = $_smarty_tpl->tpl_vars['_variant']->index === 0;
?><?php if (!empty($_smarty_tpl->tpl_vars['_is_active_type']->value)&&!empty($_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id'])&&$_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id']===$_smarty_tpl->tpl_vars['_variant']->value['variant_id']){?><?php $_smarty_tpl->tpl_vars['_active_variant'] = new Smarty_variable($_smarty_tpl->tpl_vars['_variant']->value, null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_variants', null, 0);
$_smarty_tpl->tpl_vars['_variants']->value[] = $_smarty_tpl->tpl_vars['_variant']->value;?><?php } ?><?php } ?><div class="wa-delivery-variants-section" id="js-delivery-short-variants-section"><div class="wa-header">Shipping options</div><div class="wa-dropdown full-line js-variants-select"><div class="wa-dropdown-toggle"><?php if (!empty($_smarty_tpl->tpl_vars['_active_variant']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_active_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Select a shipping option<?php }?></div><div class="wa-dropdown-area"><?php  $_smarty_tpl->tpl_vars['_variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_variant']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_variant']->key => $_smarty_tpl->tpl_vars['_variant']->value){
$_smarty_tpl->tpl_vars['_variant']->_loop = true;
 $_smarty_tpl->tpl_vars['_variant']->index++;
 $_smarty_tpl->tpl_vars['_variant']->first = $_smarty_tpl->tpl_vars['_variant']->index === 0;
?><?php if ($_smarty_tpl->tpl_vars['_variant']->first){?><?php $_smarty_tpl->tpl_vars['_variant_first'] = new Smarty_variable(array("id"=>$_smarty_tpl->tpl_vars['_variant']->value['variant_id'],"name"=>$_smarty_tpl->tpl_vars['_variant']->value['name']), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['date_locale'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['_variant']->value['date_locale'], null, 0);?><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['date_min'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_variant']->value['date_min'],'shortdate'), null, 0);?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_date']->value), null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_variant']->value['date_max'])){?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_variant']->value['date_max'],'shortdate'), null, 0);?><?php $_smarty_tpl->tpl_vars['_date'] = new Smarty_variable("to ".((string)$_smarty_tpl->tpl_vars['_date']->value), null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['_variant']->value['rate_min'])&&$_smarty_tpl->tpl_vars['_variant']->value['rate_min']!==null){?><?php if ($_smarty_tpl->tpl_vars['_variant']->value['rate_min']>0){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(shop_currency($_smarty_tpl->tpl_vars['_variant']->value['rate_min'],array('in_currency'=>$_smarty_tpl->tpl_vars['_variant']->value['currency'],'format'=>'h')), null, 0);?><?php if (!(isset($_smarty_tpl->tpl_vars['_variant']->value['rate_max'])&&$_smarty_tpl->tpl_vars['_variant']->value['rate_min']===$_smarty_tpl->tpl_vars['_variant']->value['rate_max'])){?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable("from ".((string)$_smarty_tpl->tpl_vars['_price']->value), null, 0);?><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_price'] = new Smarty_variable(_w("Free"), null, 0);?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['variant_id'])){?><div class="wa-dropdown-item js-set-dropdown-item" data-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['variant_id'], ENT_QUOTES, 'UTF-8', true);?>
" data-type-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="wa-delivery-variant"><div class="wa-name" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['_price']->value)){?><span class="wa-price"><?php echo $_smarty_tpl->tpl_vars['_price']->value;?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_date']->value)){?><span class="wa-date"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_variant']->value['service'])){?><span class="wa-service"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variant']->value['service'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></div></div><?php $_smarty_tpl->tpl_vars['_variants_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_variants_count']->value+1, null, 0);?><?php }?><?php } ?></div></div><input class="js-type-field" name="shipping[type_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['selected_type_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><input class="js-variant-field" name="shipping[variant_id]" type="hidden" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['selected_variant_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></div><?php }?><?php }elseif(empty($_smarty_tpl->tpl_vars['_is_fast_render']->value)){?><?php $_smarty_tpl->tpl_vars['_error_text'] = new Smarty_variable("There are no shipping options available for specified location.<br>Please check values in location fields or contact us.", null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_error_text']->value)){?><div class="wa-errors-wrapper"><div class="wa-error-text"><?php echo $_smarty_tpl->tpl_vars['_error_text']->value;?>
</div></div><?php }?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_hook']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><div class="wa-plugin-hook"><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
</div><?php } ?><?php }?></form></div><?php $_smarty_tpl->tpl_vars['_map'] = new Smarty_variable(array("display"=>$_smarty_tpl->tpl_vars['_map_display']->value,"adapter"=>null,"api_uri"=>null), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['map']['adapter'])){?><?php $_smarty_tpl->createLocalArrayVariable('_map', null, 0);
$_smarty_tpl->tpl_vars['_map']->value["adapter"] = $_smarty_tpl->tpl_vars['shipping']->value['map']['adapter'];?><?php if ($_smarty_tpl->tpl_vars['shipping']->value['map']['adapter']==="yandex"){?><?php $_smarty_tpl->tpl_vars['_api_uri'] = new Smarty_variable("//api-maps.yandex.ru/2.1/?lang=ru_RU&load=Geolink,Map,Placemark,Clusterer,Collection,geoObject.addon.balloon,control.FullscreenControl,control.GeolocationControl,control.SearchControl,control.ZoomControl", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['map']['api_key'])){?><?php $_smarty_tpl->tpl_vars['_api_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_api_uri']->value)."&apikey=".((string)$_smarty_tpl->tpl_vars['shipping']->value['map']['api_key']), null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_map', null, 0);
$_smarty_tpl->tpl_vars['_map']->value["api_uri"] = $_smarty_tpl->tpl_vars['_api_uri']->value;?><?php }?><?php if ($_smarty_tpl->tpl_vars['shipping']->value['map']['adapter']==="google"){?><?php $_smarty_tpl->tpl_vars['_api_uri'] = new Smarty_variable("//maps.googleapis.com/maps/api/js", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['map']['api_key'])){?><?php $_smarty_tpl->tpl_vars['_api_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_api_uri']->value)."?key=".((string)$_smarty_tpl->tpl_vars['shipping']->value['map']['api_key']), null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_map', null, 0);
$_smarty_tpl->tpl_vars['_map']->value["api_uri"] = $_smarty_tpl->tpl_vars['_api_uri']->value;?><?php }?><?php }?><script>( function($) {var $section = $("#wa-step-shipping-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then(function (controller) {var errors = <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
;var error  = (Array.isArray(errors) ? errors.shift() : []);controller.initShipping({$wrapper: $section,map: <?php echo json_encode($_smarty_tpl->tpl_vars['_map']->value);?>
,variant_first: <?php echo json_encode($_smarty_tpl->tpl_vars['_variant_first']->value);?>
,variants_count: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_variants_count']->value, ENT_QUOTES, 'UTF-8', true);?>
,disabled: <?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value['disabled'])){?>true<?php }else{ ?>false<?php }?>,errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
,possible_addresses: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['possible_addresses'])===null||$tmp==='' ? array() : $tmp));?>
,urls: {variants_dialog: <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendOrder/shippingDialog'));?>
},locales: {type_required: <?php echo json_encode(_w("Select a shipping type."));?>
,variant_required: <?php echo json_encode(_w("Select a shipping option."));?>
}});<?php if (!empty($_smarty_tpl->tpl_vars['_is_fast_render']->value)){?>$wrapper.one("confirm_initialized", function() {controller.update({data: [{name: "use_session_input",value: "1"}]});});<?php }?>});})(jQuery);</script></section>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/details.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a38430ee5_23909724')) {function content_62468a38430ee5_23909724($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="details"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_hide_details'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['details']->value)||!empty($_smarty_tpl->tpl_vars['details']->value['disabled']), null, 0);?><section class="wa-step-section wa-step-details-section" id="wa-step-details-section" style="<?php if (!empty($_smarty_tpl->tpl_vars['_hide_details']->value)){?>display:none;<?php }?>"><div class="wa-section-body"><form><?php if (empty($_smarty_tpl->tpl_vars['details']->value['disabled'])){?><?php if (!empty($_smarty_tpl->tpl_vars['details']->value)){?><?php $_smarty_tpl->tpl_vars['_inline_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_custom_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_required_inline_fields'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_required_custom_fields'] = new Smarty_variable(array(), null, 0);?><?php /*  Call merged included template "./render_field.function.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./render_field.function.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a37e5d3b2_86330555($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./dialog/photo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69624656362468a37d891a4-37357815');
content_62468a385ce9a3_38160192($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./dialog/photo.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><script>( function($) {var $section = $("#wa-step-details-section"),$wrapper = $("#wa-order-form-wrapper");var ready_promise = $wrapper.data("ready").promise();ready_promise.then( function(controller) {controller.initDetails({$wrapper: $section,disabled: <?php if (!empty($_smarty_tpl->tpl_vars['details']->value['disabled'])){?>true<?php }else{ ?>false<?php }?>,templates: {photo: <?php echo waUtils::jsonEncode($_smarty_tpl->tpl_vars['_photo_template_html']->value);?>
},errors: <?php echo json_encode($_smarty_tpl->tpl_vars['_errors']->value);?>
});});})(jQuery);</script></section>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/photo.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a385ce9a3_38160192')) {function content_62468a385ce9a3_38160192($_smarty_tpl) {?><div class="wa-order-dialog wa-photo-dialog">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/payment.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a385f61e3_63406005')) {function content_62468a385f61e3_63406005($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
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
});});})(jQuery);</script></section><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/confirm.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a38681ca4_63021089')) {function content_62468a38681ca4_63021089($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value["confirmation"], null, 0);?><?php $_smarty_tpl->tpl_vars['_locked'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_confirm_locked']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_cart_is_invalid'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['error_step_id']->value)&&$_smarty_tpl->tpl_vars['error_step_id']->value==="confirm"){?><?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['errors']->value, null, 0);?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_error']->_loop = false;
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./dialog/terms.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_html'=>$_smarty_tpl->tpl_vars['_html']->value), 0, '69624656362468a37d891a4-37357815');
content_62468a38715466_15406053($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:32
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/terms.html" */ ?>
<?php if ($_valid && !is_callable('content_62468a38715466_15406053')) {function content_62468a38715466_15406053($_smarty_tpl) {?><div class="wa-order-dialog"><div class="wa-dialog-background"></div><div class="wa-dialog-body"><header class="wa-dialog-header"><div class="wa-header">Terms of service</div><span class="wa-close-wrapper js-close-dialog"><i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i></span></header><div class="wa-dialog-content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_html']->value)===null||$tmp==='' ? '' : $tmp);?>
</div><footer class="wa-dialog-footer with-delimiter"><button class="wa-button gray js-close-dialog" type="button">Close</button></footer></div></div><?php }} ?>