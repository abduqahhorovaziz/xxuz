<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:45:26
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/layouts/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:19238900156244b3565141d0-72952256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42c3a98980f1a3061c019656299d31f4117d3f82' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/layouts/Settings.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19238900156244b3565141d0-72952256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'sidebar' => 0,
    'content' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b3565665f0_64743656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b3565665f0_64743656')) {function content_6244b3565665f0_64743656($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_locale_string'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?>
<!DOCTYPE html>
<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Настройки &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

        
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


        <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/wa-settings/settings.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/css" rel="stylesheet">

        
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.elrte.ace.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

        
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.contentrouter.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.general.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.email.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.maps.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.captcha.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.push.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.sms.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.auth.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.field.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.field.edit.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.field.delete.confirm.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.regions.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.db.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.db.list.dialog.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.waID.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.waIDInviteProgress.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.waIDConnectDialog.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa-settings/settings.waIDDisconnectConfirm.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

        <?php echo $_smarty_tpl->tpl_vars['wa']->value->js(false);?>


        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

        <?php } ?>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

     </head>
    <body>
        <div id="wa">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

            <div id="wa-app">
                <div class="flexbox wrap-mobile">
                    
                    <nav class="sidebar hide-scrollbar mobile-friendly" id="wa-app-navigation">
                        <nav class="sidebar-mobile-toggle">
                            <div class="box align-center">
                                <a href="javascript:void(0);"><i class="fas fa-bars"></i> Показать меню</a>
                            </div>
                        </nav>
                        <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

                    </nav>
                    
                    <div class="content hide-scrollbar blank">
                        <div id="s-content-block">
                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <script>
            (function($) { "use strict";
                const waSettingsLoading = $.waLoading();
                $(document)
                    .on("wa_before_load", function() {
                        waSettingsLoading.show();
                    })
                    .on("wa_loading", function(event, xhr_event) {
                        if (xhr_event.lengthComputable) {
                            let percent = (xhr_event.loaded / xhr_event.total) * 100;
                            waSettingsLoading.set(percent);
                        }
                    })
                    .on("wa_abort", function() {
                        waSettingsLoading.abort();
                    })
                    .on("wa_loaded", function() {
                        waSettingsLoading.done();
                    });
                
                window.wa_app = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->app());?>
;
                
                window.wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;

                $.wa.content = new ContentRouter({
                    $content: $("#s-content-block"),
                    app_url: <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/");?>

                });

                const $sidebar = $('#wa-app-navigation');

                $sidebar.waShowSidebar({
                    direction: "down",
                    is_open: true
                });
            })(jQuery);
        </script>
    </body>
</html>
<?php }} ?>