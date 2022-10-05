{include file="templates/header.tpl"}


<div class="containter-fluid d-flex justify-content-center mt-4">
    <div class="list-group w-75">
        {foreach from=$songs item=$song }
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3">
                {$i++} -
                {$song->nombre}
            </li>
        {/foreach }
    </div>
</div>





{include file="templates/footer.tpl"}