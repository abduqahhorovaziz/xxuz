<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:43:45
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivity.html" */ ?>
<?php /*%%SmartyHeaderCode:5396704926244b2f13ae520-23420819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff895c43cf645001f06fc34049a3b40eaa4637b' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardActivity.html',
      1 => 1631697814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5396704926244b2f13ae520-23420819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datetime_group' => 0,
    'activity' => 0,
    '_group' => 0,
    'today' => 0,
    '_activity_datetime' => 0,
    'today_users' => 0,
    'users_birthdays' => 0,
    'contact' => 0,
    'users_statuses' => 0,
    'status' => 0,
    'activity_item' => 0,
    'wa_backend_url' => 0,
    'app_color' => 0,
    'app_name' => 0,
    'activity_load_more' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b2f1434821_50639392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b2f1434821_50639392')) {function content_6244b2f1434821_50639392($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['datetime_group']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
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
<?php }} ?>