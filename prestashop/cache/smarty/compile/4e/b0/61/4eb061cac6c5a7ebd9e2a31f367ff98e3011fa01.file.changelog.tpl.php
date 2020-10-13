<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/changelog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17189741255f7f01e65b79b9-76014858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eb061cac6c5a7ebd9e2a31f367ff98e3011fa01' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/changelog.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17189741255f7f01e65b79b9-76014858',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e65c3b20_29595359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e65c3b20_29595359')) {function content_5f7f01e65c3b20_29595359($_smarty_tpl) {?>

<div class="medChangelog">

    <ps-panel header="<?php echo smartyTranslate(array('s'=>'Partners','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

        <iframe src="https://adsense.mediacom87.biz" width="728" height="90" marginheight="0" marginwidth="0" scrolling="no"></iframe>

    </ps-panel>

    <ps-panel header="1.2.0 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>'2019-11-16','full'=>0),$_smarty_tpl);?>
">

        <ul>
            <li>Cleaning up some awkward codes</li>
        </ul>

    </ps-panel>

    <ps-panel header="1.1.0 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>'2018-04-16','full'=>0),$_smarty_tpl);?>
">

        <ul>
            <li>Reordering the code to fix a Chrome bug</li>
        </ul>

    </ps-panel>

    <ps-panel header="1.0.0 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>'2018-04-05','full'=>0),$_smarty_tpl);?>
">

        <ul>
            <li>Initial commit</li>
        </ul>

    </ps-panel>

</div>
<?php }} ?>
