<?php
/* Smarty version 3.1.33, created on 2019-10-25 10:47:13
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db2d2b13380b2_57362988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1570640696,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db2d2b13380b2_57362988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search_widget" data-search-controller-url="<?php echo $_smarty_tpl->tpl_vars['search_controller_url']->value;?>
">
	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['search_controller_url']->value;?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo $_smarty_tpl->tpl_vars['search_string']->value;?>
">
		<button type="submit">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.Searchbar.Shop'),$_smarty_tpl ) );?>

		</button>
	</form>
</div>
<?php }
}
