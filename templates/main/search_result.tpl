<div>
	{foreach from=$ns.voters item=voter}
		<div class="section cur-user f_current_user">
			<h5>{$voter->getFirstName()} {$voter->getLastName()} {$voter->getFatherName()}</h5>
			<p>{$voter->getAddress()}</p>
		</div>
		<div class="divider"></div>
	{/foreach}
</div>
