<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendDashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:16124103846244b38960e833-90360689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee769c54af9981ec29cb8baaadd702c377b626f0' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/backend/BackendDashboard.html',
      1 => 1617787741,
      2 => 'file',
    ),
    '14f818b128e05fae8fd0acba60eeb8eb55517a90' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivityFilter.inc.html',
      1 => 1631697814,
      2 => 'file',
    ),
    '8ff895c43cf645001f06fc34049a3b40eaa4637b' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivity.html',
      1 => 1631697814,
      2 => 'file',
    ),
    '1da37f47efce3eb32cb8c62671b6d72f832d00df' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardWidget.html',
      1 => 1617787741,
      2 => 'file',
    ),
    'c5d6d60fb24aac976afec41e68bbfc339f07b97a' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardWidgets.html',
      1 => 1624000810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16124103846244b38960e833-90360689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b38971ae58_50167835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b38971ae58_50167835')) {function content_6244b38971ae58_50167835($_smarty_tpl) {?><div id="dashboard-wrapper" >
    
    <section id="wa_apps">
        <?php echo $_smarty_tpl->getSubTemplate ("../dashboard/DashboardAppsBlock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </section>

    <section id="wa_activity">
        <?php if (!empty($_smarty_tpl->tpl_vars['activity']->value)){?>
            <?php /*  Call merged included template "../dashboard/DashboardActivityFilter.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardActivityFilter.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16124103846244b38960e833-90360689');
content_6244b389638bf8_95473228($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardActivityFilter.inc.html" */?>
        <?php }?>
        <div class="activity-list-block" data-empty-text="Лента событий пока пуста.">
            <?php if (!empty($_smarty_tpl->tpl_vars['activity']->value)){?>
                <?php /*  Call merged included template "../dashboard/DashboardActivity.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardActivity.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16124103846244b38960e833-90360689');
content_6244b38965dc52_65854893($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardActivity.html" */?>
            <?php }else{ ?>
                <div class="empty-activity-text">
                    <h3>Лента событий пока пуста.</h3>
                    <p>Лента отображает события из всех приложений, установленных в вашем Webasyst.</p>
                </div>
            <?php }?>
        </div>
    </section>

    
    <section id="wa_widgets" class="js-dashboard-widgets">
        <?php /*  Call merged included template "../dashboard/DashboardWidgets.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardWidgets.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16124103846244b38960e833-90360689');
content_6244b3896bbee0_54971133($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardWidgets.html" */?>
        <div class="d-settings-wrapper" id="d-settings-wrapper" style="display: none">
            <div class="d-settings-container" id="d-settings-container">

                <div class="d-settings-inner-container">
                    <div class="d-settings-block" id="d-settings-block"></div>
                </div>

            </div>
        </div>
        
    </section>
</div>
<script>
    $(function () {
        // make header sticky
        WaHeader.headerBehavior('#wa_apps', { rootMargin: `1px 0px -100% 0px`, threshold: [0, 1] });

        new Dashboard();
        new Group();
        new Page();

        $(".js-activity-filter-toggler").on("click", function(event) {
            event.preventDefault();
            $('#activity-filter').slideToggle();
        });

        $('#wa_activity [data-wa-tooltip-content]').waTooltip({
            arrow: false,
            placement: "bottom"
        });
    });
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivityFilter.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b389638bf8_95473228')) {function content_6244b389638bf8_95473228($_smarty_tpl) {?>    <div class="activity-filter-wrapper">
        <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['is_not_full'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['check_count'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "select_options", null); ob_start(); ?>
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                <?php if (in_array($_smarty_tpl->tpl_vars['app_id']->value,$_smarty_tpl->tpl_vars['user_filters']->value)||!$_smarty_tpl->tpl_vars['user_filters']->value){?>
                    <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable("checked", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['check_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['check_count']->value+1, null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['is_not_full'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <li>
                    <span class="chip">
                        <label for="field_<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
">
                            <span class="wa-checkbox">
                                <input <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 type="checkbox" id="field_<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
">
                                <span>
                                    <span class="icon">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </span>
                            </span>
                            <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>

                        </label>
                    </span>
                </li>
            <?php } ?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <i class="fas fa-spinner fa-pulse loading" title="Загрузка" style="display: none"></i>
        <a href="javascript:void(0);" class="button light-gray rounded small activity-filter-toggler js-activity-filter-toggler">
            <i class="fas fa-filter"></i>
            <span id="activity-select-text" data-text="Фильтр по приложениям">Фильтр по приложениям<?php if ($_smarty_tpl->tpl_vars['is_not_full']->value){?>  (<?php echo $_smarty_tpl->tpl_vars['check_count']->value;?>
)<?php }?></span>
            <i class="fas fa-caret-down"></i>
        </a>
    </div>
    <form action="" id="activity-filter" style="display: none">
        <ul class="chips custom-ml-16">
            <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['select_options']->value);?>

        </ul>
    </form>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivity.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b38965dc52_65854893')) {function content_6244b38965dc52_65854893($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['datetime_group']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_activity_datetime'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['activity']->value[0]['datetime'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars['today'] = new Smarty_variable("Сегодня", null, 0);?>
<?php if ((!$_smarty_tpl->tpl_vars['_group']->value||$_smarty_tpl->tpl_vars['_group']->value==$_smarty_tpl->tpl_vars['today']->value)&&strtotime($_smarty_tpl->tpl_vars['_activity_datetime']->value)>=strtotime(date('Y-m-d'))){?>
    <div class="activity-divider today h3 1"><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
</div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['users_birthdays'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['today_users']->value['birthday'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['users_statuses'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['today_users']->value['status'])===null||$tmp==='' ? array() : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['users_birthdays']->value){?>
    <div class="users-group">
    <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_birthdays']->value['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['contact']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['contact']->iteration=0;
 $_smarty_tpl->tpl_vars['contact']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value){
$_smarty_tpl->tpl_vars['contact']->_loop = true;
 $_smarty_tpl->tpl_vars['contact']->iteration++;
 $_smarty_tpl->tpl_vars['contact']->index++;
 $_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration === $_smarty_tpl->tpl_vars['contact']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['contact']->index==4){?>
            <span class="userpic userpic48 outlined" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));">
                <span class="userstatus birthday"><i class="fas fa-birthday-cake"></i></span>
            </span>
            <?php break 1?>
        <?php }?>
        <span class="userpic userpic48 outlined" data-wa-tooltip-content="День рождения">
            <img src="<?php echo $_smarty_tpl->tpl_vars['contact']->value['photo_url_48'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['formatted_name'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php if ($_smarty_tpl->tpl_vars['contact']->last||$_smarty_tpl->tpl_vars['contact']->index<4){?>
                <span class="userstatus birthday"><i class="fas fa-birthday-cake"></i></span>
            <?php }?>
        </span>
    <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['users_statuses']->value){?>
    <div class="users-group">
        <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['status']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['status']->iteration=0;
 $_smarty_tpl->tpl_vars['status']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->iteration++;
 $_smarty_tpl->tpl_vars['status']->index++;
 $_smarty_tpl->tpl_vars['status']->last = $_smarty_tpl->tpl_vars['status']->iteration === $_smarty_tpl->tpl_vars['status']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['status']->index==4){?>
                <span class="userpic userpic48 outlined" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));">
                    <span class="userstatus"></span>
                </span>
                <?php break 1?>
            <?php }?>
            <span class="userpic userpic48 outlined" data-wa-tooltip-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['statuses'][1]['calendar']['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['status']->value['photo_url_48'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['formatted_name'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if ($_smarty_tpl->tpl_vars['status']->last||$_smarty_tpl->tpl_vars['status']->index<4){?>
                    <span class="userstatus" style="background-color: <?php echo $_smarty_tpl->tpl_vars['status']->value['statuses'][1]['calendar']['bg_color'];?>
"></span>
                <?php }?>
            </span>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['users_birthdays']->value||$_smarty_tpl->tpl_vars['users_statuses']->value){?>
<hr class="custom-mt-16">
<?php }?>

