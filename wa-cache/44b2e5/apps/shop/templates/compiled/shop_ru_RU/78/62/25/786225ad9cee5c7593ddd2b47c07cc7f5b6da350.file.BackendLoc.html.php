<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:44:02
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:17370326246244b3024d7b47-39894184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786225ad9cee5c7593ddd2b47c07cc7f5b6da350' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17370326246244b3024d7b47-39894184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b3024fc101_08935821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b3024fc101_08935821')) {function content_6244b3024fc101_08935821($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>