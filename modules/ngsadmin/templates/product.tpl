<h2>Pharmacy</h2>
<div class="search-wrapper">
  <div class="search">
    <input id="searchText" placeholder="Search" type="text" name="search_text" value="" autocomplete="off"/>
    <div id="searchBtn" class="loupe-wrapper">
      <span class="glyph loupe"></span>
    </div>
  </div>
  <select id="searchFieldSelect" class="select-dropdown" name="search_field" autocomplete="off">

  </select>
  <div class="clear"></div>
</div>

<div class="table-wrapper">
  <div class="table-content">
    <div id="f_orderingBox" class="table-row">
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="id" class="f_sorting"> Id </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="pharmacy_name" class="f_sorting"> Pharmacy Name</a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="username" class="f_sorting"> Username </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="pharmacy_id" class="f_sorting"> Pharmacy Id </a>
      </div>
    </div>
    <div class="f_tbody tbody" id="f_tbody">
      {nest ns="list"}
    </div>
  </div>
</div>