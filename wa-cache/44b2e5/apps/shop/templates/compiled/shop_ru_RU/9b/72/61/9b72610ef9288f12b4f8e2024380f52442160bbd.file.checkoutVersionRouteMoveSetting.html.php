<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:44:10
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:451913446244b30a62e872-68321482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b72610ef9288f12b4f8e2024380f52442160bbd' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '451913446244b30a62e872-68321482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b30a651609_53772711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b30a651609_53772711')) {function content_6244b30a651609_53772711($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>