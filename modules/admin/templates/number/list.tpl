<div class="row">
    <div class="col s12 m6 6">
        <label for="p_page">Page</label>
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
<table class="responsive-table real-voters">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Price</th>
            <th>Birth Date</th>
            <th>Exist In List</th>
            <th>Duplication</th>
            <th>PreVote Match</th>
            <th>invalid?</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            {if isset($ns.voters[$row->getVoterId()])}
                {assign voter $ns.voters[$row->getVoterId()]}            
            {else}
                {assign voter 0}
            {/if}
            <tr data-rowid="{$row->getId()}">
                <td>{if !empty($voter)}{$voter->getFirstName()}{/if}</td>
                <td>{if !empty($voter)}{$voter->getLastName()}{/if}</td>
                <td>{if !empty($voter)}{$voter->getFatherName()}{/if}</td>
                <td>{if !empty($voter)}{$voter->getBirthDate()}{/if}</td>
                <td>{if $row->getAreaVoterId()>0}<i class="fa fa-check action-btn"></i>{else}<i class="fa fa-close action-btn delete"></i>{/if}</td>
                <td>{if in_array($row->getId(), $ns.duplicatedInListMappedById)}<i class="fa fa-close action-btn delete"></i>{else}<i class="fa fa-check action-btn"></i>{/if}</td>
                <td>
                    {if !isset($ns.preVoteData[$row->getVoterId()])}
                        -
                    {else}
                        {if $ns.preVoteData[$row->getVoterId()]->getWillVote()==1}
                            <i class="fa fa-check action-btn"></i>
                        {else}
                            <i class="fa fa-close action-btn delete"></i>
                        {/if}
                    {/if}
                </td>

                <td>
                    <div class="switch">
                        <label>
                            invalid
                            <input data-rowid="{$row->getId()}" {if $row->getInvalid() == 0}checked{/if}  class="f_validationBtn" type="checkbox" />
                            <span class="lever"></span>
                            valid
                        </label>
                    </div>
                    <!-- <a data-rowid="{$row->getId()}" href="javascript:void(0);" class="validVoteButton">+</a>
                    <a data-rowid="{$row->getId()}" href="javascript:void(0);" class="invalidVoteButton">X</a> -->
                </td>
                <td>
                    <a data-rowid="{$row->getId()}" class="f_edit waves-effect waves-light btn">Edit<i class="material-icons left">mode_edit</i></a>
                    <a data-rowid="{$row->getId()}" class="f_delete waves-effect waves-light btn">Delete<i class="material-icons left">mode_delete</i></a>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>    
<div id="caseInvalidModel" class="modal">
    <div class="modal-content">
        <h4>Why do you want to set Invalid</h4>
        <p>Describe below</p>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="setInvalidDescr" class="materialize-textarea"></textarea>
                <label for="textarea1">Textarea</label>
            </div>
            <p id="setInvalidDescrErr" class="red-text darken-2">Please fill up</p>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" id="setInvalidBtn" class="modal-action waves-effect btn" style="margin-left:10px;">Confirm</a>
        <a href="#!" class="modal-action modal-close waves-effect btn">Cancel</a>
    </div>
</div>
<div id="caseDeleteModel" class="modal">
    <div class="modal-content">
        <h4>Why do you want to delete?</h4>
    </div>
    <div class="modal-footer">
        <a href="#!" id="deleteBtn" class="modal-action waves-effect btn" style="margin-left:10px;">Confirm</a>
        <a href="#!" class="modal-action modal-close waves-effect btn">Cancel</a>
    </div>
</div>
