{include file="templates/header.tpl"}


<div class="containter-fluid d-flex justify-content-center mt-4">
    <div class="list-group w-75">
        {foreach from=$songs item=$song }
            <li class="list-group-item list-group-item-action d-flex gap-3 py-3 justify-content-between">
                {$i++} -
                {$song->nombre}
                {if isset($smarty.session.USER_ID)}
                    <div class="d-flex justify-content-end">
                        <a href="">
                            <button type="button" class="btn text-warning btn-light">Edit</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn text-danger btn-light">Delete</button>
                        </a>
                    </div>
                {/if}
            </li>

        {/foreach }

    </div>
</div>





{include file="templates/footer.tpl"}