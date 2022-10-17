{include file="templates/header.tpl" }

<div class="card m-4 d-flex justify-content-center p-4 w-75">
    {if isset($edit)}
        <h4 class="mb-3">Editar Cancion </h4>
    {else}
        <h4 class="mb-3">Agregar Cancion</h4>
    {/if}
    <hr>
    <form id="form-song" {if isset($edit)} action="editSong/{$song->id}/{$id_album_fk}" {else} action="addSong/{$id_album_fk}" {/if}
        method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Duracion:</label>
            <input type="text" name="duracion" class="form-control">
        </div>
        {if isset($edit)}
            <button class="w-100 btn btn-warning btn-lg text-align-center" type="submit">Editar Cancion</button>
        {else}
            <button class="w-100 btn btn-primary btn-lg text-align-center" type="submit">Agregar Cancion</button>
        {/if}
    </form>
</div>

{include file="templates/footer.tpl" }