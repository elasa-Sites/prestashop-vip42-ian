<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 11:28:12
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10474338125f7ef7cc891522-35305295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d1e74b406649520d82b4514a28b217b20c950f3' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl',
      1 => 1602156410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10474338125f7ef7cc891522-35305295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7ef7cc89c4b5_87411229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7ef7cc89c4b5_87411229')) {function content_5f7ef7cc89c4b5_87411229($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
