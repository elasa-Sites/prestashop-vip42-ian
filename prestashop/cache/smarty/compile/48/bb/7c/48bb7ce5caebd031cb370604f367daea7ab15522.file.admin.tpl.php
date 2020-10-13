<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20683056375f7f01e63e8305-41265467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48bb7ce5caebd031cb370604f367daea7ab15522' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/admin.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20683056375f7f01e63e8305-41265467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e6506d95_92929077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e6506d95_92929077')) {function content_5f7f01e6506d95_92929077($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['ps_version']->value<1.6) {?>
<script src="https://use.fontawesome.com/8ebcaf88e9.js" async></script>
<?php }?>

<div id="chargement">
    <i class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>process-icon-refresh icon-spin icon-pulse<?php } else { ?>fa fa-refresh fa-spin fa-pulse clear<?php }?>"></i> <?php echo smartyTranslate(array('s'=>'Loading...','mod'=>'medgtranslate'),$_smarty_tpl);?>
<span id="chargement-infos"></span>
</div>

<script type="text/javascript">

    $(document).ready(function() {

        $.pageLoader();

    });

</script>

<ps-tabs position="top">

    <ps-tab label="<?php echo smartyTranslate(array('s'=>'Informations','mod'=>'medgtranslate'),$_smarty_tpl);?>
" active="true" id="tab20" icon="icon-info" fa="info">

        <ps-panel header="<?php echo smartyTranslate(array('s'=>'Help me','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

            <ps-alert-hint>

                <p><?php echo smartyTranslate(array('s'=>'I developed this module to allow the community to benefit from a free service and this for free.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
                <p><?php echo smartyTranslate(array('s'=>'But without your help, I couldn\'t continue to offer free modules for long.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
                <p><?php echo smartyTranslate(array('s'=>'So don\'t hesitate to make a very small gesture.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
                <p><?php echo smartyTranslate(array('s'=>'No support is provided free of charge for this free module, but do not hesitate to contact me for any particular request concerning your shop.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>

            </ps-alert-hint>

        </ps-panel>

        <ps-panel header="<?php echo smartyTranslate(array('s'=>'Donation','mod'=>'medgtranslate'),$_smarty_tpl);?>
">
            <p>

                <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('<?php echo smartyTranslate(array('s'=>'Buy me a','mod'=>'medgtranslate'),$_smarty_tpl);?>
 Ko-fi', '#29abe0', 'H2H2F6EY');kofiwidget2.draw();</script>

            </p>

        </ps-panel>

        <ps-panel header="<?php echo smartyTranslate(array('s'=>'Donation','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

                <a href="https://www.paypal.me/jeckyl/5" class="btn btn-mediacom87 btn-lg" target="_blank"><i class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>icon icon-paypal<?php } else { ?>fa fa-paypal<?php }?>"></i> <?php echo smartyTranslate(array('s'=>'Donate € 5','mod'=>'medgtranslate'),$_smarty_tpl);?>
</a>

        </ps-panel>

        <ps-panel icon="icon-info" fa="info" header="<?php echo smartyTranslate(array('s'=>'Informations','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </ps-panel>

        <ps-panel header="<?php echo smartyTranslate(array('s'=>'Partners','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

            <iframe src="https://adsense.mediacom87.biz" width="728" height="90" marginheight="0" marginwidth="0" scrolling="no"></iframe>

        </ps-panel>


    </ps-tab>

    <ps-tab label="<?php echo smartyTranslate(array('s'=>'More Modules','mod'=>'medgtranslate'),$_smarty_tpl);?>
" id="tab25" icon="icon-cubes" fa="cubes">

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/modules.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </ps-tab>

    <ps-tab label="<?php echo smartyTranslate(array('s'=>'License','mod'=>'medgtranslate'),$_smarty_tpl);?>
" id="tab30" icon="icon-legal" fa="legal">

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/licence.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </ps-tab>

    <ps-tab label="Changelog" id="tab40" icon="icon-code" fa="code">

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/changelog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </ps-tab>

</ps-tabs>

<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" async></script><?php }} ?>
