<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:43:48
         compiled from "/home/miricouz/xx.uz/wa-apps/site/templates/actions-legacy/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:4417909666244b2f4c0db28-72722928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '635f66183572fb6104b571e64465d2875b37f5c9' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/site/templates/actions-legacy/backend/BackendLoc.html',
      1 => 1624000810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4417909666244b2f4c0db28-72722928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b2f4c33099_63971284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b2f4c33099_63971284')) {function content_6244b2f4c33099_63971284($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>