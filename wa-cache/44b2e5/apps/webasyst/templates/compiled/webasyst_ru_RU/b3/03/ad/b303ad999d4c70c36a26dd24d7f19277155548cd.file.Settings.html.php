<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:45:26
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:12742310596244b3564373c3-30951249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b303ad999d4c70c36a26dd24d7f19277155548cd' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/settings/Settings.html',
      1 => 1642080641,
      2 => 'file',
    ),
    '8eeb08f5a27e36ff80941d3fd7038b0e0d2f4b1d' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/settings/SettingsSaveBtn.inc.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12742310596244b3564373c3-30951249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'settings' => 0,
    'logo' => 0,
    'logo_mode' => 0,
    'two_lines' => 0,
    'text_value' => 0,
    'gradients' => 0,
    'grad' => 0,
    'gradient' => 0,
    'selected' => 0,
    'locales' => 0,
    '_locale' => 0,
    '_locale_name' => 0,
    'locale_adapter' => 0,
    'locale_adapters_list' => 0,
    '_adapter' => 0,
    '_name' => 0,
    'image_adapters_list' => 0,
    'image_adapter' => 0,
    '_params' => 0,
    'config' => 0,
    'framework_version' => 0,
    'php_version' => 0,
    'is_good_php_version' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b3564edee4_50326179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b3564edee4_50326179')) {function content_6244b3564edee4_50326179($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Общие настройки — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/pickr/themes/classic.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/pickr/pickr.min.js" type="text/javascript"></script>
<div class="article s-general-settings-page" id="s-general-settings-page">
  <div class="article-body">
    <h1 class="s-page-title">Общие настройки</h1>
        <form action="?module=settingsGeneralSave" enctype="multipart/form-data" class="fields">
            <div class="fields-group">
                
                <div class="field">
                    <div class="name for-input">
                        <label for="config-name">Название компании</label>
                    </div>
                    <div class="value">
                        <input type="text" class="bold large long" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-name" autocomplete="off">
                        <p class="hint">Может отображаться на страницах сайтов и в email-уведомлениях.</p>
                        <p class="hint s-error js-error-place"></p>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name for-input">
                        <label for="config-url">Адрес сайта</label>
                    </div>
                    <div class="value">
                        <input type="text" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-url" autocomplete="off" class="long">
                        <p class="hint">Может использоваться на страницах сайтов и в email-уведомлениях.</p>
                        <p class="hint s-error js-error-place"></p>
                    </div>
                </div>


                
                <div class="field">
                    <div class="name for-input">
                        <label for="config-logo">Логотип</label>
                    </div>
                    <div class="value">
                        <ul>
                            <li>
                                <div class="toggle small js-logo-type-toggle" id="logo-type-toggle">
                                    <?php $_smarty_tpl->tpl_vars['logo_mode'] = new Smarty_variable(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['logo']->value['mode'])===null||$tmp==='' ? 'gradient' : $tmp), ENT_QUOTES, 'UTF-8', true), null, 0);?>
                                    <input type="hidden" name="logo[mode]">
                                    <span<?php if ($_smarty_tpl->tpl_vars['logo_mode']->value=='gradient'){?> class="selected"<?php }?> data-logo-type="gradient">Текст</span>
                                    <span<?php if ($_smarty_tpl->tpl_vars['logo_mode']->value=='image'){?> class="selected"<?php }?> data-logo-type="image">Картинка</span>
                                </div>
                            </li>

                            <li class="config-text-logo js-config-text-logo flexbox space-16" <?php if ($_smarty_tpl->tpl_vars['logo_mode']->value=='image'){?>  style="display: none"<?php }?>>
                                <?php $_smarty_tpl->tpl_vars['two_lines'] = new Smarty_variable($_smarty_tpl->tpl_vars['logo']->value['two_lines'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['text_value'] = new Smarty_variable(htmlspecialchars(trim($_smarty_tpl->tpl_vars['logo']->value['text']['value']), ENT_QUOTES, 'UTF-8', true), null, 0);?>
                                <div class="logo-area js-logo-area<?php if ($_smarty_tpl->tpl_vars['two_lines']->value){?> two-lines<?php }?>"
                                     data-background="gradient1"
                                     style="background: linear-gradient(<?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['angle'];?>
deg, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['from'];?>
, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['to'];?>
); color:<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['text']['color'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['default_color'] : $tmp);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['text_value']->value){?>
                                        <?php if ($_smarty_tpl->tpl_vars['two_lines']->value){?>
                                            <?php echo nl2br(htmlspecialchars(trim($_smarty_tpl->tpl_vars['logo']->value['text']['formatted_value']), ENT_QUOTES, 'UTF-8', true));?>

                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->tpl_vars['text_value']->value;?>

                                        <?php }?>
                                    <?php }else{ ?>
                                        <i class="fas fa-home"></i>
                                    <?php }?>
                                </div>
                                <div class="logo-input flexbox vertical">
                                    <input type="text" class="shorter bold js-logo-text"
                                           maxlength="4"
                                           name="logo[text][value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['text']['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                           id="config-logo-text" autocomplete="off">
                                    <span class="hint"><?php echo sprintf('%s символов','1-4');?>
