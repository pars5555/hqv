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
        <div class="col s16 m8 8 offset-m0" id="realVoterAddEditForm">
            <form id="addPrevoteForm" autocomplete="off">
                <div class="row" id='prevoteAddEditContainer'>
                    {nest ns=add_edit}
                </div>
            </form>
        </div>
        <div class="col s12 m12 12" id='prevoteTableContainer'>
            {nest ns=list}
        </div>
    </div>
</div>