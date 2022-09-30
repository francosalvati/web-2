{include file="templates/header.tpl"}


<div class="container">
    <div class="title d-flex">
        <img src="{$album->imgURL}" class="flex-shrink-0 m-4" height="200">
        <h2></h2>
    </div>

    <div class="list-group w-100">
        {foreach from=$songs item=$song}
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3">
                {$song->nombre}
            </li>
        {/foreach}
    </div>
</div>

{include file="templates/footer.tpl"}