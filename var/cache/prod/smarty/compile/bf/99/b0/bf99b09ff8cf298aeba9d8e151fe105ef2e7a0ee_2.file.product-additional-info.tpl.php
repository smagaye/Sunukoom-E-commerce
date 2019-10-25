<?php
/* Smarty version 3.1.33, created on 2019-10-25 16:39:21
  from 'C:\wamp64\www\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db32539377484_71141705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf99b09ff8cf298aeba9d8e151fe105ef2e7a0ee' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1570640712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db32539377484_71141705 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
