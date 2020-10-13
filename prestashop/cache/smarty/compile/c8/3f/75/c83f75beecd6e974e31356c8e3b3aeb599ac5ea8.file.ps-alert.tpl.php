<?php /* Smarty version Smarty-3.1.19, created on 2020-10-08 15:41:18
         compiled from "/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8343727435f7f01e6892fe2-27026138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83f75beecd6e974e31356c8e3b3aeb599ac5ea8' => 
    array (
      0 => '/srv/disk9/3607162/www/prestashop-fa.atwebpages.com/prestashop_1.6.1.24_rtl_1.0/prestashop/modules/medgtranslate/libraries/prestui/ps-alert.tpl',
      1 => 1602158996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8343727435f7f01e6892fe2-27026138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7f01e68bbe60_61293538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7f01e68bbe60_61293538')) {function content_5f7f01e68bbe60_61293538($_smarty_tpl) {?>

<script type="riot/tag">
	<ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="alert { opts['alertClass'] }">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<yield/>
			</div>

		<?php } else { ?>

			<div class="{ opts['alertClass'] }">
				<yield/>
				<img class="close" alt="X" src="../img/admin/close.png" onclick={ hide }>
			</div>

			<style scoped>

				div {
					position: relative;
					padding-right: 25px !important;
				}

				img.close {
					margin: 0 !important;
					position: absolute;
					right: 10px;
					top: 15px;
					cursor: pointer;
				}

			</style>

			hide(e) {
				$(e.target).parent().hide()
			}

		<?php }?>

	</ps-alert>
</script>


<script type="riot/tag">
	<ps-alert-success>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>conf<?php } else { ?>alert alert-success<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-success>
</script>

<script type="riot/tag">
	<ps-alert-error>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>error<?php } else { ?>alert alert-danger<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-error>
</script>

<script type="riot/tag">
	<ps-alert-warn>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>warn<?php } else { ?>alert alert-warning<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-warn>
</script>

<script type="riot/tag">
	<ps-alert-hint>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>hint<?php } else { ?>alert alert-info<?php }?>">
			<yield/>
		</ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>

			<style scoped>
				.hint {
					display: block;
					margin: 0 0 10px 0;
				}
			</style>

		<?php }?>

	</ps-alert-hint>
</script>
<?php }} ?>
