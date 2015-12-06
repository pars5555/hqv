<!DOCTYPE html>
<html lang="en">
    <head>
        {include file="./util/header_control.tpl"}
    </head>
    <body>
        <h5>Այն մարդիք ովքեր նշել էին որ մահացած ենւ բայց գնացել են քվեարկության</h5>
        <section class="wrapper">
            {foreach from=$ns.rows item=row}
                {$row->getFirstName()} {$row->getLastName()} {$row->getFatherName()} {$row->getBirthDate()}</br>
            {/foreach}
        </section>
    </body>
</html>
