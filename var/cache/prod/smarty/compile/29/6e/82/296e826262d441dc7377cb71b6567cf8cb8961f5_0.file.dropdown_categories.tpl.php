<?php
/* Smarty version 3.1.33, created on 2019-11-10 11:01:40
  from 'C:\xampp\htdocs\prestashop\modules\ps_mbo\views\templates\admin\include\dropdown_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc7e004d8cec4_67198039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296e826262d441dc7377cb71b6567cf8cb8961f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_mbo\\views\\templates\\admin\\include\\dropdown_categories.tpl',
      1 => 1572352446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc7e004d8cec4_67198039 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ps-dropdown dropdown btn-group bordered mb-1">
	<div id="catDropdown" class="dropdown-label" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="js-selected-item selected-item module-category-selector-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories'),$_smarty_tpl ) );?>

		</span>
		<i class="material-icons arrow-down float-right">keyboard_arrow_down</i>
	</div>
	<div class="ps-dropdown-menu dropdown-menu module-category-selector" aria-labelledby="catDropdown">
		<ul class="items-list js-items-list">
			<li class="module-category-reset">
				<a class="dropdown-item" href="#">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

				</a>
			</li>
			<li class="module-category-menu"
				v-for="category in categories.subMenu"
				v-bind:data-category-tab="category.tab"
				v-bind:data-category-id="category.id_category"
				v-bind:data-category-display-ref="category.name"
				v-bind:data-category-display-name="category.name"
				v-bind:data-category-display-ref-menu="category.refMenu"
			>
				<a  class="dropdown-item" href="#">
					[[ category.name ]]<span class="float-right">[[ category.modules.length ]]</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<?php }
}