<?php
/* Smarty version 3.1.43, created on 2022-08-27 10:07:24
  from 'C:\xampp7.2\htdocs\portfolio\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63097c5c603910_94038238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee7b9924856513d81ef0f0258b6c9c1999e92c8' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\portfolio\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1661565469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63097c5c603910_94038238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp7.2\\htdocs\\portfolio\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\7e\\e7\\b9\\7ee7b9924856513d81ef0f0258b6c9c1999e92c8_2.file.helpers.tpl.php',
    'uid' => '7ee7b9924856513d81ef0f0258b6c9c1999e92c8',
    'call_name' => 'smarty_template_function_renderLogo_71543201363097c5c5fd4f4_87122818',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_71543201363097c5c5fd4f4_87122818 */
if (!function_exists('smarty_template_function_renderLogo_71543201363097c5c5fd4f4_87122818')) {
function smarty_template_function_renderLogo_71543201363097c5c5fd4f4_87122818(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_71543201363097c5c5fd4f4_87122818 */
}
