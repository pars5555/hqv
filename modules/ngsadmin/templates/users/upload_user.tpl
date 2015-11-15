<h2>UPLOAD CONSUMERS</h2>

<div class="adding-header">
  <button type="button" class="blue-button f_trigger_upload" style="float: none">
    Add file...
  </button>
  <input type="file" name="upload_user" id="upload_user" style="display: none" />
  
  <button class="f_export_items blue-button" id="exportUsers" style="display: none;">
    Export
  </button>
  <form id="csvExportUsers" action="http:{ngs cmd=get_static_path}/dyn/export/do_export_uploaded_users" style="display: none" target="_blank">
  </form>
</div>

<div class="search-wrapper"></div>

<div class="table-wrapper" id="usersTable" style="display: none;">
    
  <div class="table-content">
      <h2 style="margin-bottom: 20px"> DUPLICATED CONSUMERS</h2>
      <div id="f_orderingBox" class="table-row">
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="id" class="f_sorting"> Id </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="mobile" class="f_sorting"> Mobile </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="pharmacy_id" class="f_sorting"> Pharmacy </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="username" class="f_sorting"> Username </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="email" class="f_sorting"> Email </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="first_name" class="f_sorting"> Name </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="last_name" class="f_sorting"> Last Name </a>
      </div>
    </div>
    <div class="f_tbody tbody" id="f_tbody"></div>
  </div>
</div>