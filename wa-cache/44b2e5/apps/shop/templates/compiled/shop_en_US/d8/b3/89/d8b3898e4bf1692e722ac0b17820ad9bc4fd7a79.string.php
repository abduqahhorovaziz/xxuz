<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 11:20:37
         compiled from "d8b3898e4bf1692e722ac0b17820ad9bc4fd7a79" */ ?>
<?php /*%%SmartyHeaderCode:1961140809624699b5b7f328-95966006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b3898e4bf1692e722ac0b17820ad9bc4fd7a79' => 
    array (
      0 => 'd8b3898e4bf1692e722ac0b17820ad9bc4fd7a79',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1961140809624699b5b7f328-95966006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_background_color' => 0,
    '_main_border_color' => 0,
    '_border_color' => 0,
    'order' => 0,
    'status' => 0,
    'wa' => 0,
    'order_url' => 0,
    '_button_background' => 0,
    '_products_bg' => 0,
    'item' => 0,
    '_border_style' => 0,
    '_is_service' => 0,
    'subtotal' => 0,
    'customer' => 0,
    'shipping_address' => 0,
    'billing_address' => 0,
    'is_affiliate_enabled' => 0,
    '_bonus_background' => 0,
    'add_affiliate_bonus' => 0,
    'signup_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624699b5c266c4_10168330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624699b5c266c4_10168330')) {function content_624699b5c266c4_10168330($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php $_smarty_tpl->tpl_vars['_background_color'] = new Smarty_variable("#eeeeee", null, 0);?><?php $_smarty_tpl->tpl_vars['_products_bg'] = new Smarty_variable("#ffffff", null, 0);?><?php $_smarty_tpl->tpl_vars['_bonus_background'] = new Smarty_variable("#ffffcc", null, 0);?><?php $_smarty_tpl->tpl_vars['_button_background'] = new Smarty_variable("#fcd630", null, 0);?><?php $_smarty_tpl->tpl_vars['_main_border_color'] = new Smarty_variable("#cccccc", null, 0);?><?php $_smarty_tpl->tpl_vars['_border_color'] = new Smarty_variable("#dddddd", null, 0);?><table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="<?php echo $_smarty_tpl->tpl_vars['_background_color']->value;?>
" style="font-family:Helvetica,Arial,sans-serif;letter-spacing:normal;text-indent:0;text-transform:none;word-spacing:0;background-color:rgb(232,232,232);border-collapse:collapse"><tr><td style="padding: 20px;"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="width: 600px !important;background-color:#fff;border:1px solid <?php echo $_smarty_tpl->tpl_vars['_main_border_color']->value;?>
;border-radius: 4px;margin:auto;overflow: hidden;"><!-- HEADER --><tr><td width="50" style="width:50px !important; border: solid <?php echo $_smarty_tpl->tpl_vars['_border_color']->value;?>
; border-width: 0 0 1px 0;"></td><td height="70" align="center" valign="middle" style="border: solid <?php echo $_smarty_tpl->tpl_vars['_border_color']->value;?>
; border-width: 0 0 1px 0;"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100% !important;"><tr><td><font style="font-weight: bold; font-size: 20px; margin: 0 12px 0 0;"><b><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</b></font><font style="color: #888"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['order']->value['create_datetime'],'humandate');?>
</font></td><td style="text-align: right;"><font style="<?php if (!empty($_smarty_tpl->tpl_vars['order']->value['style'])){?><?php echo $_smarty_tpl->tpl_vars['order']->value['style'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</font></td></tr></table></td><td width="50" style="width:50px !important; border: solid <?php echo $_smarty_tpl->tpl_vars['_border_color']->value;?>
; border-width: 0 0 1px 0;"></td></tr><!-- STATUS --><tr><td></td><td><table cellspacing="0" border="0" cellpadding="0" width="100%" style="border-collapse:collapse"><tr><td><p style="color:rgb(48,48,48);font-style:normal;font-variant:normal;font-weight:normal;font-size:14px;line-height:16px;font-family:Helvetica,Arial,sans-serif;margin: 20px 0 0;text-align:center;">Thank you for shopping at <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("name");?>
!</p><p align="center" style="margin: 20px 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['order_url']->value;?>
" style="text-decoration:none;font-style:normal;font-variant:normal;font-weight:normal;font-size:17px;line-height:40px;font-family:Helvetica,Arial,sans-serif;color:rgb(48,48,48);display:block;width:225px;background: <?php echo $_smarty_tpl->tpl_vars['_button_background']->value;?>
;border-radius: 4px;" target="_blank">Order status</a></p><?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['auth_pin'])){?><p style="color:rgb(48,48,48);font-style:normal;font-variant:normal;font-weight:normal;font-size:14px;line-height:16px;font-family:Helvetica,Arial,sans-serif;margin: 20px 0;text-align:center;text-transform: uppercase;">PIN: <b><?php echo $_smarty_tpl->tpl_vars['order']->value['params']['auth_pin'];?>
</b></p><?php }?></td></tr></table></td><td></td></tr><!-- LIST --><tr><td bgcolor="<?php echo $_smarty_tpl->tpl_vars['_products_bg']->value;?>
"></td><td bgcolor="<?php echo $_smarty_tpl->tpl_vars['_products_bg']->value;?>
" style=""><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><?php $_smarty_tpl->tpl_vars['subtotal'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?><?php $_smarty_tpl->tpl_vars['_border_style'] = new Smarty_variable("border: 0;", null, 0);?><?php $_smarty_tpl->tpl_vars['_is_service'] = new Smarty_variable(($_smarty_tpl->tpl_vars['item']->value['type']=="service"), null, 0);?><?php if ($_smarty_tpl->tpl_vars['item']->index>0){?><?php $_smarty_tpl->tpl_vars['_border_style'] = new Smarty_variable("border: solid `".((string)$_smarty_tpl->tpl_vars['_border_color']->value)."`; border-width: 1px 0  0;", null, 0);?><?php }?><tr><td width="40" style="padding: 8px 4px 8px 0; <?php echo $_smarty_tpl->tpl_vars['_border_style']->value;?>
"><?php if (!$_smarty_tpl->tpl_vars['_is_service']->value&&!empty($_smarty_tpl->tpl_vars['item']->value['product']['image']['crop_url'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']['image']['crop_url'];?>
" alt="" style="width: 48px; height: 48px; vertical-align: middle;"><?php }?></td><td style="padding: 8px 0 8px 4px; <?php echo $_smarty_tpl->tpl_vars['_border_style']->value;?>
"><p style="font-style:normal;font-variant:normal;font-weight:normal;font-size: <?php if ($_smarty_tpl->tpl_vars['_is_service']->value){?>12<?php }else{ ?>14<?php }?>px;line-height:16px;font-family:Helvetica,Arial,sans-serif;"><?php if (!$_smarty_tpl->tpl_vars['_is_service']->value){?><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['product']['frontend_url'])===null||$tmp==='' ? 'javascript:void(0);' : $tmp);?>
"><font style="text-decoration: underline;"><?php if ($_smarty_tpl->tpl_vars['_is_service']->value){?>+&nbsp;<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</font><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['sku_code'])){?> <font style="color: #aaaaaa; font-size: 0.8em;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_code'], ENT_QUOTES, 'UTF-8', true);?>
</font><?php }?></a><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_is_service']->value){?>+&nbsp;<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['sku_code'])){?> <font style="color: #aaaaaa; font-size: 0.8em;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_code'], ENT_QUOTES, 'UTF-8', true);?>
</font><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['download_link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['download_link'];?>
"><strong>Download</strong></a><?php }?></p></td><td style="padding: 8px 4px 8px 4px; white-space: nowrap; text-align: right; <?php echo $_smarty_tpl->tpl_vars['_border_style']->value;?>
"><font style="color:#aaa;"><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
&nbsp;&times;</font>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td><td style="padding: 8px 0 8px 8px; white-space: nowrap; text-align: right; <?php echo $_smarty_tpl->tpl_vars['_border_style']->value;?>
"><font style="font-weight: bold;"><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</font></td></tr><?php $_smarty_tpl->tpl_vars['subtotal'] = new Smarty_variable($_smarty_tpl->tpl_vars['subtotal']->value+$_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'], null, 0);?><?php } ?></table></td><td bgcolor="<?php echo $_smarty_tpl->tpl_vars['_products_bg']->value;?>
"></td></tr><tr><td></td><td style="padding: 20px 0; border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['_border_color']->value;?>
"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; text-align: right;"><tr><td style="padding: 8px 0;">Subtotal</td><td style="white-space: nowrap; width: 20%; padding: 8px 0 8px 8px;"><?php echo wa_currency($_smarty_tpl->tpl_vars['subtotal']->value,$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td></tr><?php if (!empty((float)$_smarty_tpl->tpl_vars['order']->value['discount'])){?><tr><td style="padding: 8px 0;">Discount</td><td style="white-space: nowrap; padding: 8px 0 8px 8px;">− <?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['discount'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td></tr><?php }?><tr><td style="padding: 8px 0;">Shipping</td><td style="white-space: nowrap; padding: 8px 0 8px 8px;"><?php if (empty((float)$_smarty_tpl->tpl_vars['order']->value['shipping'])){?>free<?php }else{ ?><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['shipping'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
<?php }?></td></tr><?php if (!empty($_smarty_tpl->tpl_vars['order']->value['tax'])){?><tr><td style="padding: 8px 0;">Tax</td><td style="white-space: nowrap; padding: 8px 0 8px 8px;"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['tax'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td></tr><?php }?><tr><td style="padding: 8px 0;"><h3 style="font-size:18px;margin:0;">Total</h3></td><td style="white-space: nowrap; padding: 8px 0 8px 8px;"><h3 style="font-size:18px;margin:0;"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['total'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</h3></td></tr></table></td><td></td></tr><!-- DETAILS --><tr><td style="border: 0;"></td><td style="border: 0; padding: 16px 0 0;"><?php if (strlen($_smarty_tpl->tpl_vars['customer']->value->get('email','default'))){?><p style="margin: 10px 0 0;">Email: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->get('email','default'), ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?><?php if (strlen($_smarty_tpl->tpl_vars['customer']->value->get('phone','default'))){?><p style="margin: 10px 0 0;">Phone: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->get('phone','default'), ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?></td><td style="border: 0;"></td></tr><?php if ($_smarty_tpl->tpl_vars['order']->value['comment']){?><tr><td style="border: 0;"></td><td style="border: 0; padding: 16px 0 0;"><h3>Comment to the order</h3><p style="margin: 10px 0 0;"><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</pre></p></td><td style="border: 0;"></td></tr><?php }?><tr><td style="border: 0;"></td><td style="border: 0; padding: 16px 0;"><b><?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'])){?><font style="color: #aaa;">Shipping&nbsp;—</font>&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'];?>
<?php }else{ ?><font style="color: #aaa;">Shipping</font><?php }?></b><p style="margin: 10px 0 0;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value;?>
</p></td><td style="border: 0;"></td></tr><tr><td style="border: 0;"></td><td style="border: 0; padding: 16px 0;"><b><?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['payment_name'])){?><font style="color: #aaa;">Payment&nbsp;—</font>&nbsp;<?php echo $_smarty_tpl->tpl_vars['order']->value['params']['payment_name'];?>
<?php }else{ ?><font style="color: #aaa;">Payment</font><?php }?></b><p style="margin: 10px 0 0;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><?php echo $_smarty_tpl->tpl_vars['billing_address']->value;?>
</p></td><td style="border: 0;"></td></tr><!-- BONUS POINTS --><?php if ($_smarty_tpl->tpl_vars['is_affiliate_enabled']->value){?><tr><td style="background: <?php echo $_smarty_tpl->tpl_vars['_bonus_background']->value;?>
;"></td><td height="50" align="center" style="background: <?php echo $_smarty_tpl->tpl_vars['_bonus_background']->value;?>
; padding: 16px 0;"><?php if ($_smarty_tpl->tpl_vars['add_affiliate_bonus']->value){?><p style="font-style:normal;font-variant:normal;font-size:16px;line-height:16px;font-family:Helvetica,Arial,sans-serif;margin: 0;color:rgb(48,48,48);"><b><?php echo sprintf("This order will add +%s points to your affiliate bonus.",round($_smarty_tpl->tpl_vars['add_affiliate_bonus']->value,2));?>
</b></p><p style="margin: 16px 0 0;"><?php if ($_smarty_tpl->tpl_vars['signup_url']->value){?>Registered customers apply for affiliate bonuses and discounts on future orders.&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['signup_url']->value;?>
" target="_blank">Create permanent user account</a><?php }else{ ?><?php echo sprintf('When this order is paid, your affiliate bonus will be increased to %s.',round($_smarty_tpl->tpl_vars['customer']->value['affiliate_bonus']+$_smarty_tpl->tpl_vars['add_affiliate_bonus']->value,2));?>
<?php }?></p><?php }?></td><td style="background: <?php echo $_smarty_tpl->tpl_vars['_bonus_background']->value;?>
"></td></tr><?php }else{ ?><br><br><?php }?></table><!-- BOTTOM SITE INFORMATION --><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tr><td valign="middle" align="center" height="45"><p style="font-style:normal;font-variant:normal;font-weight:normal;font-size:13px;line-height:16px;font-family:Arial,sans-serif,Helvetica;color:rgb(147,154,164);margin: 20px 0 0;">&copy;&nbsp;<?php echo date("Y");?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("name");?>
<br><a href="http://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['params']['storefront_decoded'])===null||$tmp==='' ? '' : $tmp);?>
" target="_blank"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['params']['storefront_decoded'])===null||$tmp==='' ? '' : $tmp);?>
</a></p></td></tr></table></td></tr></table>
<?php }} ?>