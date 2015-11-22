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
            <th>Vote Count</th>
            <th>In List</th>
            <th>In Area List</th>
            <th>Duplication</th>
            <th>PreVote Match</th>
            <th>invalid?</th>
        </tr>
    </thead>
    <tbody id="real_duplicated_voters_table">
        {foreach from=$ns.rows item=row}
            {if $row->getVoterId()>0}
                {assign voter $ns.voters[$row->getVoterId()]}
            {else}
                {assign voter 0}
            {/if}
            <tr data-rowids="{$row->getDuplicationIds()}">
                <td>{$row->getFirstName()}</td>
                <td>{$row->getLastName()}</td>
                <td>{$row->getFatherName()}</td>
                <td>{$row->getBirthDate()}</td>
                <td>{$row->getVoteCount()}</td>
                <td>{if $row->getVoterId()>0}ok{else}error{/if}</td>
                <td>{if $row->getVoterId()>0 && $voter ->getAreaId() == $row->getAreaId()}ok{else}error{/if}</td>
                <td>
                    {if $row->getVoterId()>0}
                        {if isset($ns.duplicatedInListMappedByVoterId[$row->getVoterId()])}
                            error
                        {else}
                            ok
                        {/if}
                    {else}
                        -
                    {/if}
                </td>
                <td>
                    {if !isset($ns.preVoteData[$row->getVoterId()])}-{else}
                        {if $ns.preVoteData[$row->getVoterId()]->getWillVote()==1}
                            OK
                        {else}
                            Error
                        {/if}
                    {/if}</td>
                <td>
                    {if $row->getInvalid() == 1}
                        <span title="{$row->getInvalidNote()}">{$row->getInvalidNote()}</span>
                    {/if}

                </td>
            </tr>
        {/foreach}
    </tbody>
</table> 