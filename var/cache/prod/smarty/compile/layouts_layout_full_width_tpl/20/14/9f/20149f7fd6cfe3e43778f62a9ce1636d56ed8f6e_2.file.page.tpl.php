<?php
/* Smarty version 3.1.33, created on 2019-11-10 14:17:10
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\cms\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc80dd6796238_42359258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20149f7fd6cfe3e43778f62a9ce1636d56ed8f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\cms\\page.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc80dd6796238_42359258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16081286915dc80dd67803c2_66813665', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5423216325dc80dd6788a13_18632935', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_16081286915dc80dd67803c2_66813665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_16081286915dc80dd67803c2_66813665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_11010328505dc80dd678a5c6_94936367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_20350151485dc80dd678c860_60845305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_14270657765dc80dd6793135_30226473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_5423216325dc80dd6788a13_18632935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5423216325dc80dd6788a13_18632935',
  ),
  'cms_content' => 
  array (
    0 => 'Block_11010328505dc80dd678a5c6_94936367',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_20350151485dc80dd678c860_60845305',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_14270657765dc80dd6793135_30226473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11010328505dc80dd678a5c6_94936367', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20350151485dc80dd678c860_60845305', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14270657765dc80dd6793135_30226473', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}