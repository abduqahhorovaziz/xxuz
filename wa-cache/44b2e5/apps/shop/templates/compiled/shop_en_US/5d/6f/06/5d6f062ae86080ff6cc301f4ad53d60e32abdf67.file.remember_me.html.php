<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:18:51
         compiled from "/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:170637318462468b3b4e7ce4-92175558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6f062ae86080ff6cc301f4ad53d60e32abdf67' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/remember_me.html',
      1 => 1541667600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170637318462468b3b4e7ce4-92175558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468b3b4ed9a8_05192890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468b3b4ed9a8_05192890')) {function content_62468b3b4ed9a8_05192890($_smarty_tpl) {?><div class="wa-field wa-field-remember-me">
    <div class="wa-value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Remember me
        </label>
    </div>
</div>
<?php }} ?>