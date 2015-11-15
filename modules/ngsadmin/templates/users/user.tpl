<h2>CONSUMERS</h2>

<div class="adding-header">
  {block name=add_button}
  <button class="f_add_item blue-button">
    Add New Consumers
  </button>
  {/block}
  {block name=export_button}
  <button class="f_export_items blue-button" id="exportUsers">
    Export
  </button>
  <form id="csvExportUsers" action="http:{ngs cmd=get_static_path}/dyn/export/do_export_users" style="display: none" target="_blank">
    <input type="hidden" name="ordering" id="ordering" value="" />
    <input type="hidden" name="sorting" id="sorting" value="" />
    <input type="hidden" name="export_filter" id="exportFilter" value="" />
  </form>
  {/block}
  {block name=additional_buttons}{/block}
</div>

<div class="search-wrapper">
  <select class = "select-dropdown" id="searchFieldSelect" name="search_field" autocomplete="off">
    <option value="searchEmailBox">Email</option>
    <option value="searchMobileBox">Mobile</option>
    <option value="firstNameBox">First Name</option>
    <option value="lastNameBox">Last Name</option>
    <option value="skinTypesBox">Skin Type</option>
    <option value="skinProblemBox">Skin Problem</option>
    <option value="nationalityBox">Nationality</option>
    <option value="birthdayBox">Birthday</option>
    <option value="registrationBox">Registration</option>
    <option value="skinCareExpert">Skin Care Expert</option>
    <option value="profession">Profession</option>
    <option value="username">Username</option>
    <option value="address1">Address1</option>
    <option value="address2">Address2</option>
    <option value="zip">Zip</option>
    <option value="city">City</option>
  </select>
  <a class = "add_option blue-button" href="javascript:void(0);" id="filterPlusBtn">+</a>

  <div class="clear"></div>
  <br/>
  <form id="filterForm">
  <div id="searchEmailBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Email" disabled="true" type="text" name="filter[email]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0); " class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="searchMobileBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Mobile" disabled="true" type="text" name="filter[mobile]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0); " class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>

  <div id="firstNameBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="First Name" disabled="true" type="text" name="filter[first_name]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0); " class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="lastNameBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Last Name" disabled="true" type="text" name="filter[last_name]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="skinCareExpert" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Skin Care Expert" disabled="true" type="text" name="filter[pharmacy_name]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="profession" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="profession" disabled="true" type="text" name="filter[profession_name]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
       <div id="username" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Username" disabled="true" type="text" name="filter[username]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
       <div id="address1" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Address1" disabled="true" type="text" name="filter[address1]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
       <div id="address2" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Address2" disabled="true" type="text" name="filter[address2]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
       <div id="city" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="City" disabled="true" type="text" name="filter[city]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
       <div id="zip" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Zip" disabled="true" type="text" name="filter[zip]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>

  <div id="skinTypesBox" disabled="true" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <select name="filter[skin_type][]" multiple="true" style="height: 100%;">
        {foreach from=$ns.skinTypesDtos item=item}
        <option value="{$item->getId()}"> {$item->getName()} </option>
        {/foreach}
      </select>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>

  <div id="skinProblemBox" disabled="true" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <select name="filter[skin_problem][]" multiple="true" style="height: 100%;">
        {foreach from=$ns.skinProblemsDtos item=item}
        <option value="{$item->getId()}">
          {$item->getName()} </option>
        {/foreach}
      </select>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="nationalityBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Nationality" disabled="true" type="text" name="filter[nationality]" value="" autocomplete="off"/>
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="birthdayBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Birthday From" disabled="true" class="f_datepicker" type="text" name="filter[birthdate][from]" value="" autocomplete="off" />
      <input placeholder="Birthday To" disabled="true" class="f_datepicker" type="text" name="filter[birthdate][to]" value="" autocomplete="off" />
    </div>
    <a href="javascript:void(0);" class="f_filterMinusBtn add_option blue-button">-</a>
    <div class="clear"></div>
    <br/>
  </div>
  <div id="registrationBox" class="f_filterInputBox" style="display: none;">
    <div class="search">
      <input placeholder="Registration From" disabled="true" class="f_datepicker" type="text" name="filter[added_date][from]" value="" autocomplete="off" />
      <input placeholder="Registration To" disabled="true" class="f_datepicker" type="text" name="filter[added_date][to]" value="" autocomplete="off" />
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
        <a href="javascript:void(0)" data-ngs-sort-field="id" class="f_sorting"> ID </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="email" class="f_sorting"> Email </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="mobile" class="f_sorting"> Mobile </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="title" class="f_sorting"> Title </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="pharmacy_id" class="f_sorting">  Skin Care Expert </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="first_name" class="f_sorting">First Name </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="last_name" class="f_sorting"> Last Name </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="gender" class="f_sorting"> Gender </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="profession" class="f_sorting"> Profession  </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="username" class="f_sorting"> Username </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="nationality" class="f_sorting"> Nationality </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="address1" class="f_sorting"> Address1 </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="address2" class="f_sorting"> Address2 </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)"> Skin Types </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)"> Skin Problems </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="city" class="f_sorting"> City </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="zip" class="f_sorting"> zip </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="status" class="f_sorting"> Status </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" data-ngs-sort-field="added_date" class="f_sorting"> Date </a>
      </div>
      <div class="table-content-title table-current-content">
        <a href="javascript:void(0)" > Note </a>
      </div>
      <div class="table-content-title table-current-content">
        actions
      </div>
    </div>
    <div class="f_tbody tbody" id="f_tbody">
      {nest ns="list"}
    </div>
  </div>
</div>