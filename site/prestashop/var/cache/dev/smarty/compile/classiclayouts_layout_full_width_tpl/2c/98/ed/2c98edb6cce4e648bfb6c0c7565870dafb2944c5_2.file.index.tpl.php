<?php
/* Smarty version 3.1.43, created on 2022-08-27 11:40:03
  from 'C:\xampp7.2\htdocs\portfolio\site\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_630992132e1d93_03511080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c98edb6cce4e648bfb6c0c7565870dafb2944c5' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\portfolio\\site\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1661565469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630992132e1d93_03511080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864413623630992132e0193_41223925', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_466263634630992132e05b0_42996109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_102338383630992132e0f38_11584065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1045178792630992132e0bc3_50961500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102338383630992132e0f38_11584065', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1864413623630992132e0193_41223925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1864413623630992132e0193_41223925',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_466263634630992132e05b0_42996109',
  ),
  'page_content' => 
  array (
    0 => 'Block_1045178792630992132e0bc3_50961500',
  ),
  'hook_home' => 
  array (
    0 => 'Block_102338383630992132e0f38_11584065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466263634630992132e05b0_42996109', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1045178792630992132e0bc3_50961500', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
