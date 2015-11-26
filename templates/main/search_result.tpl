<div>
	{foreach from=$ns.voters item=voter}
		<div class="section cur-user f_current_user" data-hash="{$voter->getHash()}">
			<h5>{$voter->getFirstName()} {$voter->getLastName()} {$voter->getFatherName()}</h5>
			{assign area $ns.areas[$voter->getAreaId()]}
                        <p>{$area->getRegion()}, {$area->getCommunity()}, {$voter->getAddress()}</p>
		</div>
		<div class="divider"></div>
	{/foreach}
	{if count($ns.voters) eq 0}
		<h5 class="center-align">{$ns.lm->getPhrase(45)}</h5>
	{/if}
</div>
