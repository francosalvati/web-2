{include file="templates/header.tpl"}


<div class="container">
    <div class="title d-flex">
        <img src="{$album->imgURL}" class="flex-shrink-0 m-4 justify-content-end" height="200">
        <div class="container m-4 ">
            <div class="row mt-4">
                <h3>{$album->genero} </h3>
            </div>
            <div class="row">
                <h2 class="display-3 text-bold">{$album->nombre}</h2>
            </div>
            <div class="row">
                <h2>{$album->banda} - {$album->anio}</h2>
            </div>
        </div>

    </div>
    <hr>
    <div class="list-group w-100">
        {foreach from=$songs item=song}
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3 justify-content-between">
                {$i++} - {$song->nombre}
                <div>
                    Duracion: {$song->duracion}
                    {if isset($smarty.session.USER_ID)}
                        <a href="songEdit/{$song->id}/{$album->id}">
                            <button type="button" class="btn text-warning btn-light">Edit</button>
                        </a>

                        <a href="deleteSong/{$song->id}/{$album->id}">
                            <button type="button" class="btn text-danger btn-light">Delete</button>
                        </a>
                    {/if}
                </div>
            </li>

        {/foreach}
    </div>

    {if isset($smarty.session.USER_ID)}

        <a href="songAdd/{$album->id}"><button type="button" class="btn text-primary btn-light m-4">Add Song</button></a>

    {/if}
</div>



{include file="templates/footer.tpl"}