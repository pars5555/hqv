{if $ns.voter_id>0}
    In List<br>
    voter index in list: {$ns.voter->getNumber()}<br>    
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
    is death:{$row->getIsDeath()}  will vote: {$row->getWillVote()} will be in armenia: {$row->getWillBeInArm()} 
    <br>
{/foreach}