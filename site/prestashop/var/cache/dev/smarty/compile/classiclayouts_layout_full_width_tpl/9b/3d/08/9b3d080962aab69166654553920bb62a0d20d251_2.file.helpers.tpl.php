<?php
/* Smarty version 3.1.43, created on 2022-08-27 11:40:07
  from 'C:\xampp7.2\htdocs\portfolio\site\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_630992178a82b4_46211133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3d080962aab69166654553920bb62a0d20d251' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\portfolio\\site\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1661565469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630992178a82b4_46211133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp7.2\\htdocs\\portfolio\\site\\prestashop\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\9b\\3d\\08\\9b3d080962aab69166654553920bb62a0d20d251_2.file.helpers.tpl.php',
    'uid' => '9b3d080962aab69166654553920bb62a0d20d251',
    'call_name' => 'smarty_template_function_renderLogo_719345950630992178a20f2_90597193',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_719345950630992178a20f2_90597193 */
if (!function_exists('smarty_template_function_renderLogo_719345950630992178a20f2_90597193')) {
function smarty_template_function_renderLogo_719345950630992178a20f2_90597193(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_719345950630992178a20f2_90597193 */
}
