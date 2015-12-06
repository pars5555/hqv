<!DOCTYPE html>
<html lang="en">
    <head>
        {include file="./util/header_control.tpl"}
    </head>
    <body>
        <h5>Այն մարդիք ովքեր ասել էին չեն գալու բայց գնացել են քվեարկության</h5>
        <section class="wrapper">
            {foreach from=$ns.rows item=row}
                {assign voter $ns.voters[$row->getVoterId()]}
                {$voter->getFirstName()} {$voter->getLastName()} {$voter->getFatherName()} {$voter->getBirthDate()} 
               
                prevote count: {$ns.prevotDatas[$row->getVoterId()]|@count}
                <p style="margin-left: 30px;">
                {foreach from=$ns.prevotDatas[$row->getVoterId()] item=prevotData}
                    will vote: {$prevotData->getWillVote()}
                    will be in armenia: {$prevotData->getWillBeInArm()}
                    is death: {$prevotData->getIsDeath()}
                    ip: {$prevotData->getIpAddress()}
                     {assign phone $prevotData->getPhone()}
                     phone:  {if !empty($phone)}
                   {$prevotData->getPhone()}
                    {else}
                        N/A
                    {/if}
                     {assign email $prevotData->getEmail()}
                     email:  {if !empty($email)}
                   {$prevotData->getEmail()}
                    {else}
                        N/A
                    {/if}
               {/foreach}
               </p>
              
            {/foreach}
        </section>
    </body>
</html>
