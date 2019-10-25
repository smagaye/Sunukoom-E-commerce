<?php
/* Smarty version 3.1.33, created on 2019-10-25 16:42:30
  from 'module:paydunyaviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db325f676f499_89611211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c855ceda8473b0a0d3232b539b58538eb387ef' => 
    array (
      0 => 'module:paydunyaviewstemplatesfro',
      1 => 1570797054,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db325f676f499_89611211 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <img src="https://developers.paydunya.com/img/branding/logo_pay_with_paydunya4.png" alt="PayDunya">
  <p><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['paydunya_paynow_description']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable1,'mod'=>'paydunya'),$_smarty_tpl ) );?>
</p>
</section>
<?php }
}
