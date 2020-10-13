<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343412885f7f01e66bc0c5-59243166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7221973578d16dbd1a8ec3f9b2621eb0b2dc4c29' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-tabs.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343412885f7f01e66bc0c5-59243166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e66f6a82_33499533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e66f6a82_33499533')) {function content_5f7f01e66f6a82_33499533($_smarty_tpl) {?>

<script type="riot/tag">

    <ps-tab>

        <ps-panel if={ opts.panel != 'false' } icon="{ this.icon }"  header="{ this.header }" img="{ opts.img }" fa="{ opts.fa }">
            <yield/>
        </ps-panel>

        <div if={ opts.panel == 'false' }>
            <yield />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <style scoped>

                .panel {
                    border-top-left-radius: 0 !important;
                    border-top-right-radius: 0 !important;
                }

            </style>

        <?php } else { ?>

            <style scoped>

                :scope {
                    display: none;
                }

                :scope.active {
                    display: block;
                }

            </style>

        <?php }?>

        if (this.parent && this.parent.opts.position != 'top') {
            this.header = opts.label;
            this.icon = opts.icon;
        }
        $(this.root).addClass('tab-pane')
        if (this.opts.active == 'true')
            $(this.root).addClass('active')

    </ps-tab>

</script>

<script type="riot/tag">

  <ps-tabs>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <div class="row">

                <div class="{ col-md-2: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
                    <ul class="{ nav: true, list-group: this.opts.position == 'left', nav-tabs: this.opts.position != 'left' }">
                        <li class="{ list-group-item: this.parent.opts.position == 'left', active: tab.opts.active == 'true' }" each={ tab in this.tabs }>
                            <a href="#{ tab.opts.id }" data-toggle="tab"><i class="{ tab.opts.icon } icon-fw" if={ tab.opts.icon }></i> { tab.opts.label } <span if={ tab.opts.badge } class="badge pull-right">{ tab.opts.badge }</span></a>
                        </li>
                    </ul>
                </div>

                <div class="{ tab-content: true, col-md-10: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
                    <yield/>
                </div>

                <div class="clearfix"></div>
            </div>

        <?php } else { ?>

            <div class="tabs-container">

                <ul class="{ tabs-navigation: true, tabs-navigation-left: this.opts.position == 'left', tabs-navigation-top: this.opts.position != 'left' }">
                        <li each={ tab in this.tabs } class={ active: tab.opts.active == 'true' }>
                            <a href="#{ tab.opts.id }" onclick={ changeTab }>
                            <img src="{ tab.opts.img }" if={ !tab.opts.fa } /><i class="fa fa-{ tab.opts.fa } fa-fw" if={ tab.opts.fa }></i> { tab.opts.label } <span if={ tab.opts.badge } class="badge pull-right">{ tab.opts.badge }</span>
                            </a>
                        </li>
                </ul>

                <div class="{ tabs-content: true, tabs-content-left: this.opts.position == 'left', tabs-content-top: this.opts.position != 'left' }">
                    <yield/>
                </div>

                <div class="clearfix"></div>

            </div>

        <?php }?>

        this.on('mount', function() {
            this.tabs = this.tags['ps-tab'];
            this.update();
        })

        // Only PS 1.5
        changeTab(event) {
            // Change active tab
            $(this.root).find('> .tabs-container > ul > li.active').removeClass('active')
            $(event.target).closest('li').addClass('active')

            // Change active tab content
            $(this.root).find('> .tabs-container > .tabs-content > .active').removeClass('active')
            id_target = $(event.target).closest('a').attr('href')
            $(this.root).find('> .tabs-container > .tabs-content > ' + id_target).addClass('active')

            event.preventDefault();

            return false
        }

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

            <style scoped>

                li.list-group-item {
                    padding: 0 !important;
                }

                li.list-group-item a {
                    color: #555;
                }

                li.list-group-item:hover {
                    background-color: #f5f5f5;
                }

                li.list-group-item.active a {
                    color: white;
                }

                .nav.list-group li a {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                }

                .nav li a .badge {
                    margin-top: -3px;
                    margin-left: 5px;
                }

                .nav.list-group li a .badge {
                    position: absolute;
                    right: 8px;
                    top: 12px;
                }

            </style>

        <?php } else { ?>

            <style scoped>

                .tabs-container {
                    margin: 20px 0;
                }

                .tabs-content-left {
                    margin-left: 200px;
                }

                .tabs-navigation li {
                    background: #fafafa;
                }

                .tabs-navigation li:hover {
                    background: #F1F3F9;
                }

                .tabs-navigation li a {
                    color: #666;
                    cursor: pointer;
                    padding: 10px 15px;
                    display: block;
                    line-height: 18px;
                }

                .tabs-navigation li a img {
                    margin-top: -4px;
                    max-width: 16px;
                    max-height: 16px;
                }

                .tabs-navigation li a .badge {
                    background: #EBEDF4;
                    border: 1px solid #EBEDF4;
                    padding: 2px 5px;
                    margin-top: -3px;
                    margin-right: -5px;
                    float: right;
                    margin-left: 10px;
                }

                .tabs-navigation li.active {
                    background: #EBEDF4;
                }

                .tabs-navigation li.active a {
                    color: black;
                    font-weight: bold;
                }

                .tabs-navigation li.active a .badge {
                    border-color: #CCCED7;
                    background: #fafafa;
                }

                .tabs-navigation.tabs-navigation-top {
                    margin-bottom: -1px;
                }

                .tabs-navigation.tabs-navigation-top li {
                    border: 1px solid #CCCED7;
                    border-right: none;
                    display: inline-block;
                }

                .tabs-navigation.tabs-navigation-top li.active {
                    border-bottom: 1px solid #EBEDF4;
                }

                .tabs-navigation.tabs-navigation-top li:last-child {
                    border-right: 1px solid #CCCED7;
                }

                .tabs-navigation.tabs-navigation-left {
                    float: left;
                    border: 1px solid #CCCED7;
                    width: 180px;
                    margin-top: 11px;
                }

                .tabs-navigation.tabs-navigation-left li {
                    border-bottom: 1px solid #CCCED7;
                }

                .tabs-navigation.tabs-navigation-left li:last-child {
                    border-bottom: none;
                }

                .tabs-navigation.tabs-navigation-left li a {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    position: relative;
                }

                .tabs-navigation.tabs-navigation-left li a .badge {
                    float: none;
                    position: absolute;
                    right: 12px;
                    top: 10px;
                }

            </style>

        <?php }?>

  </ps-tabs>

</script>
<?php }} ?>