<?php if (strtotime($_smarty_tpl->tpl_vars['_activity_datetime']->value)<strtotime(date('Y-m-d'))){?>
    <div class="activity-divider today h3 2"><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
</div>
    <div class="activity-item activity-empty-today">
        <div class="item-content-wrapper">
            <div class="inline-content">
                Сегодня еще не было событий.
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['_group']->value&&$_smarty_tpl->tpl_vars['_group']->value!=$_smarty_tpl->tpl_vars['today']->value){?>
    <div class="activity-divider h3"><?php echo $_smarty_tpl->tpl_vars['_group']->value;?>
</div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['activity_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity_item']->key => $_smarty_tpl->tpl_vars['activity_item']->value){
$_smarty_tpl->tpl_vars['activity_item']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['app_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['activity_item']->value['app']['name'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['app_color'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['activity_item']->value['app']['sash_color'],"#aaa"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['activity_item']->value['datetime_group']!=$_smarty_tpl->tpl_vars['_group']->value&&$_smarty_tpl->tpl_vars['activity_item']->value['datetime_group']!=$_smarty_tpl->tpl_vars['today']->value){?>
        <div class="activity-divider h3"><?php echo $_smarty_tpl->tpl_vars['activity_item']->value['datetime_group'];?>
</div>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable($_smarty_tpl->tpl_vars['activity_item']->value['datetime_group'], null, 0);?>

    <div class="activity-item" data-id="<?php echo $_smarty_tpl->tpl_vars['activity_item']->value['id'];?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['activity_item']->value['contact_photo'])&&$_smarty_tpl->tpl_vars['activity_item']->value['is_user']){?>
            <header class="item-image-wrapper userpic userpic48">
                <img class="image-item" src="<?php echo waContact::getPhotoUrl($_smarty_tpl->tpl_vars['activity_item']->value['contact_id'],$_smarty_tpl->tpl_vars['activity_item']->value['contact_photo'],48,48);?>
" alt="">
            </header>
        <?php }?>
        <div class="item-content-wrapper">
            <div class="inline-content small">
                <a class="activity-username" href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['activity_item']->value['contact_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity_item']->value['contact_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                <span class="activity-action gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity_item']->value['action_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                <?php if (!empty($_smarty_tpl->tpl_vars['activity_item']->value['params_html'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['activity_item']->value['params_html'];?>

                <?php }?>
            </div>
            <span class="badge small" style="background: <?php echo $_smarty_tpl->tpl_vars['app_color']->value;?>
; font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</span>
            <span class="activity-datetime hint"><?php echo waDateTime::format('humandatetime',$_smarty_tpl->tpl_vars['activity_item']->value['datetime']);?>
</span>
        </div>
    </div>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['activity_load_more']->value)){?>
    <div class="activity-divider show-more-activity-wrapper is-loading">
        <a class="d-load-more-activity inline-link" id="d-load-more-activity" href="javascript:void(0);"><b><i>Показать еще</i></b></a>
        <i class="fas fa-spinner fa-pulse fa-lg" title="Loading"></i>
    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardWidgets.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b3896bbee0_54971133')) {function content_6244b3896bbee0_54971133($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_capture_array'] = new Smarty_variable(array(), null, 0);?>