</span>
                                    
                                    <div class="switch-with-text">
                                        <span class="switch middle smaller js-switch-two-line" id="two_line_text">
                                            <input type="hidden" name="logo[two_lines]" id="two-line-field" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value['two_lines'];?>
">
                                            <input type="checkbox" name="" id="fake-two-line" <?php if ($_smarty_tpl->tpl_vars['logo']->value['two_lines']){?>checked<?php }?>>
                                        </span>
                                        <label for="fake-two-line"><span class="small">Больше шрифт, две строки</span></label>
                                    </div>
                                    
                                </div>
                                <div class="color-picker">
                                    <button type="button" class="color-picker-button js-color-picker-button" data-background="gradient1" style="background: linear-gradient(<?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['angle'];?>
deg, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['from'];?>
, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['to'];?>
); color:<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['text']['color'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['default_color'] : $tmp);?>
">
                                        <i class="fas fa-eye-dropper"></i>
                                    </button>
                                </div>
                                <div class="settings-logo js-settings-logo" style="display: none">
                                    <div class="fields vertical">
                                        <div class="fields-group">
                                            <div class="field">
                                                <div class="value">
                                                    <div class="color-items">
                                                        <?php $_smarty_tpl->tpl_vars['gradients'] = new Smarty_variable($_smarty_tpl->tpl_vars['logo']->value['gradients'], null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['grad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gradients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['grad']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['grad']->key => $_smarty_tpl->tpl_vars['grad']->value){
$_smarty_tpl->tpl_vars['grad']->_loop = true;
 $_smarty_tpl->tpl_vars['grad']->iteration++;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['grad']->value['from']==$_smarty_tpl->tpl_vars['logo']->value['gradient']['from']&&$_smarty_tpl->tpl_vars['grad']->value['to']==$_smarty_tpl->tpl_vars['logo']->value['gradient']['to']){?>
                                                                <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['grad']->iteration, null, 0);?>
                                                            <?php }?>
                                                        <?php } ?>
                                                        <?php $_smarty_tpl->tpl_vars['gradient'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['gradient']->step = 1;$_smarty_tpl->tpl_vars['gradient']->total = (int)ceil(($_smarty_tpl->tpl_vars['gradient']->step > 0 ? count($_smarty_tpl->tpl_vars['gradients']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['gradients']->value))+1)/abs($_smarty_tpl->tpl_vars['gradient']->step));
if ($_smarty_tpl->tpl_vars['gradient']->total > 0){
for ($_smarty_tpl->tpl_vars['gradient']->value = 1, $_smarty_tpl->tpl_vars['gradient']->iteration = 1;$_smarty_tpl->tpl_vars['gradient']->iteration <= $_smarty_tpl->tpl_vars['gradient']->total;$_smarty_tpl->tpl_vars['gradient']->value += $_smarty_tpl->tpl_vars['gradient']->step, $_smarty_tpl->tpl_vars['gradient']->iteration++){
$_smarty_tpl->tpl_vars['gradient']->first = $_smarty_tpl->tpl_vars['gradient']->iteration == 1;$_smarty_tpl->tpl_vars['gradient']->last = $_smarty_tpl->tpl_vars['gradient']->iteration == $_smarty_tpl->tpl_vars['gradient']->total;?>
                                                            <button type="button"
                                                                    class="color-picker-button gradient<?php echo $_smarty_tpl->tpl_vars['gradient']->value;?>
 js-switch-color"
                                                                    data-gradient="<?php echo $_smarty_tpl->tpl_vars['gradient']->value;?>
"
                                                                    data-gradient-from="<?php echo $_smarty_tpl->tpl_vars['gradients']->value[$_smarty_tpl->tpl_vars['gradient']->value-1]['from'];?>
"
                                                                    data-gradient-to="<?php echo $_smarty_tpl->tpl_vars['gradients']->value[$_smarty_tpl->tpl_vars['gradient']->value-1]['to'];?>
">
                                                                <?php if ($_smarty_tpl->tpl_vars['selected']->value==$_smarty_tpl->tpl_vars['gradient']->value){?>
                                                                    <i class="fas fa-check"></i>
                                                                <?php }else{ ?>
                                                                    <i>&nbsp;</i>
                                                                <?php }?>
                                                            </button>
                                                        <?php }} ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fields-group">
                                            <div class="field">
                                                <div class="name">
                                                    <a href="#" class="js-custom-color-toggle">Свои цвета <i class="fas fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="field custom-colors js-custom-colors" style="display: none">
                                                <div class="value">
                                                    <ul>
                                                        <li>
                                                            <div class="field">
                                                                <div class="name">Цвет А</div>
                                                                <div class="value">
                                                                    <input type="text"
                                                                           class="shorter js-first-color"
                                                                           name="logo[gradient][from]"
                                                                           value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['gradient']['from'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '#FF0078' : $tmp);?>
