<?php
/* Smarty version 3.1.43, created on 2022-08-27 10:07:11
  from 'C:\xampp7.2\htdocs\portfolio\prestashop\modules\ps_metrics\views\templates\hook\HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63097c4fca6f32_90392230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e70d8176e56f9f36711df2cfd062c90f5c85409' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\portfolio\\prestashop\\modules\\ps_metrics\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1661565785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63097c4fca6f32_90392230 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="metrics-app"></div>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAssets']->value ));?>
" type="text/css" media="all">

<?php echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" async defer><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value) {?>
  <?php echo '<script'; ?>
 type="application/json" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value ));?>
" async defer><?php echo '</script'; ?>
>
<?php }
}
}
