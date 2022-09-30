<?php
/* Smarty version 4.2.1, created on 2022-09-30 04:12:40
  from 'C:\xampp\htdocs\tpeweb2\templates\adminForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63365098bcc888_96333606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824e44cb3e620216bcf8f45cca47b2e72e877c84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\adminForm.tpl',
      1 => 1664503938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63365098bcc888_96333606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container w-100">

                <div class="card d-flex justify-content-center mt-4name">
                    <div class="container d-flex justify-content-center my-4 py-4">
                    <div class="col-md-8 col-lg-10">
                        <h4 class="mb-3">Agregar Album</h4>
                            <form id="form-album" method="GET">
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Nombre del Album</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Albumnazo" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="firstName" class="form-label">Nombre de la banda</label>
                                        <input type="text" class="form-control" name="banda" placeholder="La banda del Lechuga" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    
                            
                                <div class="col-8">
                                    <label for="email" class="form-label">Genero</label>
                                    <input type="text" class="form-control" name="genero" placeholder="Rock">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                            
                            <div class="col-4">
                                <label for="address" class="form-label">Año</label>
                                <input type="text" class="form-control" name="año" placeholder="1990" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                                <div class="col-12">
                                <label for="address2" class="form-label">image URL</label>
                                <input type="text" class="form-control" name="imgURL" placeholder="http/:...">
                            </div>
                            
                        </div>

                        <hr class="my-4">
                        
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Agregar Album</button>
                    </form>
                </div>
                    </div>
                </div>
            </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
