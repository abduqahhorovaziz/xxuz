<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 15:11:09
         compiled from "/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/error.html" */ ?>
<?php /*%%SmartyHeaderCode:14572075746246cfbd852139-90374915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c2e85d12ce061db4f869e35f1b66f6b98fd9f8' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/site/themes/hypermarket/error.html',
      1 => 1639954885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14572075746246cfbd852139-90374915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6246cfbd915cb2_13274076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6246cfbd915cb2_13274076')) {function content_6246cfbd915cb2_13274076($_smarty_tpl) {?><div class="s-error-page"><h1 class="s-error-header">Error<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?>: <?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
<?php }?></h1><h3 class="s-error-text"><?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Error<?php }?></h3></div><?php }} ?>