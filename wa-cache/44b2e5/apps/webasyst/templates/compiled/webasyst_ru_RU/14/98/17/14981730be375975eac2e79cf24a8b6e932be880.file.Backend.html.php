<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:8869856746244b3897891a4-97887590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14981730be375975eac2e79cf24a8b6e932be880' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/layouts/Backend.html',
      1 => 1624000810,
      2 => 'file',
    ),
    'd4e0a5ec799a92525d2f71d259512b9b47a403c9' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendLogo.inc.html',
      1 => 1617787741,
      2 => 'file',
    ),
    '4889314a708c927ea45c18d868c2f8e455e72730' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendHeaderAccount.inc.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8869856746244b3897891a4-97887590',
  'function' => 
  array (
    'skeleton' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app' => 0,
    'wa_url' => 0,
    'is_fixed_header' => 0,
    'logo' => 0,
    'selected_sidebar_item' => 0,
    'backend_url' => 0,
    'public_dashboards' => 0,
    'd' => 0,
    'dashboard_module_url' => 0,
    'teams' => 0,
    'team' => 0,
    'content' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b389828be4_93614483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b389828be4_93614483')) {function content_6244b389828be4_93614483($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'){?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/dashboard/dashboard.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
    <?php }?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
</head>
<body<?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'&&$_smarty_tpl->tpl_vars['wa']->value->get('tv')===''){?> class="tv"<?php }?>>
    <div id="wa">
        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value!='webasyst'){?>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

        <?php }?>
        <div id="wa-app" class="flexbox">
            <?php $_smarty_tpl->tpl_vars['is_fixed_header'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->cookie('wa_header_fixed',0), null, 0);?>
            <div class="sidebar hide-scrollbar overflow-visible flexbox <?php if (!$_smarty_tpl->tpl_vars['is_fixed_header']->value){?> height-full<?php }else{ ?> header-fixed<?php }?> js-main-sidebar">
                <div class="sidebar-header box flexbox middle"<?php if ($_smarty_tpl->tpl_vars['is_fixed_header']->value){?> style="display: none;"<?php }?>>
                    <?php /*  Call merged included template "../actions/backend/BackendHeaderAccount.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../actions/backend/BackendHeaderAccount.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('logo'=>$_smarty_tpl->tpl_vars['logo']->value,'position'=>"sidebar"), 0, '8869856746244b3897891a4-97887590');
content_6244b3897a45f0_92454148($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../actions/backend/BackendHeaderAccount.inc.html" */?>
                </div>
                <div class="sidebar-body hide-scrollbar">
                    <ul class="menu js-dashboards-list">
                        <li<?php if ($_smarty_tpl->tpl_vars['selected_sidebar_item']->value==='my'){?> class="selected"<?php }?> data-header-title="Мои приложения">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
" data-dashboard="0">
                                <i class="fas fa-home"></i>
                                <span>Мои приложения</span>
                            </a>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['public_dashboards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                        <li<?php if ($_smarty_tpl->tpl_vars['selected_sidebar_item']->value==="dashboard/".((string)$_smarty_tpl->tpl_vars['d']->value['id'])){?> class="selected"<?php }?> data-header-title="Вся команда">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['dashboard_module_url']->value;?>
dashboard/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" data-dashboard="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['selected_sidebar_item']->value==="dashboard/".((string)$_smarty_tpl->tpl_vars['d']->value['id'])){?>
                                    <span class="count action small js-dashboard-delete"><i class="fas fa-times-circle"></i></span>
                                <?php }?>
                                <i class="fas fa-table"></i>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </a>
                        </li>
                        <?php } ?>

                        <li class="small">
                            <a class="count action js-new-dashboard" href="javascript:void(0);" data-dashboard="new_dashboard" title="Новый дашборд">
                                <i class="fas fa-plus-circle"></i>
                                <span>Новый дашборд</span>
                            </a>
                        </li>

                        
                    </ul>

                    <header class="heading">
                        Команда
                    </header>
                    <ul class="menu">
                        <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['selected_sidebar_item']->value==="team/".((string)$_smarty_tpl->tpl_vars['team']->value['id'])){?> class="selected"<?php }?> data-header-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['team']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['dashboard_module_url']->value;?>
