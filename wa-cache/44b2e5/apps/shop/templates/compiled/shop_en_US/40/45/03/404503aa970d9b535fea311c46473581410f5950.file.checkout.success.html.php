<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 11:20:39
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.success.html" */ ?>
<?php /*%%SmartyHeaderCode:997739292624699b707b700-34888234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404503aa970d9b535fea311c46473581410f5950' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/checkout.success.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997739292624699b707b700-34888234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_success' => 0,
    'theme_settings' => 0,
    'thankyou_content' => 0,
    'my_order_url' => 0,
    'order' => 0,
    'wa' => 0,
    'payment' => 0,
    'wa_app_url' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624699b70a1ec9_02799316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624699b70a1ec9_02799316')) {function content_624699b70a1ec9_02799316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="s-checkout-success"><section class="s-text-section"><?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value["checkout_payment_success_description"])){?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value["checkout_payment_success_description"];?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['thankyou_content']->value)){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['thankyou_content']->value,'$order_id',"<a href=\"".((string)$_smarty_tpl->tpl_vars['my_order_url']->value)."\" class=\"s-order-number\">".((string)$_smarty_tpl->tpl_vars['order']->value['id'])."</a>");?>
<?php }else{ ?><div>We successfully accepted your order, and will contact you asap.</div><div>Your order number is  <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/myOrder',array('id'=>$_smarty_tpl->tpl_vars['order']->value['_id']));?>
" class="s-order-number"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</a>.</div><?php }?></section><?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?><div class="s-plugin-wrapper"><?php echo $_smarty_tpl->tpl_vars['payment']->value;?>
</div><?php }?><p class="s-actions"><a class="s-link-back" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><i class="svg-icon back size-10"></i> Back to the store</a></p><!-- plugin hook: 'frontend_checkout' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?></div><?php }} ?>