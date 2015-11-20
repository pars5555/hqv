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
            <th>In List</th>
            <th>In Area List</th>
            <th>Duplication</th>
            <th>invalid?</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            {if $row->getVoterId()>0}
            {assign voter $ns.voters[$row->getVoterId()]}
            {/if}
            <tr data-rowid="{$row->getId()}">
                <td>{$row->getFirstName()}</td>
                <td>{$row->getLastName()}</td>
                <td>{$row->getFatherName()}</td>
                <td>{$row->getBirthDate()}</td>
                <td>{if $row->getVoterId()>0}error{else}ok{/if}</td>
                <td>{if $row->getVoterId()>0 && $voter ->getAreaId() == $row->getVoterId()}error{else}ok{/if}</td>
                <td>{if $row->getVoterId()>0 && isset($ns.duplicatedInListMappedByVoterId[$row->getVoterId()])}error{else}ok{/if}</td>
                <td>
                    <div class="switch">
                        <label class="active"> 
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