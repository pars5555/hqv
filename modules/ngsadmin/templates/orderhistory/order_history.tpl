<h2>CONSUMER TRANSACTIONS</h2>

<div class="adding-header">
{block name=additional_buttons}{/block}

{block name=export_button}
    <button class="f_export_items blue-button" id="exportOrderHistory">
        Export
    </button>
    <form id="csvExportOrderHistory" action="http:{ngs cmd=get_static_path}/dyn/export/do_export_order_history" style="display: none" target="_blank">
        <input type="hidden" name="ordering" id="ordering" value="" />
        <input type="hidden" name="sorting" id="sorting" value="" />
    </form>
{/block}
</div>
<div class="search-wrapper">
    <select class = "select-dropdown" id="searchFieldSelect" name="search_field" autocomplete="off">
        <option value="searchSkinExpertBox">Skin Care Expert Name</option>
        <option value="searchConsumerBox">Consumer Name</option>
        <option value="searchProductBox">Product Name</option>
        <option value="orderDate">Order Date</option>
        <option value="addedDate">Added Date</option>
    </select>
    <a class = "add_option blue-button" href="javascript:void(0);" id="filterPlusBtn">+</a>

    <div class="clear"></div>
    <br/>
    <form id="filterForm">
        <div id="searchSkinExpertBox" class="f_filterInputBox" style="display: none;">
            <div class="search">
                <input placeholder="Skin Care Expert Name" disabled="true" type="text" name="filter[pharmacy_name]" value="" autocomplete="off"/>
            </div>
            <a href="javascript:void(0); " class="f_filterMinusBtn add_option blue-button">-</a>
            <div class="clear"></div>
            <br/>
        </div>
        <div id="searchConsumerBox" class="f_filterInputBox" style="display: none;">
            <div class="search">
                <input placeholder="Consumer Name" disabled="true" type="text" name="filter[user_name]" value="" autocomplete="off"/>
            </div>
            <a href="javascript:void(0); " class="f_filterMinusBtn add_option blue-button">-</a>
            <div class="clear"></div>
            <br/>
        </div>

        <div id="searchProductBox" class="f_filterInputBox" style="display: none;">
            <div class="search">
                <input placeholder="Product Name" disabled="true" type="text" name="filter[product_name]" value="" autocomplete="off"/>
            </div>
            <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
            <div class="clear"></div>
            <br/>
        </div>
        <div id="orderDate" class="f_filterInputBox" style="display: none;">
            <div class="search">
                <input placeholder="Order Date From" disabled="true" type="text" class="f_datepicker" name="filter[order_date][from]" value="" autocomplete="off"/>
                <input placeholder="Order Date To" disabled="true" type="text" class="f_datepicker" name="filter[order_date][to]" value="" autocomplete="off"/>
            </div>
            <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
            <div class="clear"></div>
            <br/>
        </div>
        <div id="addedDate" class="f_filterInputBox" style="display: none;">
            <div class="search">
                <input placeholder="Added Date From" disabled="true" type="text" class="f_datepicker" name="filter[added_date][from]" value="" autocomplete="off"/>
                <input placeholder="Added Date To" disabled="true" type="text" class="f_datepicker" name="filter[added_date][to]" value="" autocomplete="off"/>
            </div>
            <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
            <div class="clear"></div>
            <br/>
        </div>
  
        <div>
            <div class="search">
                <input class="filter_button blue-button" type="submit" style="cursor: pointer;" value="Filter" autocomplete="off"/>
            </div>
            <div class="clear"></div>
            <br/>
        </div>
    </form>
</div>

<div class="table-wrapper">
    <div class="table-content">
        <div id="f_orderingBox" class="table-row">
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="id" class="f_sorting"> Id </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="pharmacy_id" class="f_sorting"> Skin Care Expert Name </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="user_id" class="f_sorting">Consumer Name </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="product_id" class="f_sorting">Product Name </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="purchase" class="f_sorting"> Purchase </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="wishlist" class="f_sorting"> Wishlist </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="follow_up" class="f_sorting"> Follow-up required </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)"> Beauty Advisor Notes</a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="order_date" class="f_sorting"> Order Date </a>
            </div>
            <div class="table-content-title table-current-content">
                <a href="javascript:void(0)" data-ngs-sort-field="added_date" class="f_sorting"> Added Date </a>
            </div>

        </div>
        <div class="f_tbody tbody" id="f_tbody">
            {nest ns="list"}
        </div>
    </div>
</div>