<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11383802785f7f01e6577983-57204206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5136538b01c420686c3fbf8eb5e6f8eea9045e' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/modules.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11383802785f7f01e6577983-57204206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iso_domain' => 0,
    'name' => 0,
    'img_path' => 0,
    'iso_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e65957e2_89038429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e65957e2_89038429')) {function content_5f7f01e65957e2_89038429($_smarty_tpl) {?>

<ps-panel header="<?php echo smartyTranslate(array('s'=>'Partners','mod'=>'medgtranslate'),$_smarty_tpl);?>
">

    <iframe src="https://adsense.mediacom87.biz" width="728" height="90" marginheight="0" marginwidth="0" scrolling="no"></iframe>

</ps-panel>

<ps-alert-hint class="medAddonsMarket">

    <p><?php echo smartyTranslate(array('s'=>'Do you like this module?','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'Get other ones directly on','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
    <p><a href="https://www.prestatoolbox.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iso_domain']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/1_mediacom87?utm_source=module&utm_medium=cpc&utm_campaign=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" title="PrestaToolBox Market Place"><img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
prestatoolbox.png" alt="PrestaToolBox Market Place" class="img-responsive" /></a></p>
    <p><?php echo smartyTranslate(array('s'=>'Or on','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
    <p><a href="https://addons.prestashop.com/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/2_community-developer?contributor=322" target="_blank" title="Prestashop Addons Market Place"><img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
prestashop-addons-logo.png" alt="Prestashop Addons Market Place" class="img-responsive" /></a></p>

</ps-alert-hint><?php }} ?>
