<?php
/* Smarty version 3.1.33, created on 2019-10-22 09:38:11
  from 'C:\wamp64\www\admin551d576to\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daece030e6999_28595568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60709521238d00bfe70f7499ccb26617367dedb' => 
    array (
      0 => 'C:\\wamp64\\www\\admin551d576to\\themes\\default\\template\\content.tpl',
      1 => 1570640675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daece030e6999_28595568 (Smarty_Internal_Template $_smarty_tpl) {
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
