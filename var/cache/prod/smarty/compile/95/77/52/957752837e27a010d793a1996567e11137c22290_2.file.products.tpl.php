<?php
/* Smarty version 3.1.33, created on 2019-10-24 09:50:29
  from 'C:\wamp64\www\themes\classic\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db173e518a467_51380938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '957752837e27a010d793a1996567e11137c22290' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\catalog\\_partials\\products.tpl',
      1 => 1570640713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5db173e518a467_51380938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <div class="products row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10010154605db173e5164ad3_50964059', 'product_miniature');
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8134368175db173e51751f8_29010437', 'pagination');
?>


  <div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }
/* {block 'product_miniature'} */
class Block_10010154605db173e5164ad3_50964059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_10010154605db173e5164ad3_50964059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
      <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_8134368175db173e51751f8_29010437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_8134368175db173e51751f8_29010437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
