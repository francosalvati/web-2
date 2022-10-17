{include file="templates/header.tpl"}

<div class="container-fluid m-2 mt-4 d-flex justify-content-center">
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-5 g-2 mx-4 w-75">
        {foreach from=$albums item=$album}
            <div class="col">
                <div class="card p-1 bg-light mx-2">
                    <div>
                        <a href="canciones/{$album->id}">
                            <img src="{$album->imgURL}" class="w-100">
                        </a>
                    </div>
                    <div class="card-body p-2 ">
                        <h2 class="h5 card-text text-center text-muted">{$album->nombre}

                        </h2>
                        {if isset($smarty.session.USER_ID)}
                            <div class="justify-content-around d-flex">
                                <a href="adminEdit"><button type="button" class="btn text-warning btn-light">Edit</button></a>
                                <a href="deleteAlbum/{$album->id}"><button type="button" class="btn text-danger btn-light">Delete</button></a>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>

        {/foreach}
        {if isset($smarty.session.USER_ID)}
            <div class="col">
                <div class="card p-1 bg-light mx-2">
                    <div>
                        <a href="adminAdd">
                            <img src="https://us.123rf.com/450wm/siamimages/siamimages1611/siamimages161100055/65441642-a%C3%B1adir-signo-m%C3%A1s-ic%C3%B3nico-dise%C3%B1o.jpg?ver=6"
                                class="images img-thumbnail" height="230">
                        </a>
                    </div>
                    <div class="card-body p-2 ">
                        <h2 class="h5 card-text text-center text-muted">Agregar album</h2>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>

{include file="templates/footer.tpl"}