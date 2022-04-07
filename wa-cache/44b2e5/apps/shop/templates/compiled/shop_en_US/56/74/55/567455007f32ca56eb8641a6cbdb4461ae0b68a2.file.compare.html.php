<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 18:04:27
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/compare.html" */ ?>
<?php /*%%SmartyHeaderCode:20038085086246f85bedfd92-02245269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567455007f32ca56eb8641a6cbdb4461ae0b68a2' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/compare.html',
      1 => 1639954883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20038085086246f85bedfd92-02245269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'products' => 0,
    '_product' => 0,
    'wa_theme_url' => 0,
    '_i' => 0,
    '_product_rate' => 0,
    '_delta' => 0,
    '_icon_class' => 0,
    '_product_url' => 0,
    '_available' => 0,
    '_badge_html' => 0,
    'features' => 0,
    '_feature' => 0,
    '_tr_classes' => 0,
    '_feature_id' => 0,
    '_product_feature' => 0,
    '_product_count' => 0,
    '_product_names' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6246f85c0f9bc7_10778879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6246f85c0f9bc7_10778879')) {function content_6246f85c0f9bc7_10778879($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("hideSidebar",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("isComparePage",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader","Compare products");?>
<div class="s-compare-page" id="js-compare-page"><?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?><?php $_smarty_tpl->tpl_vars['_product_names'] = new Smarty_variable(array(), null, 0);?><div class="s-table-wrapper"><table class="s-compare-table"><thead><tr><th class="s-actions-column"><div class="s-compare-filter js-compare-filter"><div class="line"><span class="bold">Show product features:</span></div><div class="line"><label><input class="s-toggle" type="radio" name="type" value="all" checked> All features</label></div><div class="line"><label><input class="s-toggle" type="radio" name="type" value="diff"> Different</label></div></div><div class="s-reset-wrapper"><input class="s-reset-button js-reset-compare" type="button" value="Clear comparison list"></div></th><?php  $_smarty_tpl->tpl_vars['_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_product']->key => $_smarty_tpl->tpl_vars['_product']->value){
$_smarty_tpl->tpl_vars['_product']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['_product']->value['badge']), null, 0);?><?php $_smarty_tpl->tpl_vars['_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['_product']->value['count']===null||$_smarty_tpl->tpl_vars['_product']->value['count']>0, null, 0);?><td class="s-product-column"><div class="s-product-wrapper" data-id="<?php echo $_smarty_tpl->tpl_vars['_product']->value['id'];?>
"><form class="s-product-form" <?php if ($_smarty_tpl->tpl_vars['_product']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['_product']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['_product']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><div class="s-image-wrapper"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/product/',array('product_url'=>$_smarty_tpl->tpl_vars['_product']->value['url']));?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['_product']->value,'96x96',array('itemprop'=>'image','default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/svg/empty_photo.svg"));?>
</a></div><div class="s-name-wrapper"><a class="s-name" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/product/',array('product_url'=>$_smarty_tpl->tpl_vars['_product']->value['url']));?>
"><?php echo $_smarty_tpl->tpl_vars['_product']->value['name'];?>
</a></div><div class="s-rate-wrapper"><?php $_smarty_tpl->tpl_vars['_product_rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['_product']->value['rating'],1), null, 0);?><?php $_smarty_tpl->tpl_vars['_i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['_i']->step = 1;$_smarty_tpl->tpl_vars['_i']->total = (int)ceil(($_smarty_tpl->tpl_vars['_i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['_i']->step));
if ($_smarty_tpl->tpl_vars['_i']->total > 0){
for ($_smarty_tpl->tpl_vars['_i']->value = 0, $_smarty_tpl->tpl_vars['_i']->iteration = 1;$_smarty_tpl->tpl_vars['_i']->iteration <= $_smarty_tpl->tpl_vars['_i']->total;$_smarty_tpl->tpl_vars['_i']->value += $_smarty_tpl->tpl_vars['_i']->step, $_smarty_tpl->tpl_vars['_i']->iteration++){
$_smarty_tpl->tpl_vars['_i']->first = $_smarty_tpl->tpl_vars['_i']->iteration == 1;$_smarty_tpl->tpl_vars['_i']->last = $_smarty_tpl->tpl_vars['_i']->iteration == $_smarty_tpl->tpl_vars['_i']->total;?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star-empty", null, 0);?><?php if ($_smarty_tpl->tpl_vars['_i']->value<$_smarty_tpl->tpl_vars['_product_rate']->value){?><?php $_smarty_tpl->tpl_vars['_delta'] = new Smarty_variable($_smarty_tpl->tpl_vars['_product_rate']->value-$_smarty_tpl->tpl_vars['_i']->value, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_delta']->value>=1){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star", null, 0);?><?php }elseif(round($_smarty_tpl->tpl_vars['_delta']->value)==1){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("star-half", null, 0);?><?php }?><?php }?><i class="s-rate-item svg-icon <?php echo $_smarty_tpl->tpl_vars['_icon_class']->value;?>
 size-12"></i><?php }} ?><?php $_smarty_tpl->tpl_vars['_product_url'] = new Smarty_variable(reset(ref(explode('?',$_smarty_tpl->tpl_vars['_product']->value['frontend_url']))), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['_product_url']->value;?>
reviews/" class="s-rating-hint"> <?php if (!empty($_smarty_tpl->tpl_vars['_product']->value['rating_count'])){?><?php echo $_smarty_tpl->tpl_vars['_product']->value['rating_count'];?>
<?php }else{ ?>0<?php }?></a></div><div class="s-price-wrapper"><div class="s-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['_product']->value['price']);?>
</div><div class="s-compare"><?php if (!empty($_smarty_tpl->tpl_vars['_product']->value['compare_price'])){?><span class="strike"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['_product']->value['compare_price']);?>
</span><?php }else{ ?>&nbsp;<?php }?></div></div><div class="s-actions-wrapper"><div class="s-layout"><div class="s-column middle"><input class="js-add-button" type="submit" value="Buy" <?php if (empty($_smarty_tpl->tpl_vars['_available']->value)){?>disabled<?php }?>></div><div class="s-column middle right"><a class="s-remove-button js-remove-button" href="<?php echo $_smarty_tpl->tpl_vars['_product']->value['delete_url'];?>
" title="Remove from comparison list"><i class="svg-icon delete size-16 top"></i></a></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['_badge_html']->value)){?><div class="s-badge-wrapper is-corner"><?php echo $_smarty_tpl->tpl_vars['_badge_html']->value;?>
</div><?php }?><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['_product']->value['id'];?>
"></form></div><?php $_smarty_tpl->createLocalArrayVariable('_product_names', null, 0);
$_smarty_tpl->tpl_vars['_product_names']->value[] = $_smarty_tpl->tpl_vars['_product']->value['name'];?></td><?php } ?></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_feature']->_loop = false;
 $_smarty_tpl->tpl_vars['_feature_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_feature']->key => $_smarty_tpl->tpl_vars['_feature']->value){
$_smarty_tpl->tpl_vars['_feature']->_loop = true;
 $_smarty_tpl->tpl_vars['_feature_id']->value = $_smarty_tpl->tpl_vars['_feature']->key;
?><?php $_smarty_tpl->tpl_vars['_tr_classes'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_feature']->value['same'])){?><?php $_smarty_tpl->createLocalArrayVariable('_tr_classes', null, 0);
$_smarty_tpl->tpl_vars['_tr_classes']->value[] = "same";?><?php }?><?php if ($_smarty_tpl->tpl_vars['_feature']->value['type']=='divider'){?><?php $_smarty_tpl->createLocalArrayVariable('_tr_classes', null, 0);
$_smarty_tpl->tpl_vars['_tr_classes']->value[] = "divider";?><?php }?><?php $_smarty_tpl->tpl_vars['_product_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?><tr class="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_tr_classes']->value," ");?>
"><?php if ($_smarty_tpl->tpl_vars['_feature']->value['type']!=='divider'){?><th class="s-column-name"><?php echo $_smarty_tpl->tpl_vars['_feature']->value['name'];?>
</th><?php  $_smarty_tpl->tpl_vars['_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_product']->key => $_smarty_tpl->tpl_vars['_product']->value){
$_smarty_tpl->tpl_vars['_product']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_product_feature'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_product']->value['features'][$_smarty_tpl->tpl_vars['_feature_id']->value])){?><?php $_smarty_tpl->tpl_vars['_product_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['_product']->value['features'][$_smarty_tpl->tpl_vars['_feature_id']->value], null, 0);?><?php }?><td><?php if ($_smarty_tpl->tpl_vars['_product_feature']->value){?><?php if (is_array($_smarty_tpl->tpl_vars['_product_feature']->value)){?><?php echo implode('<br> ',$_smarty_tpl->tpl_vars['_product_feature']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_product_feature']->value;?>
<?php }?><?php }else{ ?><span class="gray">&mdash;</span><?php }?></td><?php } ?><?php }else{ ?><th class="s-column-name" colspan="<?php echo $_smarty_tpl->tpl_vars['_product_count']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['_feature']->value['name'];?>
</th><?php }?></tr><?php } ?></tbody></table></div><?php echo $_smarty_tpl->tpl_vars['wa']->value->title(sprintf('Compare %s',smarty_modifier_join($_smarty_tpl->tpl_vars['_product_names']->value,", ")));?>
<?php }else{ ?><div class="s-empty-page"><p>Product comparison list is empty.</p></div><?php }?><script>( function($, waTheme) {new waTheme.init.shop.ComparePage({$wrapper: $("#js-compare-page"),locales: {added: "Added",buy: "Buy"}});})(jQuery, window.waTheme);</script></div><?php }} ?>