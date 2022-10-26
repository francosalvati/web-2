{include file="templates/header.tpl"}

<div class="container w-100 mt-4">

    <div class="card d-flex justify-content-center mt-4name">
        <div class="container d-flex justify-content-center my-4 py-4">
            <div class="col-md-8 col-lg-10">
                {if isset($edit)}
                    <h4 class="mb-3">Editar album ({$album->nombre})</h4>
                {else}
                    <h4 class="mb-3">Agregar Album</h4>
                {/if}
                <form id="form-album" {if isset($edit)} action="edit-album/{$album->id}" {else} action="add-album" {/if} method="POST">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label class="form-label">Nombre del Album</label>
                            <input type="text" class="form-control" name="nombre" required="">
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Nombre de la banda</label>
                            <input type="text" class="form-control" name="banda" required="">
                         
                        </div>


                        <div class="col-12">
                            <label class="form-label">Genero</label>
                            <input type="text" class="form-control" name="genero" placeholder="Rock" required="">
                          
                        </div>

                        <div class="col-6">
                            <label class="form-label">Año</label>
                            <input type="text" class="form-control" name="año" placeholder="1990" required="">
                        </div>
                        <div class="col-6">
                            <label  class="form-label">Canciones</label>
                            <input type="text" class="form-control" name="cant-canciones" required=""> 
                        </div>

                        <div class="col-12">
                            <label class="form-label">imgURL</label>
                            <textarea class="form-control" name="imgURL" required=""></textarea>
                        </div>

                    </div>

                    <hr class="my-4">
                    {if isset($edit)}
                        <button class="w-100 btn btn-warning btn-lg text-align-center" type="submit">Editar Album</button>
                    {else}
                        <button class="w-100 btn btn-primary btn-lg text-align-center" type="submit">Agregar Album</button>
                    {/if}

                </form>
            </div>
        </div>
    </div>
</div>

{include file="templates/footer.tpl"}