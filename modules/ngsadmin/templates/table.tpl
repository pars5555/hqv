<h2>{$ns.pageTitle}</h2>

<div class="adding-header">
	{block name=add_button}
	<button class="f_add_item blue-button">
		Add New Item
	</button>
	{/block}
	{block name=export_button}
	<button class="f_export_items blue-button">
		Export
	</button>
	<form id="csvExportForm" style="display: none" target="_blank">
		<input type="hidden" name="export_csv" value="1" />
	</form>
	{/block}
	{block name=additional_buttons}{/block}
</div>

<div class="search-wrapper">
	<div class="search">
		<input id="searchText" placeholder="Search" type="text" name="search_text" value="{$ns.searchText}" autocomplete="off"/>
		<div id="searchBtn" class="loupe-wrapper">
			<span class="glyph loupe"></span>
		</div>
	</div>
	<select id="searchFieldSelect" name="search_field" autocomplete="off">
		{foreach from=$ns.visibleFields  item=visibleFieldSample}
			<option value="{$visibleFieldSample->getDbFieldName()}" {if $ns.searchField==$visibleFieldSample->getDbFieldName()}selected="selected"{/if}>
				{$visibleFieldSample->getTitle()}
			</option>
		{/foreach}
	</select>
	<div class="clear"></div>
</div>

<div class="table-wrapper">
	<div class="table-content">
		<div id="f_orderingBox" class="table-row">
			{foreach from=$ns.visibleFields  item=visibleFieldSample}
			<div class="table-content-title table-current-content {$visibleFieldSample->getTitle()}">
				<a href="javascript:void(0)" data-ngs-sort-field="{$visibleFieldSample->getDbFieldName()}" class="f_sorting" order_direction='{if $ns.orderField ==$visibleFieldSample->getDbFieldName() && $ns.orderDirection=='asc'}desc{else}asc{/if}'> {$visibleFieldSample->getTitle()}
				{*{if $ns.orderField ==$visibleFieldSample->getDbFieldName()}
				{if $ns.orderDirection=='asc'}
				▲
				{else if $ns.orderDirection=='desc'}
				▼
				{/if}
				{/if}*} </a>
			</div>
			{/foreach}
			<div class="table-content-title table-current-content">
				actions
			</div>
		</div>
		{foreach from=$ns.items item=item}
		<div class="table-row">
			{foreach from=$ns.visibleFields  item=visibleFieldSample}
			{assign var=getter value=$visibleFieldSample->getGetter()}
                        <div class="table-current-content " title="{$item->$getter()}">
				{$item->$getter()}
			</div>
			{/foreach}
			<div class="table-current-content  edit-delete-wrapper" >
				<span class="f_edit_item glyph edit" item_id="{$item->getId()}"></span>
				<span class="glyph delete f_delete_item" item_id="{$item->getId()}"></span>
			</div>
		</div>
		{/foreach}
	</div>
	{include file="{ngs cmd=get_template_dir}/util/paging_box.tpl"}
</div>