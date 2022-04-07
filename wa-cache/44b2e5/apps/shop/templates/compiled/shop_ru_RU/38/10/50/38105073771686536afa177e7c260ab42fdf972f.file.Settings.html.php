<?php /* Smarty version Smarty-3.1.14, created on 2022-03-31 00:46:28
         compiled from "/home/miricouz/xx.uz/wa-apps/shop/plugins/redirect/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:18981666346244b3947222c6-82394953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38105073771686536afa177e7c260ab42fdf972f' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-apps/shop/plugins/redirect/templates/actions/settings/Settings.html',
      1 => 1647782756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18981666346244b3947222c6-82394953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6244b39474b1d9_01128676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6244b39474b1d9_01128676')) {function content_6244b39474b1d9_01128676($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../../../../templates/actions/plugins/PluginsSettings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>

    input[type='submit'], input[type='checkbox'], button, label {
        cursor: pointer;
    }

    #plugins-settings-form .field:first-of-type > .value {
        padding: 0.5rem;
        border: 1px solid transparent;
        -webkit-border-radius: 0.25rem;
        border-radius: 0.25rem;

        -webkit-transition: all 200ms linear;
        -moz-transition: all 200ms linear;
        -ms-transition: all 200ms linear;
        -o-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    #plugins-settings-form .field > .value.is-active {
        background: rgba(123, 123, 123, 0.1);
        border-color: rgba(123, 123, 123, 0.1);
    }
</style>

<script type="text/javascript">

    (function ($) {
        var $form = $("#plugins-settings-form");

        var initialize = function () {
            var inputsArray = $form.find(".field:first-of-type > .value input[type=\"checkbox\"]");

            inputsArray.each(function () {
                toggleBlock($(this));
            });

            bindEvents(inputsArray)
        };
        var $container = $form.find('table.zebra:first > tbody');

        $form.on('click', 'a.js-action', function () {
            var $this = $(this);
            var $rule;
            $.shop.trace('click', $this.attr('href'));
            switch ($this.attr('href').replace(/(^#\/redirect\/|\/$)/g, '')) {
                case 'delete':
                    $rule = $this.parents('tr:first');
                    if ($container.find('tr').length > 1) {
                        $rule.remove();
                    } else {
                        $rule.find(':input').val(null);
                        $rule.find(':checkbox').attr('checked', null);
                        $container.find('>tr:last input:first').focus();
                    }
                    break;
                case 'add':
                    var count = $container.find('>tr').length;
                    $rule = $container.find('>tr:last').clone();
                    $rule.find(':input').val(null);
                    $rule.find(':input').each(function (index, el) {
                        el.name = el.name.replace(/\[\d+]/, '[' + count + ']');
                        el.id = el.id.replace(/_\d+_/, '_' + count + '_');
                    });
                    $rule.find(':checkbox').attr('checked', null);
                    $rule.appendTo($container);
                    $container.find('>tr:last input:first').focus();
                    break;
            }
            return false;
        });


        var bindEvents = function (inputsArray) {
            inputsArray.on("click", function () {
                toggleBlock($(this));
            });
        };

        var toggleBlock = function (input) {
            var is_checked = input.attr("checked"),
                    block = input.closest(".value"),
                    activeClass = "is-active";

            if (!is_checked) {
                block.removeClass(activeClass);
                block.find('.hint').hide();
            } else {
                block.addClass(activeClass);
                block.find('.hint').show();
            }
        };

        $(document).ready(function () {
            initialize();
        });

    })(jQuery);

</script><?php }} ?>