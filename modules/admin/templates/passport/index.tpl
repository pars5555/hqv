<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <form id='addRealVoterForm' autocomplete="off">
        <input type="text" id="firstName"/>
        <input type="text" id="lastName"/>
        <input type="text" id="fatherName"/>
        <select id="birthYear" class="browser-default">
            {for $i=1890 to 2000}
                <option value="{$i}">{$i}</option>
            {/for}
        </select>
        <select id="birthMonth" class="browser-default">
            {for $i=1 to 12}
                <option value="{$i}">{$i}</option>
            {/for}
        </select>
        <select id="birthDay" class="browser-default">
            {for $i=1 to 31}
                <option value="{$i}">{$i}</option>
            {/for}
        </select>
        <input type="hidden" id="editRowId"/>
        <input type="submit" value="add"/>
    </form>
    <div>
        {if $ns.pageCount>1}
            <select id="p_page" class="browser-default">
                {for $page=1 to $ns.pageCount}
                    <option value="{$page}" {if $ns.page==$page}selected{/if}>{$page}</option>
                {/for}
            </select>
        {/if}
        <select id="p_limit" class="browser-default">
            <option value="20" {if $ns.limit==20}selected{/if}>20</option>
            <option value="50" {if $ns.limit==50}selected{/if}>50</option>
            <option value="100" {if $ns.limit==100}selected{/if}>100</option>
            <option value="500" {if $ns.limit==500}selected{/if}>500</option>
        </select>

    </div>
    <table class="responsive-table">
        <thead>
            <tr>
                <th data-field="id">First Name</th>
                <th data-field="name">Last Name</th>
                <th data-field="price">Father Price</th>
                <th data-field="price">Birth Date</th>
                <th data-field="price">In List</th>
            </tr>
        </thead>
        <tbody id="real_voters_table">
            {foreach from=$ns.rows item=row}
                {assign bd "-"|explode:$row->getBirthDate()} 
                
                <tr data-rowid="{$row->getId()}" data-first-name="{$row->getFirstName()}" data-last-name="{$row->getLastName()}"
                    data-father-name="{$row->getFatherName()}" data-birth-year="{$bd[0]|intval}" data-birth-month="{$bd[1]|intval}"
                     data-birth-day="{$bd[2]|intval}">
                    <td>{$row->getFirstName()}</td>
                    <td>{$row->getLastName()}</td>
                    <td>{$row->getFatherName()}</td>
                    <td>{$row->getBirthDate()}</td>
                    <td>{if $row->getVoterId()>0}yes{else}no{/if}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>  

</div>