<?php
/* Smarty version 3.1.43, created on 2022-08-27 10:07:24
  from 'C:\xampp7.2\htdocs\portfolio\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63097c5c348452_05949571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aae2ec9d5733678ac22d6b3e9695ebe60270afd' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\portfolio\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1661565469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63097c5c348452_05949571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73131854063097c5c33f7a2_35718732', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_150228147763097c5c340035_71241585 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_134942921263097c5c33fb96_45825672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150228147763097c5c340035_71241585', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_195726451163097c5c3464e3_55852059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_185449135063097c5c346d54_40648254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_163847220363097c5c3460d8_67631993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195726451163097c5c3464e3_55852059', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185449135063097c5c346d54_40648254', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_149138987263097c5c3479f5_66615670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15591312363097c5c347671_21837504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149138987263097c5c3479f5_66615670', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_73131854063097c5c33f7a2_35718732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_73131854063097c5c33f7a2_35718732',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_134942921263097c5c33fb96_45825672',
  ),
  'page_title' => 
  array (
    0 => 'Block_150228147763097c5c340035_71241585',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_163847220363097c5c3460d8_67631993',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_195726451163097c5c3464e3_55852059',
  ),
  'page_content' => 
  array (
    0 => 'Block_185449135063097c5c346d54_40648254',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15591312363097c5c347671_21837504',
  ),
  'page_footer' => 
  array (
    0 => 'Block_149138987263097c5c3479f5_66615670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134942921263097c5c33fb96_45825672', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163847220363097c5c3460d8_67631993', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15591312363097c5c347671_21837504', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
