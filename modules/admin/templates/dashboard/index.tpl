
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
            <span class='hamburger-btn'>
                <i data-activates="slide-out" id="hamburgerMenuBtn" class="material-icons hamburger-btn">reorder</i>
            </span>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row" id='dashboardStatisticsContainer'>
        {nest ns=statistics}
    </div>
    <div class="row" id='dashboardAreaSelectionContainer'>
        {nest ns=area}
    </div>
    <div class="row" id='dashboardAreaStatisticsContainer'>
    </div>
</div>