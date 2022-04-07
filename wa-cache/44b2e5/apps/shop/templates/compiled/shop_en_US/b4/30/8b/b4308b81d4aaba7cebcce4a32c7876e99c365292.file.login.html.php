<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:18:51
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/login.html" */ ?>
<?php /*%%SmartyHeaderCode:201974727062468b3b276ab9-73574562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4308b81d4aaba7cebcce4a32c7876e99c365292' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/templates/actions/frontend/order/form/dialog/login.html',
      1 => 1548948060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201974727062468b3b276ab9-73574562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468b3b2a8df3_20550929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468b3b2a8df3_20550929')) {function content_62468b3b2a8df3_20550929($_smarty_tpl) {?><div class="wa-order-dialog wa-auth-dialog-wrapper">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body with-full-height without-footer">
        <header class="wa-dialog-header">
            <div class="wa-header">Login</div>
            <span class="wa-close-wrapper js-close-dialog">
                <i class="wa-icon delete size-10"><svg><use xlink:href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/frontend/order/svg/sprite.svg?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
#delete"></use></svg></i>
            </span>
        </header>

        <div class="wa-dialog-content">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm('',array('show_oauth_adapters'=>true,'need_redirects'=>false));?>

        </div>
    </div>
</div>
<?php }} ?>