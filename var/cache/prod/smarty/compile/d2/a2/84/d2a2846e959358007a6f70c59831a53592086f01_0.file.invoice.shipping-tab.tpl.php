<?php
/* Smarty version 3.1.33, created on 2019-10-25 16:47:03
  from 'C:\wamp64\www\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db327072b3e71_82325130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a2846e959358007a6f70c59831a53592086f01' => 
    array (
      0 => 'C:\\wamp64\\www\\pdf\\invoice.shipping-tab.tpl',
      1 => 1570640686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db327072b3e71_82325130 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
