{foreach from=$ns.orderHistoryDtos item=item}
<div class="table-row">
    <div class="table-current-content " >
    {$item->getId()}
  </div>
  <div class="table-current-content " >
    {$item->getPharmacyName()}
  </div>
  <div class="table-current-content " >
    {$item->getUserName()}
  </div>
  <div class="table-current-content " >
    {$item->getTitle()}
  </div>
  <div class="table-current-content " >
    {$item->getPurchase()}
  </div>
  <div class="table-current-content " >
    {$item->getWishlist()}
  </div>
  <div class="table-current-content " >
    {$item->getBeautyAdvisor()}
  </div>
  <div class="table-current-content " >
    {$item->getFollowUp()}
  </div>
  <div class="table-current-content " >
    {$item->getOrderDate()}
  </div>
  <div class="table-current-content " >
    {$item->getAddedDate()}
  </div>
</div>
{/foreach}
{include file="{ngs cmd=get_template_dir}/util/paging_box.tpl"}