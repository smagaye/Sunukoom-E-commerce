<?php
/* Smarty version 3.1.33, created on 2019-10-25 16:47:09
  from 'C:\wamp64\www\modules\paydunya\views\templates\front\payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db3270d93d754_66772675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d0a59ee5584e5a7ff4cba15982be2d667ec24a' => 
    array (
      0 => 'C:\\wamp64\\www\\modules\\paydunya\\views\\templates\\front\\payment_return.tpl',
      1 => 1570797054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db3270d93d754_66772675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16003224055db3270d9319f3_22494141', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layout']->value));
}
/* {block "content"} */
class Block_16003224055db3270d9319f3_22494141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16003224055db3270d9319f3_22494141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section>
    <p><strong class="dark"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['return_message']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable4,'mod'=>'paydunya'),$_smarty_tpl ) );?>
</strong></p>
  </section>
<?php
}
}
/* {/block "content"} */
}
