<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:20
         compiled from "/home/miricouz/xx.uz/wa-widgets/clock/templates/Round.html" */ ?>
<?php /*%%SmartyHeaderCode:4648979946244b38c167ad9-49795240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20caa9fabac637ae345a37fc5f7e8fdbe805d27f' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-widgets/clock/templates/Round.html',
      1 => 1624000810,
      2 => 'file',
    ),
    'ec33b160ecf9890d843675bd5082839a817a1188' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-widgets/clock/js/clockController.js',
      1 => 1540900260,
      2 => 'file',
    ),
    'c257711be492cd8e75529f30c3841975e2db0fd8' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-widgets/clock/css/roundClock.css',
      1 => 1617787741,
      2 => 'file',
    ),
    'cd047e5fc56e3b1e75bf6d16f9ef6b89c663d50e' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-widgets/clock/css/roundClock-legacy.css',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4648979946244b38c167ad9-49795240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ui' => 0,
    'town' => 0,
    'widget_id' => 0,
    'widget_url' => 0,
    'wa' => 0,
    'widget_name' => 0,
    'widget_app' => 0,
    'source' => 0,
    'offset' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b38c1d82a2_29844887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b38c1d82a2_29844887')) {function content_6244b38c1d82a2_29844887($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['ui']->value=='2.0'){?>
    <div class="round-clock-wrapper <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>has-town<?php }?>">
        <div class="round-clock-block" id="round-clock-<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"></div>
        <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>
            <div class="town-name-wrapper"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['town']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php }?>
    </div>

    
    <script><?php /*  Call merged included template "../js/clockController.js" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../js/clockController.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '4648979946244b38c167ad9-49795240');
content_6244b38c199ad7_96543385($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../js/clockController.js" */?></script>

    
    <script>
    ( function() {
        var is_loaded = (typeof RoundClock !== "undefined"),
            js_href = "<?php echo $_smarty_tpl->tpl_vars['widget_url']->value;?>
js/roundClock.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
            widget = DashboardWidgets["<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"],
            options = {
                widget_id: "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
",
                widget_name: "<?php echo $_smarty_tpl->tpl_vars['widget_name']->value;?>
",
                widget_app: "<?php echo $_smarty_tpl->tpl_vars['widget_app']->value;?>
",
                show_town: <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>true<?php }else{ ?>false<?php }?>,
                source: "<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
",
                offset: <?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
,
                size: "<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
"
            };

        if (is_loaded) {
            widget.clock = new RoundClock(options);

        } else {

            $.getScript(js_href, function() {
                widget.clock = new RoundClock(options);
            });
        }
    })();
    </script>

    
    <style><?php /*  Call merged included template "../css/roundClock.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/roundClock.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '4648979946244b38c167ad9-49795240');
content_6244b38c1ad231_89391199($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/roundClock.css" */?></style>

    <?php if ($_smarty_tpl->tpl_vars['wa']->value->whichUI()=='2.0'){?>
        <style>
            .round-clock-wrapper .round-clock-block .hour-hand,
            .round-clock-wrapper .round-clock-block .minute-hand { stroke: var(--text-color-strongest) !important; }
        </style>
    <?php }?>
<?php }else{ ?>
    <div class="round-clock-wrapper <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>has-town<?php }?>">
        <div class="round-clock-block" id="round-clock-<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"></div>
        <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>
            <div class="town-name-wrapper"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['town']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php }?>
    </div>

    
    <script><?php /*  Call merged included template "../js/clockController.js" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../js/clockController.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '4648979946244b38c167ad9-49795240');
content_6244b38c199ad7_96543385($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../js/clockController.js" */?></script>

    
    <script>
        ( function() {
            var is_loaded = (typeof RoundClock !== "undefined"),
                js_href = "<?php echo $_smarty_tpl->tpl_vars['widget_url']->value;?>
js/roundClock.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
                widget = DashboardWidgets["<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"],
                options = {
                    widget_id: "<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
",
                    widget_name: "<?php echo $_smarty_tpl->tpl_vars['widget_name']->value;?>
",
                    widget_app: "<?php echo $_smarty_tpl->tpl_vars['widget_app']->value;?>
",
                    show_town: <?php if (!empty($_smarty_tpl->tpl_vars['town']->value)){?>true<?php }else{ ?>false<?php }?>,
                    source: "<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
",
                    offset: <?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
,
                    size: "<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
"
                };

            if (is_loaded) {
                widget.clock = new RoundClock(options);

            } else {

                $.getScript(js_href, function() {
                    widget.clock = new RoundClock(options);
                });
            }
        })();
    </script>

    
    <style><?php /*  Call merged included template "../css/roundClock-legacy.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/roundClock-legacy.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '4648979946244b38c167ad9-49795240');
content_6244b38c1cc733_41188121($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/roundClock-legacy.css" */?></style>

    <?php if ($_smarty_tpl->tpl_vars['wa']->value->whichUI()=='2.0'){?>
        <style>
            .round-clock-wrapper .round-clock-block .hour-hand,
            .round-clock-wrapper .round-clock-block .minute-hand { stroke: var(--text-color-strongest) !important; }
        </style>
    <?php }?>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:20
         compiled from "/home/miricouz/xx.uz/wa-widgets/clock/js/clockController.js" */ ?>
