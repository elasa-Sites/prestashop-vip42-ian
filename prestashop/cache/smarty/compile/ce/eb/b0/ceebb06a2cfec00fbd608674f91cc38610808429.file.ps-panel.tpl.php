<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13625855225f7f01e66fd790-72833098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceebb06a2cfec00fbd608674f91cc38610808429' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-panel.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13625855225f7f01e66fd790-72833098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e6738986_72436362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e6738986_72436362')) {function content_5f7f01e6738986_72436362($_smarty_tpl) {?>

<script type="riot/tag">
    <ps-panel-footer>
        <div class="panel-footer">
            <yield/>
        </div>

        <style scoped>

            <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

                .btn.pull-right {
                    margin-left: 5px;
                }
                .btn.pull-left {
                    margin-right: 5px;
                }

                a.btn i {
                    display: block;
                    width: 30px;
                    height: 30px;
                    margin: 0 auto;
                    font-size: 28px;
                    background: transparent;
                    background-size: 26px;
                    background-position: center
                }

            <?php } else { ?>

                .panel-footer {
                    margin: 20px -13px 0px;
                    background: rgba(182, 182, 182, 0.1);
                    display: block;
                    border-top: 1px solid rgba(160, 160, 160, 0.19);
                    height: 80px;
                    position: relative;
                    bottom: -13px;
                }

                .btn {
                    margin: 0;
                    background: none;
                    border: none;
                    padding: 0 20px;
                    outline: none;
                    cursor: pointer;
                    font-size: 11px;
                    text-align: center;
                    height: 100%;
                    line-height: normal;
                }

                .btn.pull-right {
                    border-left: 1px solid rgba(160, 160, 160, 0.19);
                    float: right;
                }

                .btn.pull-left {
                    border-right: 1px solid rgba(160, 160, 160, 0.19);
                    float: left;
                }

                .btn:hover {
                    background: rgba(182, 182, 182, 0.1);
                }

                .btn img {
                    display: block;
                    padding: 0;
                    margin-bottom: 5px;
                    margin-left: auto;
                    margin-right: auto;
                }

            <?php }?>

        </style>
    </ps-panel-footer>
</script>

<script type="riot/tag">
    <ps-panel-footer-submit>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <button type="submit" class="btn btn-default pull-{ opts.direction }" name="{ opts.name }" disabled="{ typeof opts.disabled !== 'undefined' }">
                <i class="{ opts.icon }"></i> { opts.title }
            </button>

        <?php } else { ?>

            <button type="submit" class="btn pull-{ opts.direction }" name="{ opts.name }" disabled="{ typeof opts.disabled !== 'undefined' }">
                <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.title }
            </button>

            <style scoped>

                button i.fa {
                    display: block;
                    font-size: 2.5em;
                    margin-bottom: 5px;
                    color: #585a69;
                }

            </style>

        <?php }?>

    </ps-panel-footer-submit>
</script>

<script type="riot/tag">
    <ps-panel-footer-link>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <a class="btn btn-default pull-{ opts.direction }" href="{ opts.href }" target="{ opts.newTab == 'true' ? '_blank' : '' }">
                <i class="{ opts.icon }"></i> { opts.title }
            </a>

        <?php } else { ?>

            <a class="btn pull-{ opts.direction }" href="{ opts.href }" target="{ opts.newTab == 'true' ? '_blank' : '' }">
                <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.title }
            </a>

            <style scoped>

                a img {
                    margin-top: 15px;
                }

                a i.fa {
                    display: block;
                    font-size: 2.5em;
                    margin-bottom: 5px;
                    color: #585a69;
                    margin-top: 18px;
                }

            </style>

        <?php }?>

    </ps-panel-footer-link>
</script>

<script type="riot/tag">
    <ps-panel>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <div class="panel">
                <div class="panel-heading" if={ opts.icon || opts.header }>
                        <i class="{ opts.icon }" if={ opts.icon }></i> { opts.header }
                </div>

                <yield/>

            </div>

        <?php } else { ?>

            <fieldset>
                <legend if={ opts.header }>
                    <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.header }
                </legend>

                <yield/>

            </fieldset>

            <style scoped>

                fieldset {
                    margin-bottom: 20px;
                    margin-left: auto;
                    margin-right: auto;
                }

            </style>

        <?php }?>

    </ps-panel>
</script>

<script type="riot/tag">
    <ps-panel-divider>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>
            <hr/>
        <?php } else { ?>
            <div class="separation"></div>
        <?php }?>

    </ps-panel-divider>
</script>
<?php }} ?>
