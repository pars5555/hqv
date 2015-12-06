{if $ns.voter_id>0}
    In List<br>
    voter index in list: {$ns.voter->getNumber()}<br>    
    {if $ns.area}
        {$ns.area->getRegion()} {$ns.area->getCommunity()} {$ns.area->getAddress()}<br>
    {/if}
    pre vote:<br>
    {if !empty($ns.prevoteData)}
        {foreach from=$ns.prevoteData item=prevoteRow}
            {if $prevoteRow->getWillVote()==1}Will Participant em{else}Will not Participant{/if} {$prevoteRow->getDatetime()}<br> 
        {/foreach}
    {else}
        No Data
    {/if}
{/if}
<br>

{foreach from=$ns.duplidatedRows item=row}
    {assign areaId $row->getAreaId()}
    {if $areaId>0}
    {assign area $ns.areasMappedById[$areaId]}
    {/if}
    
    {$row->getFirstName()} {$row->getLastName()} {$row->getFatherName()} {$row->getBirthDate()} 
    <br>
    {if isset($area)}
    {$area->getTerritoryId()}/{$area->getAreaId()} {$area->getRegion()} {$area->getCommunity()} {$area->getAddress()} 
    {else}
        Area N/A 
    {/if}
    [{$row->getCreateDatetime()}]
    <br>
    <br>
{/foreach}