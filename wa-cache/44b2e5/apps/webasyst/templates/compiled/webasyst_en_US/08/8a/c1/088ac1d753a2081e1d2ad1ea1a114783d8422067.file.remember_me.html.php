<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 12:27:44
         compiled from "/home/miricouz/xx.uz/wa-system/login/templates/login/backend/remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:1949707848624557f0834de7-80374165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '088ac1d753a2081e1d2ad1ea1a114783d8422067' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/login/templates/login/backend/remember_me.html',
      1 => 1541778420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949707848624557f0834de7-80374165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_624557f083dac2_89472367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624557f083dac2_89472367')) {function content_624557f083dac2_89472367($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Remember me
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>