team/<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
/">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['team']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    
                                </a>
                            </li>
                        <?php } ?>
                        <li<?php if ($_smarty_tpl->tpl_vars['selected_sidebar_item']->value==="users"){?> class="selected"<?php }?> data-header-title="Вся команда">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['dashboard_module_url']->value;?>
users/">
                                <i class="fas fa-users"></i>
                                <span>Вся команда</span>
                            </a>
                        </li>
                    </ul>
                    <div class="box align-center custom-pt-0">
                        <p class="hint">Используйте приложение «Команда» для настройки прав доступа и состава команд.</p>
                    </div>

                </div>
            </div>
            <div class="content hide-scrollbar blank box js-main-content<?php if ($_smarty_tpl->tpl_vars['is_fixed_header']->value){?> header-apps header-fixed<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'){?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                
                <div class="dialog" id="dashboard-editor-dialog">
                    <div class="dialog-background"></div>
                    <form action="?module=dashboard&action=dashboardSave" data-dashboard-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->domainUrl();?>
<?php echo $_smarty_tpl->tpl_vars['dashboard_module_url']->value;?>
dashboard/">
                        <div class="dialog-body">
                            <h1 class="dialog-header">Новый дашборд</h1>
                            <div class="dialog-content fields">
                                <div class="field">
                                    <div class="name for-input">Название</div>
                                    <div class="value"><input type="text" name="dashboard[name]" value=""></div>
                                </div>
                                <p class="hint">Дашборд Webasyst TV можно просматривать в любом современном браузере и транслировать на телевизоры 4K или Full HD.</p>
                            </div>
                            <div class="dialog-footer">
                                <input type="submit" value="Сохранить" class="button">
                                или <a class="js-close-dialog" href="#">отмена</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dialog" id="dashboard-delete-dialog">
                    <div class="dialog-background"></div>
                    <div class="dialog-body">
                        <h1 class="dialog-header">Удалить дашборд</h1>
                        <div class="dialog-content">
                            <p>Дашборд будет удален без возможности восстановления. Вы уверены?</p>
                        </div>
                        <div class="dialog-footer">
                            <input type="submit" value="Удалить" class="button red">
                            или <a class="js-close-dialog" href="#">отмена</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widgets-list-wrapper hide-scrollbar" data-backend-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa_backend_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <?php if (!function_exists('smarty_template_function_skeleton')) {
    function smarty_template_function_skeleton($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['skeleton']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                <div class="skeleton list-group-wrapper">
                    <div class="list-wrapper">
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <div class="widget-item-wrapper">
                                <span class="skeleton-custom-box image-wrapper"></span>
                                <span class="skeleton-line custom-mt-16"></span>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

            <?php smarty_template_function_skeleton($_smarty_tpl,array());?>

            </div>
        </div>
    </div>
</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendHeaderAccount.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b3897a45f0_92454148')) {function content_6244b3897a45f0_92454148($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['position']->value)===null||$tmp==='' ? 'header' : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['company_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['company_name']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?><?php /*  Call merged included template "./BackendLogo.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./BackendLogo.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('backend_url'=>$_smarty_tpl->tpl_vars['backend_url']->value,'company_name'=>$_smarty_tpl->tpl_vars['company_name']->value,'position'=>$_smarty_tpl->tpl_vars['pos']->value,'logo'=>$_smarty_tpl->tpl_vars['logo']->value), 0, '8869856746244b3897891a4-97887590');
content_6244b3897ad7d4_29277963($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./BackendLogo.inc.html" */?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendLogo.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b3897ad7d4_29277963')) {function content_6244b3897ad7d4_29277963($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['logo']->value['mode']==='gradient'||empty($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs'])){?><?php $_smarty_tpl->tpl_vars['two_lines'] = new Smarty_variable($_smarty_tpl->tpl_vars['logo']->value['two_lines'], null, 0);?><?php $_smarty_tpl->tpl_vars['text_value'] = new Smarty_variable(htmlspecialchars(trim($_smarty_tpl->tpl_vars['logo']->value['text']['value']), ENT_QUOTES, 'UTF-8', true), null, 0);?><?php if ($_smarty_tpl->tpl_vars['position']->value==='header'){?><div id="wa-account" style="background: linear-gradient(<?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['angle'];?>
deg, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['from'];?>
, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['to'];?>
); color: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['text']['color'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['default_color'] : $tmp);?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
"><?php }?><h3<?php if ($_smarty_tpl->tpl_vars['two_lines']->value){?> class="two-lines"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['position']->value==='sidebar'){?>background: linear-gradient(<?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['angle'];?>
deg, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['from'];?>
, <?php echo $_smarty_tpl->tpl_vars['logo']->value['gradient']['to'];?>
); color: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['text']['color'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['default_color'] : $tmp);?>
<?php }else{ ?>color: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['text']['color'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['default_color'] : $tmp);?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['text_value']->value){?><?php if ($_smarty_tpl->tpl_vars['two_lines']->value){?><?php echo nl2br(htmlspecialchars(trim((($tmp = @$_smarty_tpl->tpl_vars['logo']->value['text']['formatted_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logo']->value['text']['value'] : $tmp)), ENT_QUOTES, 'UTF-8', true));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['text_value']->value;?>
<?php }?><?php }else{ ?><i class="fas fa-home"></i><?php }?></h3><?php if ($_smarty_tpl->tpl_vars['position']->value==='header'){?></a></div><?php }?><?php }elseif($_smarty_tpl->tpl_vars['logo']->value['mode']==='image'&&!empty($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs'])){?><?php $_smarty_tpl->tpl_vars['logo_url_1x'] = new Smarty_variable(($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['64x64']['url']).($_smarty_tpl->tpl_vars['wa']->value->version(true)), null, 0);?><?php $_smarty_tpl->tpl_vars['logo_url_2x'] = new Smarty_variable(($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['128x128']['url']).($_smarty_tpl->tpl_vars['wa']->value->version(true)), null, 0);?><?php $_smarty_tpl->tpl_vars['logo_url_3x'] = new Smarty_variable(($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['192x192']['url']).($_smarty_tpl->tpl_vars['wa']->value->version(true)), null, 0);?><?php $_smarty_tpl->tpl_vars['logo_url_sidebar'] = new Smarty_variable(($_smarty_tpl->tpl_vars['logo']->value['image']['thumbs']['512x512']['url']).($_smarty_tpl->tpl_vars['wa']->value->version(true)), null, 0);?><div id="wa-account"<?php if ($_smarty_tpl->tpl_vars['position']->value==='sidebar'){?> class="wa-sidebar-logo"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
"><img<?php if ($_smarty_tpl->tpl_vars['position']->value==='sidebar'){?> src="<?php echo $_smarty_tpl->tpl_vars['logo_url_sidebar']->value;?>
"<?php }else{ ?> src="<?php echo $_smarty_tpl->tpl_vars['logo_url_1x']->value;?>
" srcset="<?php echo $_smarty_tpl->tpl_vars['logo_url_1x']->value;?>
 1x, <?php echo $_smarty_tpl->tpl_vars['logo_url_2x']->value;?>
 2x, <?php echo $_smarty_tpl->tpl_vars['logo_url_3x']->value;?>
 3x"<?php }?> class="wa-header-logo" alt="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['company_name']->value,2,'');?>
"></a></div><?php }?>
<?php }} ?>