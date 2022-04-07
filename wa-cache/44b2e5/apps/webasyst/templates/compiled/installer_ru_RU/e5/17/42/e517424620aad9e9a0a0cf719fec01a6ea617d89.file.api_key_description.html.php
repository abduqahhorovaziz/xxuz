<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:43:36
         compiled from "/home/miricouz/xx.uz/wa-system/push/adapters/onesignal/api_key_description.html" */ ?>
<?php /*%%SmartyHeaderCode:3551649066244b2e83b22e9-59978146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e517424620aad9e9a0a0cf719fec01a6ea617d89' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/push/adapters/onesignal/api_key_description.html',
      1 => 1565270340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3551649066244b2e83b22e9-59978146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_key_ok' => 0,
    'api_token_error' => 0,
    'domains' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b2e83c6108_44185187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b2e83c6108_44185187')) {function content_6244b2e83c6108_44185187($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['is_api_key_ok']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['api_token_error']->value){?>
        <p class="errormsg"><?php echo $_smarty_tpl->tpl_vars['api_token_error']->value;?>
</p>
    <?php }?>
    <p>Для уведомления пользователей бекенда требуется аккаунт в сервисе OneSignal.</p>
    <p><?php echo sprintf_wp("Please sign up at %s and copy <b>User Auth Key</b> from <b>Account &amp; API Keys</b> page.",'<a href="https://onesignal.com/" target="_blank">onesignal.com<i class="icon16 new-window"></i></a>');?>
</p>
<?php }else{ ?>
    <div class="js-hide-when-api-key-modified">
        <p class="hint">
            Для каждого домена, на котором работают ваши пользователи, нужна отдельная настройка в аккаунте OneSignal.
        </p>

        <table class="light" style="max-width: 200px; margin: 0 0 10px 0;">
            <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                <tr>
                    <td style="color: black;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['d']->value['connected']){?>
                        <td style="color: green;">Подключен</td>
                        <td></td>
                    <?php }else{ ?>
                        <td style="color: red;">Не подключен</td>
                    <?php }?>
                </tr>
            <?php } ?>
        </table>

        <p class="hint">
            Чтобы добавить другой домен, войдите в бекенд Webasyst на этом домене и сохраните настройки еще раз.
        </p>
    </div>
<?php }?><?php }} ?>