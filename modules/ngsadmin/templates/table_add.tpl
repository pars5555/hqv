<form  id="f_add_item_form" class="adminForms add-new-admin-form" autocomplete="off" onsubmit="return false;">
    {foreach from=$ns.visibleFieldSamples item=visibleFieldSample}
        <div class="dialog-row add-user-dialog-row">
            {assign var=getter value=$visibleFieldSample->getGetter()}
            <span class="form_label">{$visibleFieldSample->getTitle()}</span>
            {if $visibleFieldSample->getFieldType()=='true_false' || $visibleFieldSample->getFieldType()=='enum'}
                <select name="{$visibleFieldSample->getDbFieldName()}">
                    {foreach from=$visibleFieldSample->getOptions() key=optionKey item=optionValue}
                        <option value="{$optionKey}">
                            {$optionValue}
                        </option>
                    {/foreach}
                </select>
            {else if $visibleFieldSample->getFieldType()=='text'}
                <textarea class="description_textarea" name="{$visibleFieldSample->getDbFieldName()}">{$visibleFieldSample->getFieldDefaultValue()}</textarea>
                <div class="clear"></div>
            {else if $visibleFieldSample->getFieldType()=='datetime' || $visibleFieldSample->getFieldType()=='date'}
                <input class="f_datepicker" name="{$visibleFieldSample->getDbFieldName()}" type="text" value=""/>
            {else if $visibleFieldSample->getFieldType()=='file'}
            	<button type="button" class="blue-button f_trigger_upload" field_name="{$visibleFieldSample->getDbFieldName()}" style="float: none">Add file...</button> 
        		<input  type="file" name="{$visibleFieldSample->getDbFieldName()}" style="display: none" />
        		<input type="hidden" name="{$visibleFieldSample->getDbFieldName()}" class="f_upload_input" />
            	<div class="upload_preview" id="upload_preview_{$visibleFieldSample->getDbFieldName()}"></div>
            {else}
                <input name="{$visibleFieldSample->getDbFieldName()}" type="text"  value="{$visibleFieldSample->getFieldDefaultValue()}"/>
                <input name="{$visibleFieldSample->getDbFieldName()}_autofill_id" type="hidden"  value=""/>
                <div class = 'f_autofill_container'></div>
            {/if}
            <p class="error f_error" id="f_error_{$visibleFieldSample->getDbFieldName()}"></p>
        </div>
    {/foreach}
    {block name='additional_fields'}{/block}
    <p class="error f_error" id="f_error_general_err"></p>
</form>
