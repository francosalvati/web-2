{include file="templates/header.tpl"}


<div class="container">
    <div class="title d-flex">
        <img src="{$album->imgURL}" class="flex-shrink-0 m-4 justify-content-end" height="200">
        <div class="container m-4">
            <div class="row">
                <h3>{$album->genero} - {$album->anio}</h3>
            </div>
            <div class="row">
                <h2 class="display-3 text-bold">{$album->nombre}</h2>
            </div>
            <div class="row">
                <h2>{$album->banda}</h2>
            </div>
        </div>

    </div>
    <hr>
    <div class="list-group w-100">
        {foreach from=$songs item=song}
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3 justify-content-between">
                {$i++} - {$song->nombre}
                {if isset($smarty.session.USER_ID)}
                    <div>
                        <a href="editSong/{$album->id}">
                            <button type="button" class="btn text-warning btn-light">Edit</button>
                        </a>

                        <a href="deleteSong/{$album->id}">
                            <button type="button" class="btn text-danger btn-light">Delete</button>
                        </a>
                    </div>
                {/if}
            </li>

        {/foreach}
    </div>
    {if isset($smarty.session.USER_ID)}

        <div class="card m-4 d-flex justify-content-center p-4 w-75">
            <h2> Agregar cancion </h2>
            <hr>
            <form id="form-song" method="GET" action="addSong/{$album->id}">
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

{/if}



{include file="templates/footer.tpl"}