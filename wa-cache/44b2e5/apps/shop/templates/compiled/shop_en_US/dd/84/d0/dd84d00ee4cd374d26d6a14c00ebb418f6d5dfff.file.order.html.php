<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:14:31
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/order.html" */ ?>
<?php /*%%SmartyHeaderCode:122022014662468a374b2dd0-02433512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd84d00ee4cd374d26d6a14c00ebb418f6d5dfff' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/order.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122022014662468a374b2dd0-02433512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    '_cart_count' => 0,
    'wa_theme_url' => 0,
    'config' => 0,
    'wa_app_url' => 0,
    '_svg_icon' => 0,
    '_refer_url' => 0,
    '_current_url' => 0,
    '_refer_host' => 0,
    '_current_host' => 0,
    '_url' => 0,
    '_cross_selling_html' => 0,
    'frontend_order' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468a375bcd51_52259274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468a375bcd51_52259274')) {function content_62468a375bcd51_52259274($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("hideBreadcrumbs",true);?>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("hideSidebar",true);?>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("hidePane",true);?>


<?php $_smarty_tpl->tpl_vars['_cart_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->count(), null, 0);?>

<style>
    #header-container { display: none; }
    .s-cart-empty-wrapper { padding: 100px 0; text-align: center; }
    .s-cart-empty-wrapper .s-image-wrapper { margin: 0 0 20px; }
    .s-cart-empty-wrapper .s-image-wrapper img { vertical-align: top; max-width: 100%; max-height: 160px; }
    .s-cart-empty-wrapper .s-description { margin: 20px 0 0; }
    .s-cart-empty-wrapper .s-actions-wrapper { margin: 30px 0 0; color: #006bd8; }
</style>


<?php if (empty($_smarty_tpl->tpl_vars['_cart_count']->value)){?>
    <div class="s-cart-empty-wrapper">
        <div class="s-image-wrapper">
            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/svg/order/cart_empty.svg" alt="Your shopping cart is empty.">
        </div>
        <p class="s-description"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['cart']['empty_text'])===null||$tmp==='' ? "Your shopping cart is empty." : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</p>
        <p class="s-actions-wrapper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Go to home page</a>
        </p>
    </div>


<?php }else{ ?>

    <div class="s-checkout-order-page" id="js-checkout-order-page">
        <div class="s-order-column">

            <section class="s-order-section" id="js-order-cart">
                <div class="s-section-header wa-flex-box full-line middle">
                    <h2 class="s-header"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['cart']['block_name'])===null||$tmp==='' ? "Shopping cart" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h2>
                    <a class="s-delete-button js-clear-cart" href="javascript:void(0);">
                        <?php $_smarty_tpl->tpl_vars['_svg_icon'] = new Smarty_variable('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.9 9.9"><path d="M0,8.5l3.5-3.5L0,1.4L1.4,0l3.5,3.5L8.5,0l1.4,1.4L6.4,4.9l3.5,3.5L8.5,9.9L4.9,6.4L1.4,9.9L0,8.5z"/></svg>', null, 0);?>
                        <span class="s-delete-icon"><?php echo $_smarty_tpl->tpl_vars['_svg_icon']->value;?>
</span>Delete all products
                    </a>
                </div>
                <div class="s-section-body">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cart(array("DEBUG"=>true,"wrapper"=>"#js-order-cart"));?>

                </div>
                <div class="s-section-footer">

                    <div class="s-back-link">
                        <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['_refer_url'] = new Smarty_variable(waRequest::server('HTTP_REFERER'), null, 0);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['_refer_url']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['_refer_host'] = new Smarty_variable(parse_url($_smarty_tpl->tpl_vars['_refer_url']->value,@constant('PHP_URL_HOST')), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_current_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->currentUrl(true), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_current_host'] = new Smarty_variable(parse_url($_smarty_tpl->tpl_vars['_current_url']->value,@constant('PHP_URL_HOST')), null, 0);?>

                            <?php if ($_smarty_tpl->tpl_vars['_refer_host']->value===$_smarty_tpl->tpl_vars['_current_host']->value){?>
                                <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['_refer_url']->value, null, 0);?>
                            <?php }?>
                        <?php }?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="svg-icon back size-10"></i> Back to shopping</a>
                    </div>

                </div>
            </section>

            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_cross_selling_html", null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->crossSelling(array("DEBUG"=>true,"wrapper"=>"#js-cross-selling-section"));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (!empty($_smarty_tpl->tpl_vars['_cross_selling_html']->value)){?>
                <section class="s-order-section s-cross-selling-section" id="js-cross-selling-section">
                    <div class="s-section-header">
                        <h2 class="s-header"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['recommendations']['block_name'])===null||$tmp==='' ? "Recommended" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h2>
                    </div>
                    <div class="s-section-body">
                        <?php echo $_smarty_tpl->tpl_vars['_cross_selling_html']->value;?>

                    </div>
                </section>
            <?php }?>

        </div>
        <div class="s-order-column">

            <section class="s-order-section" id="js-order-form">
                <div class="s-section-header">
                    <h2 class="s-header"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['order']['block_name'])===null||$tmp==='' ? "Checkout" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h2>
                </div>
                <div class="s-section-body">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->form(array("DEBUG"=>true,"wrapper"=>"#js-order-form"));?>

                </div>
            </section>

        </div>

        <script>
            ( function($) {

                ( typeof window.ShopOrderPage === "function" ? init() : load().then(init) );

                function load() {
                    var deferred = $.Deferred();

                    $.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/order.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
", function() {
                        deferred.resolve();
                    });

                    return deferred.promise();
                }

                function init() {
                    new window.ShopOrderPage({
                        $wrapper: $("#js-checkout-order-page")
                    });
                }

            })(jQuery);
        </script>
    </div>
<?php }?>

<!-- plugin hook: 'frontend_order' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>