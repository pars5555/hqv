{foreach from=$ns.duplidatedRows item=row}
    {assign areaId $row->getAreaId()}
    {assign area $ns.areasMappedById[$areaId]}
    {$row->getFirstName()} {$row->getLastName()} {$row->getFatherName()} {$row->getBirthDate()} 
    <br>
    {$area->getRegion()} {$area->getCommunity()} {$area->getAddress()} [{$row->getCreateDatetime()}]
    <br>
    <br>
{/foreach}