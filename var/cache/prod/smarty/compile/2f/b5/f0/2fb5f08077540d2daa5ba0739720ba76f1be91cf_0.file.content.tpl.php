<?php
/* Smarty version 3.1.33, created on 2019-11-10 11:05:34
  from 'C:\xampp\htdocs\prestashop\admin342qwhmtu\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc7e0ee69f109_70182524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb5f08077540d2daa5ba0739720ba76f1be91cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin342qwhmtu\\themes\\default\\template\\content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc7e0ee69f109_70182524 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
