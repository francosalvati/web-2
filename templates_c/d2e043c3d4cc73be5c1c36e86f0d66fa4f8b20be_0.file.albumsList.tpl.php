<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:19:46
  from 'C:\xampp\htdocs\tpeweb2\templates\albumsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df4f2bf4884_36993346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e043c3d4cc73be5c1c36e86f0d66fa4f8b20be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\albumsList.tpl',
      1 => 1665004783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633df4f2bf4884_36993346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid m-2 mt-4 d-flex justify-content-center">
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-5 g-2 mx-4 w-75">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
            <div class="col">
                <div class="card p-1 bg-light mx-2">
                    <div>
                        <a href="canciones/<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['album']->value->imgURL;?>
" class="w-100">
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <h2 class="h5 card-text text-center text-muted"><?php echo $_smarty_tpl->tpl_vars['album']->value->nombre;?>
<a href="deleteAlbum/<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
" ><button type="button" class="btn btn-danger" >X</button></a></h2>
                    </div>
                </div>
            </div>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="col">
            <div class="card p-1 bg-light mx-2">
                <div>
                    <a href="admin">
                        <img src="https://us.123rf.com/450wm/siamimages/siamimages1611/siamimages161100055/65441642-a%C3%B1adir-signo-m%C3%A1s-ic%C3%B3nico-dise%C3%B1o.jpg?ver=6"
                            class="images img-thumbnail" height="230">
                    </a>
                </div>
                <div class="card-body p-2">
                    <h2 class="h5 card-text text-center text-muted">Agregar album</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
