<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:17
         compiled from "/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardAppsBlock.html" */ ?>
<?php /*%%SmartyHeaderCode:11676974666244b389724db4-75513189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bceec0bac9b24d4cc448449ea11626af0d0dd67' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-system/webasyst/templates/actions/dashboard/DashboardAppsBlock.html',
      1 => 1631697814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11676974666244b389724db4-75513189',
  'function' => 
  array (
    '_renderAppsItem' => 
    array (
      'parameter' => 
      array (
        '_id' => '',
        '_info' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    '_info' => 0,
    'backend_url' => 0,
    '_id' => 0,
    'current_app' => 0,
    'request_uri' => 0,
    '_item_url' => 0,
    'counts' => 0,
    'root_url' => 0,
    '_version' => 0,
    '_count' => 0,
    'header_items' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b3897700e4_60287454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b3897700e4_60287454')) {function content_6244b3897700e4_60287454($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function__renderAppsItem')) {
    function smarty_template_function__renderAppsItem($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderAppsItem']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if (!empty($_smarty_tpl->tpl_vars['_info']->value['app_id'])&&!empty($_smarty_tpl->tpl_vars['_info']->value['link'])){?><?php $_smarty_tpl->tpl_vars['_item_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['backend_url']->value).((string)$_smarty_tpl->tpl_vars['_info']->value['app_id'])."/".((string)$_smarty_tpl->tpl_vars['_info']->value['link'])."/", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_item_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['backend_url']->value).((string)$_smarty_tpl->tpl_vars['_id']->value)."/", null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_info']->value['version'])){?><?php $_smarty_tpl->tpl_vars['_version'] = new Smarty_variable("?v=".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_info']->value['version'], ENT_QUOTES, 'UTF-8', true)), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_version'] = new Smarty_variable(null, null, 0);?><?php }?><li id="wa-app-<?php echo str_replace('.','-',$_smarty_tpl->tpl_vars['_id']->value);?>
" data-app="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value==$_smarty_tpl->tpl_vars['current_app']->value||stristr($_smarty_tpl->tpl_vars['request_uri']->value,$_smarty_tpl->tpl_vars['_item_url']->value)!==false){?> class="selected"<?php }?>><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(null, null, 0);?><?php if ($_smarty_tpl->tpl_vars['counts']->value&&isset($_smarty_tpl->tpl_vars['counts']->value[$_smarty_tpl->tpl_vars['_id']->value])){?><?php if (is_array($_smarty_tpl->tpl_vars['counts']->value[$_smarty_tpl->tpl_vars['_id']->value])){?><?php $_smarty_tpl->tpl_vars['_item_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['counts']->value[$_smarty_tpl->tpl_vars['_id']->value]['url'], null, 0);?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['counts']->value[$_smarty_tpl->tpl_vars['_id']->value]['count'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['counts']->value[$_smarty_tpl->tpl_vars['_id']->value], null, 0);?><?php }?><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['_item_url']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['_info']->value['img'])){?><img<?php if (!empty($_smarty_tpl->tpl_vars['_info']->value['icon'][96])){?> data-src2="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['_info']->value['icon'][96];?>
<?php echo $_smarty_tpl->tpl_vars['_version']->value;?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['_info']->value['icon'][96])){?><?php echo $_smarty_tpl->tpl_vars['_info']->value['icon'][96];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_info']->value['img'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['_version']->value;?>
" alt=""><?php }?><span><?php echo ifempty($_smarty_tpl->tpl_vars['_info']->value['name']);?>
</span><?php if ($_smarty_tpl->tpl_vars['_count']->value){?><span class="badge indicator"><?php echo $_smarty_tpl->tpl_vars['_count']->value;?>
</span><?php }?></a></li><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<div id="wa-applist" class="js-applist"><ul class="js-dashboard-grid<?php if (is_array($_smarty_tpl->tpl_vars['counts']->value)){?> counts-cached<?php }?>"><?php  $_smarty_tpl->tpl_vars['_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_info']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['header_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_info']->key => $_smarty_tpl->tpl_vars['_info']->value){
$_smarty_tpl->tpl_vars['_info']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_info']->key;
?><?php smarty_template_function__renderAppsItem($_smarty_tpl,array('_id'=>$_smarty_tpl->tpl_vars['_id']->value,'_info'=>$_smarty_tpl->tpl_vars['_info']->value));?>
<?php } ?></ul></div>
<script>
  ( function($) {
    function toggleDashboardItems(){
      const grid = $('.js-dashboard-grid');

      const gridItems = grid.find('li');
      const itemsWidth = grid.find('li').outerWidth();
      const colCounter = Math.floor((grid.outerWidth())/itemsWidth);
      const rowCounter = Math.ceil(gridItems.length/colCounter);

      let rowsToShow;
      if ($(window).width() < 1400) {
        rowsToShow = 3;
      } else {
        rowsToShow = 4;
      }

      const itemsToShow = rowsToShow * colCounter;
      const expandItem = $('<div class="expand"><i class="fas fa-arrow-circle-down"></i></div>');

      if (rowCounter <= rowsToShow || $(window).width() < 1024) {
        grid.css('height', '');
        grid.find('.expand').remove();
        grid.removeClass('expanded collapsed');
        return;
      }

      if (rowCounter > rowsToShow) {
        const topValue = grid.offset().top;
        const bottomValue = grid.find('li:nth-child('+ itemsToShow +')')[0].getBoundingClientRect().bottom
        const gridMaxHeight = bottomValue - topValue;

        grid.css('height', gridMaxHeight);

        if (!grid.hasClass('expanded')) {
          grid.addClass('collapsed');
        }

        if (!grid.has('.expand').length) {
          grid.append(expandItem)
        }

        expandItem.on('click', function() {
          grid.toggleClass('expanded');
          grid.toggleClass('collapsed');
          $(this).find('svg').toggleClass('rotated')
        })
      }
    }

    toggleDashboardItems();
    $(window).on('resize refresh', toggleDashboardItems);
  })(jQuery);
</script>
<?php }} ?>