<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
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
        <div class="col s12 m6 6 offset-m3" id="realVoterAddEditForm">
            <form id="addPrevoteForm" autocomplete="off">
                <div class="row" id='addRealVoterAddEditContainer'>
                    {nest ns=add_edit}
                </div>
            </form>
        </div>
        <div class="col s12 m12 12" id='realVotersTableContainer'>
            {nest ns=list}
        </div>
    </div>
</div>