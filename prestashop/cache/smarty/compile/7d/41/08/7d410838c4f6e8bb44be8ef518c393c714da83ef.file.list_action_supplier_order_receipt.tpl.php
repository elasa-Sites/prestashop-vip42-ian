<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 11:25:23
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11955610435f7ef723957402-71751670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d410838c4f6e8bb44be8ef518c393c714da83ef' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1602156246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11955610435f7ef723957402-71751670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7ef723960070_44088565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7ef723960070_44088565')) {function content_5f7ef723960070_44088565($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
