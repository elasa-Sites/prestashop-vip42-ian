<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:40
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin159jowltn/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2787963335f7f01fc987516-26869354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1310d77f7269a9f4353bc7c9f91375f7eb44cf48' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin159jowltn/themes/default/template/controllers/localization/content.tpl',
      1 => 1602156214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2787963335f7f01fc987516-26869354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01fc9f0132_34696005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01fc9f0132_34696005')) {function content_5f7f01fc9f0132_34696005($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script>
<?php }} ?>
