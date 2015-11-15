<form id="f_send_message_form">
	<div class="dialog-row add-user-dialog-row">
		<span class="form_label">Recipents</span>
		<p>
			Send to everyone
			<input id="sendEveryoneCheckbox" name="send_to_everyone" type="checkbox" value="1" checked="checked" />
		</p>
		<p id="recipentsSelectContainer" style="display: none;">
			<select id="recipentsSelectBox" name="recipents[]" multiple="multiple" class="description_textarea"> 
				{foreach from=$ns.users item=user}
			  		<option value="{$user->getId()}">{$user->getFirstName()} {$user->getLastName()}</option>
			  	{/foreach}
			</select>
		</p>
	</div>
	
	<div class="dialog-row add-user-dialog-row">
		<span class="form_label">Subject</span>
		<input name="subject" type="text" value=""/>
	</div>
	
	<div class="dialog-row add-user-dialog-row">
		<span class="form_label">Message</span>
		<textarea class="description_textarea" name="message"></textarea>
        <div class="clear"></div>
	</div>
	
	<p class="error f_error" id="f_error_general_err"></p>
</form>