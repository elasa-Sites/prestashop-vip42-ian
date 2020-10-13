<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:45:00
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/hook/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875107605f7f02c41e3cb1-87653770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7e582829178ba43f8ea25c38830b6493427b9a' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/hook/footer.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875107605f7f02c41e3cb1-87653770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f02c4221241_06444116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f02c4221241_06444116')) {function content_5f7f02c4221241_06444116($_smarty_tpl) {?>

<div class="clearBoth col-xs-12 col-sm-2">
    <div id="google_translate_element"></div>
</div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: '<?php if (isset($_smarty_tpl->tpl_vars['lang_iso']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
<?php }?>', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php }} ?>
