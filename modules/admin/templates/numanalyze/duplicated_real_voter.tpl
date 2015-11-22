{if $ns.voter_id>0}
    In List<br>
    voter index in list: {$ns.voter->getNumber()}<br>    
    {$ns.area->getRegion()} {$ns.area->getCommunity()} {$ns.area->getAddress()}<br>
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
    {assign area $ns.areasMappedById[$areaId]}
    {$row->getFirstName()} {$row->getLastName()} {$row->getFatherName()} {$row->getBirthDate()} 
    <br>
    {$area->getRegion()} {$area->getCommunity()} {$area->getAddress()} [{$row->getCreateDatetime()}]
    <br>
    <br>
{/foreach}