{foreach from=$ns.skinProblemDtos item=item}
<div class="table-row">
  <div class="table-current-content " >
    {$item->getId()}
  </div>
  <div class="table-current-content " >
    {$item->getName()}
  </div>
  <div class="table-current-content " >
    {$item->getDescription()}
  </div>
  <div class="table-current-content " >
    {$item->getAddedDate()}
  </div>
  <div class="table-current-content  edit-delete-wrapper" >
    <span class="f_edit_item glyph edit" data-ngs-item-id="{$item->getId()}"></span>
    
  </div>
</div>
{/foreach}
