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
    <div class="row" id="duplicatedVoterContainer">
        
    </div>
    <div class="row">
        <table class="responsive-table real-voters">
            <thead>
                <tr>
                    <th data-field="id">First Name</th>
                    <th data-field="name">Last Name</th>
                    <th data-field="price">Father Price</th>
                    <th data-field="price">Birth Date</th>
                    <th data-field="price">Vote Count</th>
                    <th data-field="price">In List</th>
                </tr>
            </thead>
            <tbody id="real_duplicated_voters_table">
                {foreach from=$ns.duplicatedRealVoters item=row}
                    {assign bd "-"|explode:$row->getBirthDate()} 
                    <tr data-rowids="{$row->getDuplicationIds()}">
                        <td>{$row->getFirstName()}</td>
                        <td>{$row->getLastName()}</td>
                        <td>{$row->getFatherName()}</td>
                        <td>{$row->getBirthDate()}</td>
                        <td>{$row->getVoteCount()}</td>
                        <td>{if $row->getVoterId()>0}<i class="fa fa-check action-btn"></i>{else}<i class="fa fa-close action-btn delete"></i>{/if}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table> 
    </div>
</div>