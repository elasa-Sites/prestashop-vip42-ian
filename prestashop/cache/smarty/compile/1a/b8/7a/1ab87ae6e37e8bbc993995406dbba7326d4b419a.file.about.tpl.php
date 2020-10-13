<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6703962905f7f01e6513736-34627617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab87ae6e37e8bbc993995406dbba7326d4b419a' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/views/templates/admin/about.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6703962905f7f01e6513736-34627617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'description' => 0,
    'name' => 0,
    'version' => 0,
    'tb_version' => 0,
    'ps_version' => 0,
    'php_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e656cfe7_95451815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e656cfe7_95451815')) {function content_5f7f01e656cfe7_95451815($_smarty_tpl) {?>

<p><?php echo smartyTranslate(array('s'=>'Thanks for installing this module on your website.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>

<p><?php echo smartyTranslate(array('s'=>'Developped by','mod'=>'medgtranslate'),$_smarty_tpl);?>
 <a class="redLink" href="https://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank"><strong>Mediacom87</strong></a>, <?php echo smartyTranslate(array('s'=>'which helps you to grow your business.','mod'=>'medgtranslate'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>'If you need support on this module:','mod'=>'medgtranslate'),$_smarty_tpl);?>
 <a href="mailto:support@mediacom87.freshdesk.com?subject=<?php echo smartyTranslate(array('s'=>'Need help on this module:','mod'=>'medgtranslate'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 V.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['tb_version']->value) {?>TB.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tb_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>PS.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" class="btn btn-info"><i class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>icon-envelope-alt<?php } else { ?>fa fa-envelope-o<?php }?>"></i> <?php echo smartyTranslate(array('s'=>'Support','mod'=>'medgtranslate'),$_smarty_tpl);?>
</a></p>

<p><b>Module:</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['tb_version']->value) {?>
<p><b>thirty bees:</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tb_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php } else { ?>
<p><b>PrestaShop:</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }?>
<p><b>PHP :</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['php_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }} ?>
