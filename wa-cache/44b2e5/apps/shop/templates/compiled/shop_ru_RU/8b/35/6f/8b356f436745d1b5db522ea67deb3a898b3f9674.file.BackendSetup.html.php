<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:48:13
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/plugins/cml1c/templates/actions/backend/BackendSetup.html" */ ?>
<?php /*%%SmartyHeaderCode:20165398736244b3fd5ef533-23434620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b356f436745d1b5db522ea67deb3a898b3f9674' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/plugins/cml1c/templates/actions/backend/BackendSetup.html',
      1 => 1647782756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20165398736244b3fd5ef533-23434620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map' => 0,
    'enabled' => 0,
    'stocks' => 0,
    'stock_id' => 0,
    'stock' => 0,
    'url' => 0,
    'wa_backend_url' => 0,
    'export_timestamp' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'expert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b3fd64b474_10421297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b3fd64b474_10421297')) {function content_6244b3fd64b474_10421297($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="block double-padded" style="padding-bottom: 10px;">
    <h1>1С (CommerceML)</h1>
    <p>Обмен данными с системами товарного учета через файлы формата <a target="_blank" href="http://v8.1c.ru/edi/edi_stnd/90/92.htm">CommerceML<i class="icon16 new-window"></i></a> Документация по настройке интеграции с «1С»: <a target="_blank" href="https://www.webasyst.ru/help/25/shop-script-5-cml1c/">https://www.webasyst.ru/help/25/shop-script-5-cml1c/<i class="icon16 new-window"></i></a> Документация по настройке интеграции с «МойСклад»: <a target="_blank" href="https://www.shop-script.ru/help/15043/commerceml-moisklad/">https://www.shop-script.ru/help/15043/commerceml-moisklad/<i class="icon16 new-window"></i></a></p>
</div>
<div id="s-cml1c-form">
    <ul class="tabs" style="padding-left: 10px;">
        <li class="selected"><a href="#/cml1c/tab/auto/">Автоматический обмен</a></li>
        <li><a href="#/cml1c/tab/manual/">Ручной обмен</a></li>
        <li><a href="#/cml1c/tab/map/">Синхронизированные параметры</a></li>
        <li class="no-tab"><a href="?action=plugins#/cml1c/" class="no-underline"><i class="icon16 settings"></i>Настройки обмена</a></li>       
    </ul>

    <div class="tab-content">
        <div class="block double-padded" id="s-cml1c-map">
            <p class="hint"><i class="icon10 info" style="vertical-align: baseline;"></i>Список синхронизированных параметров доступен только для просмотра.</p>
            <div class="fields form">
                <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                    <?php echo $_smarty_tpl->tpl_vars['map']->value;?>

                    <div class="field">
                        <div class="value">
                            <br>
                            <a href="#/cml1c/map/reset/" class="button red js-action js-confirm" data-confirm-text="Удалить все настройки импорта свойств, реквизитов и остатков товаров?">Удалить связи</a>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="field">
                        <div class="value gray">
                            <i class="icon16 exclamation"></i><strong>Синхронизированные параметры отсутствуют.</strong>
                            <br>Для настройки параметров обмена данных выполните анализ и импорт CommerceML-файла на вкладке
<a href="#/cml1c/tab/manual/" class="underline">ручного обмена</a>.
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <div class="block double-padded" id="s-cml1c-auto">
            <div class="fields form">
                <div class="field">
                    <div class="name">Автоматический обмен</div>
                    <div class="value no-shift s-ibutton-checkbox">
                        <ul class="menu-h">
                            <li><label for="s-cml1c-auto-enabled"><span class="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>gray <?php }?>s-cml1c-disable">Запрещен</span></label></li>
                            <li><input type="checkbox" name="enabled" value="1" <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?> checked<?php }?> id="s-cml1c-auto-enabled"></li>
                            <li><label for="s-cml1c-auto-enabled"><span class="<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?>gray <?php }?>s-cml1c-enable">Разрешен</span></label></li>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['stocks']->value)&&(count($_smarty_tpl->tpl_vars['stocks']->value)>1)){?>
                <div class="field">
                    <div class="name">Склад</div>
                    <div class="value">
                        <select>
                            <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                        <p class="hint">Укажите склад, в который будут записываться данные об остатках</p>
                    </div>
                </div>
                <?php }?>
                <div class="field"<?php if (empty($_smarty_tpl->tpl_vars['enabled']->value)){?> style="display: none;"<?php }?>>
                    <div class="name"><label for="cml1c-url">Скрипт синхронизации</label></div>
                    <div class="value js-cml1c-settlement" <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?> style="display: none;"<?php }?>>
                        <p><i class="icon16 exclamation"></i> Для включения автоматического обмена данными настройте витрину интернет-магазина в приложении «<a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
site/#/routing/">Сайт</a>».</p>
                    </div>
                    <div class="value js-cml1c-url" <?php if (empty($_smarty_tpl->tpl_vars['url']->value)){?> style="display: none;"<?php }?>>
                        <i class="icon16 lock-bw"></i>
                        <input id="cml1c-url" type="text" class="bold" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="width: 500px;" readonly="readonly">
                        <br>

                        <p style="margin-left: 16px; padding-left: 0.5em;" class="hint">В случае удаления сайта, домен которого используется в адресе скрипта синхронизации, скопируйте из этого поля обновленный адрес скрипта, сформированный на другом домене, и сохраните его в настройках «1С».</p>

                        <p class="small">Сохраните этот адрес в настройках «1С» в диалоге «<em>Настройки обмена с WEB-сайтом &rarr; Адрес сайта</em>».<br/>
                            Поля «Имя пользователя» и «Пароль» оставьте пустыми или укажите любые значения, так как правильные данные уже закодированы в адресе скрипта синхронизации.</p>
                        <p class="small">Чтобы изменить адрес скрипта синхронизации, выключите и снова включите автоматический обмен.</p>

                        <p class="hint js-cml1c-url-ssl" <?php if (empty($_smarty_tpl->tpl_vars['url']->value)||(strpos($_smarty_tpl->tpl_vars['url']->value,'http://')===0)){?> style="display: none" <?php }?>><i class="icon16 exclamation"></i> Если обмен данными по HTTPS не работает с вашей версией «1С», настройте дополнительное скрытое поселение магазина, доступное по HTTP, и подставьте адрес этого поселения в адрес скрипта синхронизации. <a href="https://www.shop-script.ru/help/25/shop-script-5-cml1c/#https-not-supported" target="_blank">Подробнее</a>.</p>
                        <p class="hint">При автоматическом обмене данными Shop-Script передает в «1С» только информацию о заказах и принимает из «1С» только информацию о товарах (добавляет новые товары, обновляет цены, остатки и характеристики).</p>
                    </div>
                    <div class="name"><label for="cml1c-url-moysklad">Скрипт экспорта товаров в «МойСклад»</label></div>
                    <div class="value">
                        <i class="icon16 lock-bw"></i> <input id="cml1c-url-moysklad" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
moysklad/" class="bold" style="width: 500px;" readonly="readonly">
                        <p class="hint">1. Сохраните этот адрес в поле «Адрес сайта» в аккаунте «МойСклад» для настройки синхронизации данных через CommerceML и запустите импорт заказов.<br>
                            2. После завершения импорта замените содержимое поля «Адрес сайта» в настройках синхронизации CommerceML в аккаунте «МойСклад» на адрес из поля «Скрипт синхронизации».<br>
                            <br>
                            Адрес скрипта экспорта товаров в «МойСклад» также следует использовать для получения CommerceML-файлов из отчета экспорта в аккаунте «МойСклад» после первого «холостого» импорта товаров.</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="block double-padded" id="s-cml1c-manual">
            <h2>Экспорт из магазина <span class="hint">Shop-Script &rarr; 1С</span></h2>
            <form id="s-plugin-cml1c-export" method="post" action="?plugin=cml1c&action=run">
                <div class="fields form">
                    <div class="field-group">
                        <div class="field">
                            <div class="name">Экспортировать в файл</div>
                            <div class="value no-shift"><label><input type="checkbox" name="export[product]" value="1" checked="checked"> Товары</label></div>
                            <div class="value no-shift">
                                <label><input type="checkbox" name="export[order]" value="1" checked="checked"> Заказы</label>
                                <?php if ($_smarty_tpl->tpl_vars['export_timestamp']->value){?>
                                <select name="export[new_order]">
                                    <option value="1" selected="selected">только измененные после даты последнего экспорта (<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['export_timestamp']->value,"humandatetime");?>
)</option>
                                    <option value="0">все заказы</option>
                                </select>
                                <?php }?>
                            </div>
                        </div>
                    </div>


                    <div class="field-group plugin-cml1c-submit">
                        <div class="field">
                            <div class="value submit">
                                <input type="hidden" name="direction" value="export">
                                <input type="submit" class="button green" value="Экспортировать">
                                <div class="js-progressbar-container" style="display:none;">
                                    <div class="progressbar blue float-left" style="display: none; width: 70%;">
                                        <div class="progressbar-outer">
                                            <div class="progressbar-inner" style="width: 0;"></div>
                                        </div>
                                    </div>
                                    <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
                                    <div class="clear"></div>
                                        <span class="progressbar-description"></span>
                                    <br clear="left" />
                                    <br>
                                    <span class="small italic">
                                        Не закрывайте браузер, пока процесс экспорта не завершится полностью.
                                    </span>
                                </div><br><br>
                                <em class="errormsg"></em>
                            </div>
                        </div>
                    </div>


                    <div class="field-group plugin-cml1c-report" id="plugin-cml1c-report-export" style="display: none;">
                        <div class="field">
                            <div class="value"></div>
                        </div>
                    </div>
                </div>
            </form>
            <h2>Импорт в магазин <span class="hint">1С &rarr; Shop-Script</span></h2>

            <form id="s-plugin-cml1c-import" method="post" action="?plugin=cml1c&action=upload" enctype="multipart/form-data" target="s-plugin-cml1c-import-iframe">
                <div class="fields form">
                    <div class="field-group">
                        <div class="field">
                            <div class="name">Файл CommerceML</div>
                            <div class="value no-shift">
                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                                <input type="file" name="files">
                                <input type="hidden" name="zipfile" value="">
                                <span id="s-plugin-cml1c-import-upload-status" style="display:none">
                                <i style="vertical-align:middle" class="icon16 loading"></i>
                                <span></span>
                            </span>
                                <br><br>
                                <p class="small">Импорт заказов из файла CommerceML не поддерживается.</p>
                            </div>
                        </div>
                        <div class="field js-cml1c-zip" style="display: none;">
                            <div class="name">Файл</div>
                            <div class="value">
                                <ul class="menu-v with-icons">
                                    <li class="js-cml1c-template"><label><i class="icon16 zip"></i><input type="radio" name="filename" value="" disabled="disabled"><span></span></label></li>
                                </ul>
                                <input type="hidden" name="filename" value="">
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">Конфигурация</div>
                            <div class="value no-shift">
                                <label>
                                    <input type="checkbox" name="configure" value="1" checked="checked">
                                    Настроить синхронизацию характеристик, свойств, реквизитов и остатков товаров
                                </label>
                                <br>
                                <span class="hint">Настройки синхронизации данных в файле CommerceML с данными Shop-Script.
Данные настройки будут использоваться для всех последующих автоматических и ручных обменов через CommerceML. Сменить настройки можно будет после очередного анализа файла CommerceML.</span>
                            </div>
                            <div class="value no-shift">
                                <label>
                                    <input type="checkbox" name="expert" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['expert']->value)){?> checked="checked"<?php }?>>
                                    Экспертный уровень настроек
                                </label>
                                <br>
                                <span class="hint">Включите, чтобы получить возможность переопределять основные свойства товаров, например:<br>
                                — <strong>наименование</strong> (<tt>&lt;Полное наименование&gt;</tt>, <tt>&lt;ПолноеНаименование&gt;</tt>, <tt>&lt;НаименованиеПолное&gt;</tt>),<br>
                                — <strong>описание</strong> (<tt>&lt;ОписаниеВФорматеHTML&gt;</tt>),<br>
                                — любые другие нестандартные реквизиты.</span>
                            </div>
                        </div>

                    </div>

                    <div class="field-group plugin-cml1c-report" id="plugin-cml1c-report-import" style="display: none;">
                        <div class="field">
                            <div class="value"></div>
                        </div>
                        <div class="field">
                            <div class="value js-cml1c-repeat"><a href="#/cml1c/upload/repeat/" class="js-action"><i class="icon16 update"></i>Импортировать еще файлы</a></div>
                        </div>
                    </div>

                    <div class="field-group plugin-cml1c-submit">
                        <div class="field">
                            <div class="value submit">
                                <input type="hidden" name="direction" value="import">
                                <input type="submit" class="button green" data-import="Импортировать" data-save="Сохранить и импортировать" data-configure="Анализировать" value="Импортировать">
                                <span class="js-cml1c-repeat" style="display: none;">или <a href="#/cml1c/upload/repeat/" class="js-action">выбрать другой файл</a></span>
                                <div class="js-progressbar-container" style="display:none;">
                                    <div class="progressbar blue float-left" style="display: none; width: 70%;">
                                        <div class="progressbar-outer">
                                            <div class="progressbar-inner" style="width: 0;"></div>
                                        </div>
                                    </div>
                                    <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
                                    <div class="clear"></div>
                                        <span class="progressbar-description"></span>
                                    <br clear="left" />
                                    <br>
                                    <span class="small italic">
                                        Не закрывайте браузер, пока процесс импорта не завершится полностью.
                                    </span>
                                </div><br><br>
                                <em class="errormsg"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <iframe style="display:none" name="s-plugin-cml1c-import-iframe" id="s-plugin-cml1c-import-iframe"></iframe>
        </div>


   </div>
</div>

<div class="clear"></div>


<script type="text/javascript">
<?php echo $_smarty_tpl->getSubTemplate ("../../../js/cml1c.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</script><?php }} ?>