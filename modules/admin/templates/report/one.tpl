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
                {$voter->getFirstName()} {$voter->getLastName()} {$voter->getFatherName()} {$voter->getBirthDate()}</br>
            {/foreach}
        </section>
    </body>
</html>
