<form id="f_edit_item_form" class="adminForms add-new-admin-form" autocomplete="off" onsubmit="return false;">
  <div class="dialog-row add-user-dialog-row">
    <span class="form_label">Description</span>
    <textarea class="description_textarea" name="description">{$ns.itemDto->getDescription()}</textarea>
    <input name="id" type="hidden" value="{$ns.itemDto->getId()}"/>
    <div id="descErrBox" class="desc_error hidden"></div>
  </div>
</form>

