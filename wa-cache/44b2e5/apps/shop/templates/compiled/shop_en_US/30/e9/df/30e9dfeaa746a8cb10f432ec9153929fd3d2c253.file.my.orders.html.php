<?php /* Smarty version Smarty-3.1.14, created on 2022-04-05 15:20:10
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/my.orders.html" */ ?>
<?php /*%%SmartyHeaderCode:1570015678624c17da8a0282-26566654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e9dfeaa746a8cb10f432ec9153929fd3d2c253' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/my.orders.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570015678624c17da8a0282-26566654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    'wa' => 0,
    'orders' => 0,
    '_order' => 0,
    'i' => 0,
    'frontend_my_orders' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624c17da939834_19213529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624c17da939834_19213529')) {function content_624c17da939834_19213529($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("My orders", null, 0);?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader",$_smarty_tpl->tpl_vars['_title']->value);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isMyAccount",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isOrdersPage",true);?>
<div class="s-orders-page"><?php if (!empty($_smarty_tpl->tpl_vars['orders']->value)){?><div class="s-orders-list"><?php  $_smarty_tpl->tpl_vars['_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_order']->key => $_smarty_tpl->tpl_vars['_order']->value){
$_smarty_tpl->tpl_vars['_order']->_loop = true;
?><div class="s-order-section <?php echo $_smarty_tpl->tpl_vars['_order']->value['state_id'];?>
"><div class="s-section-header"><div class="s-layout"><div class="s-column"><a class="s-name" href="<?php echo $_smarty_tpl->tpl_vars['_order']->value['url'];?>
">Order <?php echo $_smarty_tpl->tpl_vars['_order']->value['id_str'];?>
</a><span class="s-date">from <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_order']->value['create_datetime'],'humandate');?>
</span><span class="s-time"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_order']->value['create_datetime'],'time');?>
</span></div><div class="s-column right"><a href="<?php echo $_smarty_tpl->tpl_vars['_order']->value['url'];?>
" class="s-order-status nowrap" style="<?php echo $_smarty_tpl->tpl_vars['_order']->value['state']->getStyle(1);?>
"><?php echo $_smarty_tpl->tpl_vars['_order']->value['state']->getName();?>
</a></div></div></div><div class="s-section-body"><div class="s-layout fixed"><div class="s-column"><?php if (!empty($_smarty_tpl->tpl_vars['_order']->value['shipping_name'])){?><div class="s-block"><div><span class="s-label">Shipping method:</span></div><div class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_order']->value['shipping_name'], ENT_QUOTES, 'UTF-8', true);?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_order']->value['payment_name'])){?><div class="s-block"><div><span class="s-label">Payment method:</span></div><div class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_order']->value['payment_name'], ENT_QUOTES, 'UTF-8', true);?>
</div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_order']->value['total'])){?><div class="s-price-wrapper"><span class="s-label">Amount:</span><span class="s-price"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['_order']->value['total'],$_smarty_tpl->tpl_vars['_order']->value['currency']);?>
</span></div><?php }?></div><div class="s-column"><?php if (!empty($_smarty_tpl->tpl_vars['_order']->value['items'])){?><ul class="s-items-list"><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><li class="s-item"><span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span> x <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</li><?php } ?></ul><?php }?><div class="s-link-wrapper"><a class="s-order-link" href="<?php echo $_smarty_tpl->tpl_vars['_order']->value['url'];?>
">More info...</a></div></div></div></div></div><?php } ?></div><?php }else{ ?><p>You have no order history yet.</p><?php }?><!-- plugin hook: 'frontend_my_orders' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_my_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?></div><?php }} ?>