{foreach from=$ns.voters item=voter}
    {$voter->getFirstName()}    {$voter->getLastName()}  {$voter->getFatherName()} ({$voter->getAddress()})   <br>
{/foreach}