">
                                                                    <span role="button" class="pickr-color-picker"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field">
                                                                <div class="name">Цвет Б</div>
                                                                <div class="value">
                                                                    <input type="text"
                                                                           class="shorter js-second-color"
                                                                           name="logo[gradient][to]"
                                                                           value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['gradient']['to'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '#FF5900' : $tmp);?>
">
                                                                    <span role="button" class="pickr-color-picker"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field">
                                                                <div class="name">Угол градиента (&deg;)</div>
                                                                <div class="value">
                                                                    <input type="number"
                                                                           class="shorter"
                                                                           name="logo[gradient][angle]"
                                                                           value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['gradient']['angle'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '90' : $tmp);?>
">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field">
                                                                <div class="name">Цвет текста</div>
                                                                <div class="value">
                                                                    <input type="text"
                                                                           class="shorter js-text-color"
                                                                           name="logo[text][color]"
                                                                           value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['text']['color'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '#fff' : $tmp);?>
">
                                                                    <span role="button" class="pickr-color-picker"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="config-image-logo flexbox space-16 js-config-image-logo"<?php if ($_smarty_tpl->tpl_vars['logo_mode']->value=='gradient'){?>  style="display: none"<?php }?>>
                                <div class="logo-area js-logo-area">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['128x128'])){?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['128x128']['url'];?>
" style="max-height: 66px">
                                    <?php }?>
                                </div>
                                <div class="logo-input flexbox vertical space-8 file-upload">
                                    <div class="upload">
                                        <label class="link">
                                            <i class="fas fa-image"></i>
                                            <span>Загрузить картинку</span>
                                            <input type="file" name="logo_image" autocomplete="off">
                                        </label>
                                    </div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs'])){?>
                                    <a href="#" class="image-logo-delete js-image-logo-delete"><i class="fas fa-trash-alt"></i> Удалить</a>
                                    <?php }?>
                                    <input type="hidden" name="logo_image_delete" class="js-image-logo-delete-input">
                                </div>
                            </li>
                        </ul>
                        <p class="hint s-error js-error-place"></p>
                    </div>
                </div>

                
                <?php if ($_smarty_tpl->tpl_vars['locales']->value){?>
                    <div class="field">
                        <div class="name middle">
                            <label for="config-locale">Язык доступных для установки программных продуктов</label>
                        </div>
                        <div class="value">
                            <div class="wa-select small">
                            <select name="locale" id="config-locale">
                                <?php  $_smarty_tpl->tpl_vars['_locale_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_locale_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_locale_name']->key => $_smarty_tpl->tpl_vars['_locale_name']->value){
$_smarty_tpl->tpl_vars['_locale_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_locale']->value = $_smarty_tpl->tpl_vars['_locale_name']->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locale']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['locale']==$_smarty_tpl->tpl_vars['_locale']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locale_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>
                    </div>
                <?php }?>

                
                <?php if ($_smarty_tpl->tpl_vars['locale_adapter']->value!==false){?>
                    <div class="field">
                        <div class="name for-input">
                            <label for="config-locale-adapter">
                                Механизм локализации
                            </label>
                        </div>
                        <div class="value">
                            <div class="wa-select small">
                            <select name="locale_adapter" id="config-locale-adapter">
                                <?php  $_smarty_tpl->tpl_vars['_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locale_adapters_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_name']->key => $_smarty_tpl->tpl_vars['_name']->value){
$_smarty_tpl->tpl_vars['_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_adapter']->value = $_smarty_tpl->tpl_vars['_name']->key;
?>
                                    <option<?php if ($_smarty_tpl->tpl_vars['_adapter']->value==$_smarty_tpl->tpl_vars['locale_adapter']->value){?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>
                    </div>
                <?php }?>

                
                <div class="field">
                    <div class="name">Механизм обработки изображений</div>
                    <div class="value no-shift">
                        <div class="wa-select small">
                        <select name="config[image_adapter]">
                            <?php  $_smarty_tpl->tpl_vars['_params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_params']->_loop = false;
 $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['image_adapters_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_params']->key => $_smarty_tpl->tpl_vars['_params']->value){
$_smarty_tpl->tpl_vars['_params']->_loop = true;
 $_smarty_tpl->tpl_vars['_adapter']->value = $_smarty_tpl->tpl_vars['_params']->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['_adapter']->value==$_smarty_tpl->tpl_vars['image_adapter']->value){?>selected<?php }?>
                                        <?php if (!$_smarty_tpl->tpl_vars['_params']->value['enabled']){?>disabled<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter']->value;?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_params']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if (!$_smarty_tpl->tpl_vars['_params']->value['enabled']){?>(не установлен)<?php }?>
                                </option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name for-button">
                        Очистка кеша
                    </div>
                    <div class="value">
                        <button type="button" class="js-clear-cache button rounded outlined gray"><span>Очистка кеша</span></button>
                        <p class="hint">Кеш — это временные данные, которые помогают снизить нагрузку на сервер. Очистите кеш, чтобы обновить данные, если вы обнаружили неполадку.</p>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name for-checkbox">Для разработчика</div>
                    <div class="value">
                        <div class="switch-with-text">
                            <span class="switch middle smaller shift-3" id="debug">
                                <input type="checkbox" name="config[debug]" value="1"<?php if (isset($_smarty_tpl->tpl_vars['config']->value['debug'])&&$_smarty_tpl->tpl_vars['config']->value['debug']){?> checked="checked"<?php }?> id="config-debug-checkbox">
                            </span>
                            <label for="config-debug-checkbox">Режим отладки (debug mode)</label>
                        </div>
                        <p class="hint">Режим отладки отключает кеширование и включает подробный вывод сообщений об ошибках. Рекомендуется при разработке приложений.</p>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        Версия Webasyst
                    </div>
                    <div class="value no-shift"><?php echo $_smarty_tpl->tpl_vars['framework_version']->value;?>
