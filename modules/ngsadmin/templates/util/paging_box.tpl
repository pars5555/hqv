<div id="f_pageingBox" style="position: absolute; width: 100%; margin-top: 30px;">

  <div class="dataTables_paginate paging_full_numbers" >
    {if $ns.pageCount>1}
    <div class="dataTables_paginate paging_full_numbers page_num">
      <ul id="pageBox" class="pagination">
        <li class="first_page">
          <a href="javascript:void(0);" class="f_impage" data-ngs-page="first"><span class="first paginate_button {if $ns.page<=1}paginate_button_disabled{/if}">First</span></a>
        </li>
        <li class="pevious_page">
          <a href="javascript:void(0);" class="f_impage" data-ngs-page="previous"><span class="previous paginate_button {if $ns.page<=1}paginate_button_disabled{/if}">Previous</span></a>
        </li>
        {for $i=$ns.pStart+1 to $ns.pEnd}
        {if ($ns.page) != ($i)}
        <li class="number_of_page">
          <a class="f_impage paginate_button" data-ngs-page="{$i}" href="javascript:void(0);">{$i}</a>
        </li>
        {else}
        <li class="number_of_page">
          <span class="paginate_button">{$i}</span>
        </li>
        {/if}
        {/for}
        <li class="next_page">
          <a href="javascript:void(0);" class="f_impage" data-ngs-page="next"><span class="next paginate_button">Next</span></a>
        </li>
        <li class="last_page">
          <a href="javascript:void(0);" class="f_impage" data-ngs-page="last"><span class="last paginate_button">Last</span></a>
        </li>
      </ul>
    </div>
    {/if}
  </div>
  <div class="dataTables_info">
    <ul class="page_ctrl">
      <li class="page_text">
        <span>Page</span>
      </li>
      <li class="current_page">
        <input id="f_go_to_page" type="text" value="{$ns.page}">
      </li>
      <li class="total_pages">
        <span> of {$ns.pageCount}</span>
      </li>
      {*
      <li class="page_number">
        <select id="f_count_per_page">
          {foreach from=$ns.itemsPerPageOptions item=perPageCount}
          <option {if $ns.limit==$perPageCount}selected="selected"{/if}>{$perPageCount}</option>
          {/foreach}
        </select>
      </li>
      *}
      <li class="display_page_number">
        <span>Displaying {$ns.limit*($ns.page-1)+1} to {$ns.limit*$ns.page} of {$ns.itemsCount} items</span>
      </li>

    </ul>
  </div>
</div>
