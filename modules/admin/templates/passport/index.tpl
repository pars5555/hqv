<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Passport</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
 <div class="row">
     <div class="col s12 m6 6">
        <form id='addRealVoterForm' autocomplete="off">
            <div class="row">
                <div class="input-field col s12 m4 4">
                    <input placeholder="First Name" type="text" id="firstName"/>
                    <label class="active" for="firstName">First Name</label>
                </div>  
                <div class="input-field col s12 m4 4">
                    <input placeholder="Last Name" type="text" id="lastName"/>
                    <label class="active" for="lastName">Last Name</label>
                </div>
                <div class="input-field col s12 m4 4">
                    <input placeholder="Father Name" type="text" id="fatherName"/>
                    <label class="active" for="fatherName">Father Name</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 4">
                    <label for="birthYear">Year</label>
                    <select id="birthYear" class="browser-default">
                        {for $i=1890 to 2000}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col s12 m4 4">
                    <label for="birthMonth">Month</label>
                    <select id="birthMonth" class="browser-default">
                        {for $i=1 to 12}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col s12 m4 4">
                    <label for="birthDay">day</label>
                    <select id="birthDay" class="browser-default">
                        {for $i=1 to 31}
                        <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="hidden" id="editRowId"/>
                <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
                <input class="btn col s12 m12 12" type="submit" value="add"/>
            </div>
        </form>
        <div class="row">
            <div class="col s12 m6 6">
                <label for="p_page">Per Page</label>
                <select id="p_page" class="browser-default" {if $ns.pageCount<=1}disabled{/if}>
                    {for $page=1 to $ns.pageCount}
                    <option value="{$page}" {if $ns.page==$page}selected{/if}>{$page}</option>
                    {/for}
                </select>
            </div>
            <div class="col s12 m6 6">
                <label for="p_limit">Page Limit</label>
                <select id="p_limit" class="browser-default">
                    <option value="20" {if $ns.limit==20}selected{/if}>20</option>
                    <option value="50" {if $ns.limit==50}selected{/if}>50</option>
                    <option value="100" {if $ns.limit==100}selected{/if}>100</option>
                    <option value="500" {if $ns.limit==500}selected{/if}>500</option>
                </select>
            </div>
        </div>
     </div>
     <div class="col s12 m6 6">
        <table class="responsive-table real-voters">
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
 </div>
</div>