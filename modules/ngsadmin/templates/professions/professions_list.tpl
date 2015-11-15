{foreach from=$ns.professionsDtos item=item}
    <div class="table-row">
        <div class="table-current-content " >
            {$item->getId()}
        </div>
        <div class="table-current-content " >
            {$item->getProfessionName()}
        </div>
    </div>
{/foreach}
