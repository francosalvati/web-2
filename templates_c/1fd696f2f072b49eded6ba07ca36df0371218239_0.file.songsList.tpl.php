<?php
/* Smarty version 4.2.1, created on 2022-09-30 04:44:07
  from 'C:\xampp\htdocs\tpeweb2\templates\songsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633657f7f196f3_65302663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd696f2f072b49eded6ba07ca36df0371218239' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\songsList.tpl',
      1 => 1664505680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633657f7f196f3_65302663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="containter-fluid d-flex justify-content-center mt-4">
    <div class="list-group w-75">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3">
                <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
 - 
                <?php echo $_smarty_tpl->tpl_vars['song']->value->nombre;?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