<?php if ($_valid && !is_callable('content_6244b38c199ad7_96543385')) {function content_6244b38c199ad7_96543385($_smarty_tpl) {?>var ClockController;

if (typeof ClockController === "undefined") {

    ( function() {

        ClockController = function(controller_app, controller_name) {
            this.time_period = 1000;
            this.clockInterval = false;
            this.controller_app = controller_app;
            this.controller_name = controller_name;

            this.runClock();
        };

        ClockController.prototype.runClock = function() {
            var that = this;

            that.clockInterval = setInterval( function() {

                if ( DashboardControllers.hasOwnProperty(that.controller_app) &&
                    DashboardControllers[that.controller_app].hasOwnProperty(that.controller_name) &&
                    DashboardControllers[that.controller_app][that.controller_name].hasOwnProperty('widget_list') &&
                    DashboardControllers[that.controller_app][that.controller_name]['widget_list'].length
                ) {

                    var widgetList = DashboardControllers[that.controller_app][that.controller_name]['widget_list'],
                        widgetIDArray = {};

                        for (var index in widgetList) {
                            if (widgetList.hasOwnProperty(index)) {
                                var widget_id = widgetList[index];

                                if (typeof widgetIDArray[widget_id] === "undefined") {
                                    if ( (typeof DashboardWidgets[widget_id] !== "undefined") && (typeof DashboardWidgets[widget_id]['clock'] !== "undefined") ) {
                                        var widgetClock = DashboardWidgets[widget_id]['clock'];

                                        widgetClock.refreshClock();

                                        widgetIDArray[widget_id] = true;

                                    } else {
                                        widgetList.splice(index, 1);
                                    }

                                } else {
                                    widgetList.splice(index, 1);
                                }
                            }
                        }

                } else {
                    that.stopClock();
                }

            }, that.time_period);
        };

        ClockController.prototype.stopClock = function() {
            var that = this;

            //console.log("Удаление");

            // Stop Interval
            clearInterval(that.clockInterval);

            if (DashboardControllers.hasOwnProperty(that.controller_app) &&
                DashboardControllers[that.controller_app].hasOwnProperty(that.controller_name)
            ) {
                // Delete Controller from Array
                delete DashboardControllers[that.controller_app][that.controller_name];
            }
        };

    })();

}<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:20
         compiled from "/home/miricouz/xx.uz/wa-widgets/clock/css/roundClock.css" */ ?>
<?php if ($_valid && !is_callable('content_6244b38c1ad231_89391199')) {function content_6244b38c1ad231_89391199($_smarty_tpl) {?>.round-clock-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  font-size: 16px;
}
.round-clock-wrapper .town-name-wrapper {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  box-sizing: border-box;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  text-align: center;
  font-weight: bold;
  font-size: 18px;
  color: var(--text-color);
}
.round-clock-wrapper .round-clock-block {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.round-clock-wrapper .round-clock-block svg {
  display: block;
  margin: auto;
  stroke: #aaa;
}
.round-clock-wrapper .round-clock-block .second-hand {
  stroke: #a00;
  stroke-width: 0.25em;
}
.round-clock-wrapper .round-clock-block .minute-hand {
  stroke: #000;
  stroke-width: 0.5em;
  stroke-linecap: round;
}
.round-clock-wrapper .round-clock-block .hour-hand {
  stroke: #000;
  stroke-width: 0.75em;
  stroke-linecap: round;
}
.round-clock-wrapper .round-clock-block .hands-cover {
  stroke-width: 0.25em;
  fill: #fff;
  stroke: #a00;
}
.round-clock-wrapper .round-clock-block .second-tick {
  stroke-width: 0.125em;
  fill: #000;
}
.round-clock-wrapper .round-clock-block .hour-tick {
  stroke-width: 0.25em;
}
.round-clock-wrapper .round-clock-block .second-label {
  font-size: 1em;
  fill: #aaa;
}
.round-clock-wrapper .round-clock-block .hour-label {
  font-size: 1.5em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-hand {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .minute-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .minute-hand,
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-hand {
  stroke-width: 0.25em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hands-cover,
.widget-2x1 .round-clock-wrapper .round-clock-block .hands-cover {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-tick,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-tick {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-tick,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-tick {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-label,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-label {
  font-size: 0.75em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-label,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-label {
  font-size: 0.75em;
}
.widget-1x1 .round-clock-wrapper.has-town .round-clock-block .second-label,
.widget-2x1 .round-clock-wrapper.has-town .round-clock-block .second-label,
.widget-2x2 .round-clock-wrapper.has-town .round-clock-block .second-label {
  display: none;
}
.widget-1x1 .round-clock-wrapper .town-name-wrapper,
.widget-2x1 .round-clock-wrapper .town-name-wrapper {
  padding: 0 0 0.5em;
  font-size: 14px;
}
.widget-2x1 .round-clock-wrapper .round-clock-block {
  left: 25%;
  width: 50%;
}
.widget-2x2 .round-clock-wrapper .town-name-wrapper {
  padding: 0 0 1em;
}
.mobile .round-clock-wrapper {
  font-size: 1rem;
}
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:20
         compiled from "/home/miricouz/xx.uz/wa-widgets/clock/css/roundClock-legacy.css" */ ?>
<?php if ($_valid && !is_callable('content_6244b38c1cc733_41188121')) {function content_6244b38c1cc733_41188121($_smarty_tpl) {?>.round-clock-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  font-size: 16px;
}
.round-clock-wrapper .town-name-wrapper {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  box-sizing: border-box;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  text-align: center;
  font-weight: bold;
  color: #555;
}
.round-clock-wrapper .round-clock-block {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.round-clock-wrapper .round-clock-block svg {
  display: block;
  margin: auto;
  stroke: #aaa;
}
.round-clock-wrapper .round-clock-block .second-hand {
  stroke: #a00;
  stroke-width: 0.25em;
}
.round-clock-wrapper .round-clock-block .minute-hand {
  stroke: #000;
  stroke-width: 0.5em;
  stroke-linecap: round;
}
.round-clock-wrapper .round-clock-block .hour-hand {
  stroke: #000;
  stroke-width: 0.75em;
  stroke-linecap: round;
}
.round-clock-wrapper .round-clock-block .hands-cover {
  stroke-width: 0.25em;
  fill: #fff;
  stroke: #a00;
}
.round-clock-wrapper .round-clock-block .second-tick {
  stroke-width: 0.125em;
  fill: #000;
}
.round-clock-wrapper .round-clock-block .hour-tick {
  stroke-width: 0.25em;
}
.round-clock-wrapper .round-clock-block .second-label {
  font-size: 1em;
  fill: #aaa;
}
.round-clock-wrapper .round-clock-block .hour-label {
  font-size: 1.5em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-hand {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .minute-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .minute-hand,
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-hand,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-hand {
  stroke-width: 0.25em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hands-cover,
.widget-2x1 .round-clock-wrapper .round-clock-block .hands-cover {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-tick,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-tick {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-tick,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-tick {
  stroke-width: 0.125em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .second-label,
.widget-2x1 .round-clock-wrapper .round-clock-block .second-label {
  font-size: 0.75em;
}
.widget-1x1 .round-clock-wrapper .round-clock-block .hour-label,
.widget-2x1 .round-clock-wrapper .round-clock-block .hour-label {
  font-size: 0.75em;
}
.widget-1x1 .round-clock-wrapper.has-town .round-clock-block .second-label,
.widget-2x1 .round-clock-wrapper.has-town .round-clock-block .second-label,
.widget-2x2 .round-clock-wrapper.has-town .round-clock-block .second-label {
  display: none;
}
.widget-1x1 .round-clock-wrapper .town-name-wrapper,
.widget-2x1 .round-clock-wrapper .town-name-wrapper {
  padding: 0 0 0.5em;
}
.widget-2x1 .round-clock-wrapper .round-clock-block {
  left: 25%;
  width: 50%;
}
.widget-2x2 .round-clock-wrapper .town-name-wrapper {
  padding: 0 0 1em;
}
.tv .round-clock-wrapper {
  background: #000;
  width: 100.5%;
  height: 100.5%;
  font-size: 1rem;
}
.tv .round-clock-wrapper .town-name-wrapper {
  color: #d0d0d0;
}
.tv .round-clock-wrapper .round-clock-block .minute-hand,
.tv .round-clock-wrapper .round-clock-block .hour-hand {
  stroke: #fff;
}
.tv .round-clock-wrapper .round-clock-block .hour-tick {
  stroke: #d0d0d0;
}
.tv .round-clock-wrapper .round-clock-block .second-tick {
  stroke: #aaa;
}
.tv .round-clock-wrapper .round-clock-block .hands-cover {
  fill: #000;
}
.mobile .round-clock-wrapper {
  font-size: 1rem;
}
<?php }} ?>