<?php
/* Smarty version 3.1.33, created on 2019-10-24 10:16:48
  from 'C:\wamp64\www\admin551d576to\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db17a10efb7c6_61498549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b893d23f1d39d028fff821b0de65a3b6ca18cbe4' => 
    array (
      0 => 'C:\\wamp64\\www\\admin551d576to\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1570640683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db17a10efb7c6_61498549 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
