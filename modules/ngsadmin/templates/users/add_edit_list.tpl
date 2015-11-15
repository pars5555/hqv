<form id="f_edit_item_form" class="adminForms add-new-admin-form" autocomplete="off" onsubmit="return false;">
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Username</span>
        <input name="username" type="text" value="{$ns.itemDto->getUsername()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Mobile</span>
        <input name="mobile" type="text" value="{$ns.itemDto->getMobile()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Email</span>
        <input name="email" type="text" value="{$ns.itemDto->getEmail()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">First name</span>
        <input name="first_name" type="text" value="{$ns.itemDto->getFirstName()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Last name</span>
        <input name="last_name" type="text" value="{$ns.itemDto->getLastName()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Gender</span>
        <select  class="select-dropdown" name="gender">
            <option value="male" {if $ns.itemDto->getGender() == "male"}selected="selected"{/if}>
                Male </option>
            <option value="female" {if $ns.itemDto->getGender() == "female"}selected="selected"{/if}>
                Female </option>
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Title</span>
        <select  class="select-dropdown" name="title">
            <option value="Mr" {if $ns.itemDto->getTitle() == "Mr"}selected="selected"{/if}>
                Mr </option>
            <option value="Ms" {if $ns.itemDto->getTitle() == "Ms"}selected="selected"{/if}>
                Ms </option>
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Profession</span>
        <select  class="select-dropdown" name="profession_id">
            {foreach from=$ns.professions item=item}
                <option value="{$item->getId()}" {if $ns.itemDto->getProfessionId() == $item->getId()}selected="selected"{/if}>
                    {$item->getProfessionName()} </option>

            {/foreach}
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Skin Type</span>
        <select name="skin_type[]" multiple="true" style="height: 100%;">
            {foreach from=$ns.skinTypesDtos item=item}
                <option value="{$item->getId()}" {if $item->getUserId() > 0}selected="selected"{/if}>
                    {$item->getName()} </option>
                {/foreach}
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Skin Problem</span>
        <select name="skin_problem[]" multiple="true" style="height: 100%;">
            {foreach from=$ns.skinProblemsDtos item=item}
                <option value="{$item->getId()}" {if $item->getUserId() > 0}selected="selected"{/if}>
                    {$item->getName()} </option>
                {/foreach}
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Birthdate</span>
        <input class="f_datepicker" name="birthdate" type="text" value="{if $ns.itemDto->getBirthdate()}{date('d/m/Y',$ns.itemDto->getBirthdate()|strtotime)}{/if}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Country</span>
        <select  class="select-dropdown" name="country_id">
            {foreach from=$ns.countryDtos item=item}
                <option value="{$item->getId()}" {if $ns.itemDto->CountryId() == $item->getId()}selected="selected"{/if}>
                    {$item->getName()} </option>
                {/foreach}
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Nationality</span>
        <select class="select-dropdown" name="nationality">
            {foreach from=$ns.countryDtos item=item}
                <option value="{$item->getId()}" {if $ns.itemDto->getNationality() == $item->getId()}selected="selected"{/if}>
                    {$item->getName()} </option>
                {/foreach}
        </select>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Address1</span>
        <input name="address1" type="text" value="{$ns.itemDto->getAddress1()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Address2</span>
        <input name="address2" type="text" value="{$ns.itemDto->getAddress2()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">City</span>
        <input name="city" type="text" value="{$ns.itemDto->getCity()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Zip</span>
        <input name="zip" type="text" value="{$ns.itemDto->getZip()}"/>
    </div>
    <div class="dialog-row add-user-dialog-row">
        <span class="form_label">Note</span>
        <textarea name="note" type="text">{$ns.itemDto->getNote()}</textarea>
    </div>
</form>
{if $ns.tempUserDto}
    <form  class="adminForms add-new-admin-form" autocomplete="off" onsubmit="return false;">
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Username</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getUsername()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Mobile</span>
            <input name="mobile" type="text" value="{$ns.itemDto->getMobile()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Email</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getEmail()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">First name</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getFirstName()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Last name</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getLastName()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Gender</span>
            <select  class="select-dropdown" name="gender">
                <option value="male" {if $ns.tempUserDto->getGender() == "male"}selected="selected"{/if}>
                    Male </option>
                <option value="female" {if $ns.tempUserDto->getGender() == "female"}selected="selected"{/if}>
                    Female </option>
            </select>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Skin Type</span>
            <select name="skin_type" multiple="true" style="height: 100%;">
                {foreach from=$ns.tempSkinTypesDtos item=item}
                    <option value="{$item->getId()}" {if $item->getUserId() > 0}selected="selected"{/if}>
                        {$item->getName()} </option>
                    {/foreach}
            </select>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Skin Problem</span>
            <select name="skin_problem" multiple="true" style="height: 100%;">
                {foreach from=$ns.tempSkinProblemsDtos item=item}
                    <option value="{$item->getId()}" {if $item->getUserId() > 0}selected="selected"{/if}>
                        {$item->getName()} </option>
                    {/foreach}
            </select>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Birthdate</span>
            <input class="f_datepicker" name="birthdate" type="text" value="{date('d/m/Y',$ns.tempUserDto->getBirthdate()|strtotime)}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Country</span>
            <select name="country_id">
                {foreach from=$ns.countryDtos item=item}
                    <option value="{$item->getId()}" {if $ns.itemDto->CountryId() == $item->getId()}selected="selected"{/if}>
                        {$item->getName()} </option>
                    {/foreach}
            </select>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Nationality</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getNationality()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Address1</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getAddress1()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Address2</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getAddress2()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">City</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getCity()}"/>
        </div>
        <div class="dialog-row add-user-dialog-row">
            <span class="form_label">Zip</span>
            <input name="username" type="text" value="{$ns.tempUserDto->getZip()}"/>
        </div>
    </form>
{/if}
