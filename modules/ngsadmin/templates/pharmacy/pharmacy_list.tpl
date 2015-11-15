{foreach from=$ns.pharmacyDtos item=item}
<div class="table-row">
  <div class="table-current-content " >
    {$item->getId()}
  </div>
  <div class="table-current-content " >
    {$item->getPharmacyName()}
  </div>
  <div class="table-current-content " >
    {$item->getUsername()}
  </div>
{*  <div class="table-current-content " >
    {$item->getPharmacyId()}
  </div>*}
</div>
{/foreach}
