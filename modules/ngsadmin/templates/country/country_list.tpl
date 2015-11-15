{foreach from=$ns.countryDtos item=item}
<div class="table-row">
  <div class="table-current-content " >
    {$item->getId()}
  </div>
  <div class="table-current-content " >
    {$item->getName()}
  </div>
</div>
{/foreach}
