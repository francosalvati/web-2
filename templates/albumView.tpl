{include file="templates/header.tpl"}


<div class="container">
    <div class="title d-flex">
        <img src="{$album->imgURL}" class="flex-shrink-0 m-4" height="200">
        <h2 class="text-align-bt">{$album->nombre}</h2>
    </div>

    <div class="list-group w-100">
        {foreach from=$songs item=song}
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3">
                {$song->nombre}
                <a href="deleteSong/{$album->id}/{$song->id}"><button class="btn color-primary">X</button></a>
            </li>

        {/foreach}
    </div>
    <div class="m-4 w-50 ">
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



{include file="templates/footer.tpl"}