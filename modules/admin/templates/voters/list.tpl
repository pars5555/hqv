<div class="row">
    <label for="total">Total</label>
    {$ns.total_count}
</div>
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
            <th>Will Vote</th>
            <th>Invalid</th>
            <th>Unblock IP</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        {foreach from=$ns.rows item=row}
            {assign voter $ns.voters[$row->getVoterId()]}
            <tr data-rowid="{$voter->getId()}">
                <td>{$voter->getFirstName()}</td>
                <td>{$voter->getLastName()}</td>
                <td>{$voter->getFatherName()}</td>
                <td>{$voter->getBirthDate()}</td>
                <td>{$row->getWillVote()}</td>
                <td>
                    <a data-rowid="{$row->getId()}" href="javascript:void(0);" class="validVoteButton btn">valid</a>
                    <a data-rowid="{$row->getId()}" href="javascript:void(0);" class="invalidVoteButton btn">invalid</a>
                </td>
                <td>
                    <a data-rowid="{$row->getId()}" href="javascript:void(0);" class="unblockIPButton btn">Unblock IP</a>
                </td>
                    
            </tr>
        {/foreach}
    </tbody>
</table>    