<div class="d-widgets-block"><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/d3/d3.min.js"></script><div id="d-widgets-block"><?php  $_smarty_tpl->tpl_vars['block_widgets'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block_widgets']->_loop = false;
 $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['block_widgets']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['block_widgets']->key => $_smarty_tpl->tpl_vars['block_widgets']->value){
$_smarty_tpl->tpl_vars['block_widgets']->_loop = true;
 $_smarty_tpl->tpl_vars['block']->value = $_smarty_tpl->tpl_vars['block_widgets']->key;
 $_smarty_tpl->tpl_vars['block_widgets']->index++;
?><?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['size_sum'] = new Smarty_variable(array_sum($_smarty_tpl->tpl_vars['w']->value['size']), null, 0);?><?php $_smarty_tpl->tpl_vars['is_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['size_sum']->value==2, null, 0);?><?php $_smarty_tpl->tpl_vars['is_medium'] = new Smarty_variable($_smarty_tpl->tpl_vars['size_sum']->value==3, null, 0);?><?php $_smarty_tpl->tpl_vars['is_big'] = new Smarty_variable($_smarty_tpl->tpl_vars['size_sum']->value==4, null, 0);?><?php $_smarty_tpl->tpl_vars['has_small_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['small']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_medium_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['medium']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_big_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['big']), null, 0);?><?php } ?><div class="widget-group-wrapper<?php if ($_smarty_tpl->tpl_vars['is_small']->value||$_smarty_tpl->tpl_vars['is_medium']->value){?> js-nested-sortable<?php }?>"><?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?><?php /*  Call merged included template "./DashboardWidget.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./DashboardWidget.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16124103846244b38960e833-90360689');
content_6244b3896d5841_22873052($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./DashboardWidget.html" */?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_capture_array"); ob_start(); ?><script>DashboardWidgets[<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
] = new DashboardWidget({widget_id: <?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
,widget_href: <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['w']->value['href'])."&ui=2.0");?>
,widget_sort: <?php echo $_smarty_tpl->tpl_vars['w']->value['sort'];?>
,widget_group_index: <?php echo $_smarty_tpl->tpl_vars['block_widgets']->index;?>
,widget_size: {width: <?php echo $_smarty_tpl->tpl_vars['w']->value['size'][0];?>
,height: <?php echo $_smarty_tpl->tpl_vars['w']->value['size'][1];?>
}});</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php } ?></div><?php } ?><div class="widget-group-wrapper js-nested-sortable js-empty-group"></div></div><div class="empty-widgets-wrapper <?php if (empty($_smarty_tpl->tpl_vars['widgets']->value)){?>is-shown<?php }?>" id="empty-widgets-wrapper">Ваш дашборд пуст. Добавьте на него виджеты с помощью кнопки «Виджеты» вверху.</div><div id="widgets-list-wrapper" data-backend-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa_backend_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"></div></div><?php echo preg_replace('!\s+!u', ' ',smarty_modifier_join($_smarty_tpl->tpl_vars['_capture_array']->value,''));?>


