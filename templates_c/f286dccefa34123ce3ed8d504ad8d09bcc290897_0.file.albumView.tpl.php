<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:09:10
  from 'C:\xampp\htdocs\tpeweb2\templates\albumView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df276b13369_37616219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f286dccefa34123ce3ed8d504ad8d09bcc290897' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\albumView.tpl',
      1 => 1665004031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633df276b13369_37616219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <div class="title d-flex">
        <img src="<?php echo $_smarty_tpl->tpl_vars['album']->value->imgURL;?>
" class="flex-shrink-0 m-4" height="200">
        <h2 class="text-align-bt"><?php echo $_smarty_tpl->tpl_vars['album']->value->nombre;?>
</h2>
    </div>

    <div class="list-group w-100">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3">
                <?php echo $_smarty_tpl->tpl_vars['song']->value->nombre;?>

                <a href="deleteSong/<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['song']->value->id;?>
"><button class="btn color-primary">X</button></a>
            </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="m-4 w-50 ">
        <form id="form-song" method="GET" action="addSong/<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
">
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Duracion:</label>
                <input type="text" name="duracion" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Subir Cancion</button>
        </form>
    </div>

</div>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
