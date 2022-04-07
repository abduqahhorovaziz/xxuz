<?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:18:51
         compiled from "/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:50112363862468b3b322c43-25477657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c856dd24d97344fb149be712dbede599ebb2b81' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/form.html',
      1 => 1603782660,
      2 => 'file',
    ),
    '1486e3b3ae68211a6a7fd50e12e0942ae88034bc' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/oauth_adapters.html',
      1 => 1620889007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50112363862468b3b322c43-25477657',
  'function' => 
  array (
    'FORM_BEGIN' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'FORM_END' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'login_url' => 0,
    'show_title' => 0,
    'renderer' => 0,
    'show_sub_title' => 0,
    'show_oauth_adapters' => 0,
    'fields' => 0,
    'field_id' => 0,
    'params' => 0,
    'is_onetime_password_auth_type' => 0,
    'onetime_password_url' => 0,
    'signup_url' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62468b3b392b80_09905828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62468b3b392b80_09905828')) {function content_62468b3b392b80_09905828($_smarty_tpl) {?>

<?php if (!function_exists('smarty_template_function_FORM_BEGIN')) {
    function smarty_template_function_FORM_BEGIN($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['FORM_BEGIN']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div data-action="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" class="js-wa-form-item">
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_FORM_END')) {
    function smarty_template_function_FORM_END($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['FORM_END']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php smarty_template_function_FORM_BEGIN($_smarty_tpl,array());?>


    <?php if (!empty($_smarty_tpl->tpl_vars['show_title']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderTitle();?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


    <?php if ($_smarty_tpl->tpl_vars['show_sub_title']->value){?>
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderSubtitle();?>

    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['show_oauth_adapters']->value)){?>
        <?php /*  Call merged included template "./oauth_adapters.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./oauth_adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '50112363862468b3b322c43-25477657');
content_62468b3b34f338_95949627($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./oauth_adapters.html" */?>
    <?php }?>

    <div class="wa-login-form-fields js-login-form-fields-block">
        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderRememberMe();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>

    </div>

    <div class="wa-login-form-actions js-login-form-actions">
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


        <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
            <div class="wa-request-onetime-password-button-wrapper">
                <button class="button wa-request-onetime-password-button" data-href="<?php echo $_smarty_tpl->tpl_vars['onetime_password_url']->value;?>
">Sign in</button>
                <i class="icon16 loading wa-loading wa-request-onetime-password-button-loading" style="display: none;"></i>
            </div>
        <?php }?>

        <div class="wa-buttons-wrapper" style="<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>display:none;<?php }?>">
            <input type="hidden" name="wa_auth_login" value="1">
            <input type="submit" value="Sign in" class="wa-login-submit">
            <i class="icon16 loading wa-loading" style="display: none;"></i>
        </div>

        <div class="wa-signup-url">
            For the first time with us? <a href="<?php echo $_smarty_tpl->tpl_vars['signup_url']->value;?>
" data-type="signup">Sign Up</a>
        </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>



<?php smarty_template_function_FORM_END($_smarty_tpl,array());?>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-01 10:18:51
         compiled from "/home/miricouz/xx.uz/wa-system/login/templates/login/frontend/oauth_adapters.html" */ ?>
<?php if ($_valid && !is_callable('content_62468b3b34f338_95949627')) {function content_62468b3b34f338_95949627($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?><?php $_smarty_tpl->tpl_vars['oauth_adapter_sizes'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->defaultAuthAdapterWindowSizes(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?><section class="wa-adapters-section"><?php $_smarty_tpl->tpl_vars['linked_adapters'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['other_adapters'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['wa']->value->user(((string)$_smarty_tpl->tpl_vars['a']->value->getId())."_id")){?><?php $_smarty_tpl->createLocalArrayVariable('linked_adapters', null, 0);
$_smarty_tpl->tpl_vars['linked_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('other_adapters', null, 0);
$_smarty_tpl->tpl_vars['other_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['other_adapters']->value){?><div class="wa-section-header">Via social media</div><ul class="wa-adapters-list"><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getName(), null, 0);?><li><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value->getUrl();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['oauth_adapter_sizes']->value[$_smarty_tpl->tpl_vars['_id']->value]['width'];?>
"data-height="<?php echo $_smarty_tpl->tpl_vars['oauth_adapter_sizes']->value[$_smarty_tpl->tpl_vars['_id']->value]['height'];?>
"><img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['a']->value->getIcon();?>
"/></a></li><?php } ?></ul><div class="wa-section-divider"><span class="wa-text">or</span></div><?php }?></section><?php }?>
<?php }} ?>