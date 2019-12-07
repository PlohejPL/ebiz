<?php
/* Smarty version 3.1.33, created on 2019-11-10 11:12:12
  from 'C:\xampp\htdocs\prestashop\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc7e27c180823_69983304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92250ed26000b52540a3d9c03e568e842aa98c8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1572352445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc7e27c180823_69983304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('psgdpr','gdpr'), ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