<style>
    .widget-group-wrapper.widget-chosen {
        transition: auto !important;
    }
    .widget-ghost:not(.widget-drag) {
        opacity: 0;
    }
    .widget-drag {
       opacity: 1 !important;
        background: rgba(0,0,0,0.06);
    }
    .widget-chosen:not(.widget-drag) {
        cursor: move;
    }
    .widget-drag .widget-controls-wrapper {
        display: none !important;
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale3d(0.3, 0.3, 0.3);
        }

        50% {
            opacity: 1;
        }
    }

    .zoomIn {
        animation-name: zoomIn;
        animation-duration: 500ms;
        animation-fill-mode: both;
    }
</style>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardWidget.html" */ ?>
<?php if ($_valid && !is_callable('content_6244b3896d5841_22873052')) {function content_6244b3896d5841_22873052($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_widget_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['w']->value['size'][0], null, 0);?><?php $_smarty_tpl->tpl_vars['_widget_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['w']->value['size'][1], null, 0);?><?php $_smarty_tpl->tpl_vars['is_small'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==1)&&($_smarty_tpl->tpl_vars['_widget_height']->value==1)), null, 0);?><?php $_smarty_tpl->tpl_vars['is_medium'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==2)&&($_smarty_tpl->tpl_vars['_widget_height']->value==1)), null, 0);?><?php $_smarty_tpl->tpl_vars['is_big'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==2)&&($_smarty_tpl->tpl_vars['_widget_height']->value==2)), null, 0);?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['widget_color'] = new Smarty_variable("#".$_tmp1.$_tmp2.$_tmp3, null, 0);?><?php $_smarty_tpl->tpl_vars['has_small_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['small']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_medium_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['medium']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_big_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['big']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_settings'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['w']->value['has_settings']), null, 0);?><div class="widget-wrapper widget-<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][0];?>
x<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][1];?>
" id="widget-wrapper-<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
"><div class="widget-outer-container"><div class="widget-inner-container"><div class="widget-settings-wrapper"></div><div class="widget-block" id="widget-<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
"><div class="loading-wrapper"><i class="fas fa-spinner fa-spin"></i></div></div><div class="widget-controls-wrapper"><div class="delete-control-wrapper"><a class="control-item delete-widget-link" href="javascript:void(0);" title="Удалить виджет" draggable="false"><i class="fas fa-times"></i></a></div><div class="size-controls-wrapper"><?php if ($_smarty_tpl->tpl_vars['has_small_size']->value){?><a class="control-item set-small-size <?php if ($_smarty_tpl->tpl_vars['is_small']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Маленький размер" draggable="false"><span></span><span></span><span></span><span></span></a><?php }?><?php if ($_smarty_tpl->tpl_vars['has_medium_size']->value){?><a class="control-item set-medium-size <?php if ($_smarty_tpl->tpl_vars['is_medium']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Средний размер" draggable="false"><span></span><span></span><span></span></a><?php }?><?php if ($_smarty_tpl->tpl_vars['has_big_size']->value){?><a class="control-item set-big-size <?php if ($_smarty_tpl->tpl_vars['is_big']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Большой размер" draggable="false"></a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_settings']->value){?><div class="settings-control-wrapper"><a class="control-item show-settings-link bold" href="javascript:void(0);" title="Настройки" draggable="false"><i class="fas fa-cog" style="display: none"></i><span>Настройки</span></a></div><?php }?></div></div></div></div><?php }} ?>