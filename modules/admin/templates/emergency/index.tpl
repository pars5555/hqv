<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Emergency</a>
            </div>
        </div>
    </nav>
</div>

<table class="responsive-table real-voters">
    <thead>
        <tr>
            <th>Phone Number</th>
            <th>Ip Address</th>
            <th>Datetime</th>
            <th>Done</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            <tr data-rowid="{$row->getId()}">
                <td>{$row->getPhoneNumber()}</td>
                <td><a href="javascript:void(0);" class="ip_address_btn" data-ip="{$row->getIpAddress()}">{$row->getIpAddress()}</a></td>
                <td>{$row->getDatetime()}</td>
                <td>
                    <div class="switch">
                        <label class="active"> 
                            problem
                            <input data-rowid="{$row->getId()}" {if $row->getIsDone() == 1}checked{/if}  class="f_validationBtn" type="checkbox" />
                            <span class="lever redlever"></span>
                            solved
                        </label>
                    </div>
                </td>

            </tr>
        {/foreach}
    </tbody>
</table>    