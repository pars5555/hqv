{foreach from=$ns.userDtos item=item}
    <div class="table-row"{if $item->getTempUserId()} style="background:#fccca9;"{/if}>
        <div class="table-current-content " >
            {$item->getId()}
        </div>
        <div class="table-current-content " >
            {$item->getEmail()}
        </div>
        <div class="table-current-content " >
            {$item->getMobile()}
        </div>
        <div class="table-current-content " >
            {$item->getTitle()}
        </div>
        <div class="table-current-content " >
            {$item->getPharmacyName()}
        </div>
        <div class="table-current-content " >
            {$item->getFirstName()}
        </div>
        <div class="table-current-content " >
            {$item->getLastName()}
        </div>
        <div class="table-current-content " >
            {$item->getGender()}
        </div>
        <div class="table-current-content " >
            {$item->getProfessionName()}
        </div>
        <div class="table-current-content " >
            {$item->getUsername()}
        </div>
        <div class="table-current-content " >
            {$item->getNationality()}
        </div>
        <div class="table-current-content " >
            {$item->getAddress1()}
        </div>
        <div class="table-current-content " >
            {$item->getAddress2()}
        </div>
        <div class="table-current-content">
            {$item->getSkinType()}
        </div>
        <div class="table-current-content">
            {$item->getSkinProblem()}
        </div>
        <div class="table-current-content " >
            {$item->getCity()}
        </div>
        <div class="table-current-content " >
            {$item->getZip()}
        </div>
        <div class="table-current-content " >
            {$item->getStatus()}
        </div>
        <div class="table-current-content " >
            {$item->getAddedDate()}
        </div>
        <div class="table-current-content " >
            {$item->getNote()}
        </div>
        <div class="table-current-content  edit-delete-wrapper" >
            <span class="f_edit_item glyph edit" data-ngs-item-id="{$item->getId()}"></span>
            <span class="glyph delete f_delete_item" data-ngs-item-id="{$item->getId()}"></span>
        </div>
    </div>
{/foreach}
{include file="{ngs cmd=get_template_dir}/util/paging_box.tpl"}