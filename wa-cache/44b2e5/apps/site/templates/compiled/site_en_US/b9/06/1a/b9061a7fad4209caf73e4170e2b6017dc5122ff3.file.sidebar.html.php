<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 09:34:37
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:670124396624680dd34f874-03023979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9061a7fad4209caf73e4170e2b6017dc5122ff3' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/sidebar.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670124396624680dd34f874-03023979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_is_personal_area' => 0,
    'wa' => 0,
    '_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624680dd359412_73649676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624680dd359412_73649676')) {function content_624680dd359412_73649676($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['_is_personal_area']->value)){?><?php $_smarty_tpl->tpl_vars['_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_pages']->value)){?><section class="s-sidebar-section"><div class="s-section-body"><nav class="s-nav-wrapper"><?php smarty_template_function__renderPagesList($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['_pages']->value));?>
</nav></div></section><?php }?><?php }?><?php }} ?>