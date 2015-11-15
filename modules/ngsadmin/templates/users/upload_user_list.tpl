{foreach from=$ns.userDtos item=item}
<div class="table-row"{if $item->getTempUserId()} style="background:#fccca9;"{/if}>
  <div class="table-current-content " >
    {$item->getId()}
  </div>
  <div class="table-current-content " >
    {$item->getMobile()}
  </div>
  <div class="table-current-content " >
    {$item->getPharmacyId()}
  </div>
  <div class="table-current-content " >
    {$item->getUsername()}
  </div>
  <div class="table-current-content " >
    {$item->getEmail()}
  </div>
  <div class="table-current-content " >
    {$item->getFirstName()}
  </div>
  <div class="table-current-content " >
    {$item->getLastName()}
  </div>
</div>
{/foreach}