</div>
                </div>

                
                <div class="field">
                    <div class="name">
                        Версия PHP
                    </div>
                    <div class="value no-shift"><?php echo $_smarty_tpl->tpl_vars['php_version']->value;?>
</div>
                    <?php if (!$_smarty_tpl->tpl_vars['is_good_php_version']->value){?>
                        <div class="value no-shift bold">Webasyst переходит на версии PHP 5.6 и выше.</div>
                    <?php }?>
                </div>

            </div>

            <?php /*  Call merged included template "./SettingsSaveBtn.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsSaveBtn.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '12742310596244b3564373c3-30951249');
content_6244b3564e32d3_05255085($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsSaveBtn.inc.html" */?>

        </form>
  </div>
</div>

<script type="text/javascript">
    (function($) {
        new WASettingsGeneral({
            $wrapper: $('#s-general-settings-page'),
            local: {
                "save": "Сохранить",
                "cancel": "Отмена"
            }
        });

        let $file_upload = $(".file-upload")

        $file_upload.waUpload();

        let $file_input = $file_upload.find('[type="file"]');
        $file_input.on('change', function () {
            let file = this.files[0],
                reader = new FileReader();

            reader.readAsDataURL(file)
            reader.onloadend = function() {
                $('.js-logo-area:visible').empty().css({
                    'background-image': 'url('+reader.result+')',
                    'background-size': 'cover',
                    'background-position': 'center',
                })
            }
        })

        // Switch Debug Mode
        $("#debug").waSwitch();
    })(jQuery);
    $.wa.title.set(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:45:26
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/settings/SettingsSaveBtn.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b3564e32d3_05255085')) {function content_6244b3564e32d3_05255085($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['page_is'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings_page']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<div class="fields-group">
    <div class="field">
        <div class="value submit js-footer-actions">
            <button class="button js-submit-button" type="submit">Сохранить</button>
                <span class="hidden">
                    <span>или</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
webasyst/settings/<?php if ($_smarty_tpl->tpl_vars['page_is']->value){?><?php echo $_smarty_tpl->tpl_vars['page_is']->value;?>
/<?php }?>" class="js-cancel">отмена</a>
                </span>
        </div>
    </div>
</div>
<?php }} ?>