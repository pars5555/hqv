<div>
	{foreach from=$ns.voters item=voter}
		<div class="section cur-user f_current_user" data-hash="{$voter->getHash()}">
			<h5>{$voter->getFirstName()} {$voter->getLastName()} {$voter->getFatherName()}</h5>
			<p>{$voter->getAddress()}</p>
		</div>
		<div class="divider"></div>
	{/foreach}
	{if count($ns.voters) eq 0}
		<h5 class="center-align">No users</h5>
	{/if}
</div>
