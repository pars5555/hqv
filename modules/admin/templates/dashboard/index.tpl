{literal} 
    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['bar','corechart']}]}"></script>
{/literal} 
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
<div class="row">
    <div class="col s12">
        <div class="row">
            <div class='col s12 m6 l3'>
                Passport Chart
                <div id="passport_chart" style="width: 200px; height: 300px;"></div>
                Passport Voters Count: <span id="passport_total_voters_count"></span>
            </div>
            <div class='col s12 m6 l3'>
                Number Chart
                <div id="number_chart" style="width: 200px; height: 300px;"></div>
                Number Voters Count: <span id="number_total_voters_count"></span>
            </div>
            <div class='col s12 m6 l3'>
            </div>
            <div class='col s12 m6 l3'>
            </div>
        </div>
    </div>
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
<div class="row">
    {foreach from=$ns.allTerritoryIds item=territoryId}
        <div class="row">{$territoryId}: 
            Passport(<span id='dashboardPassportTerritoryVotersCountContainer_{$territoryId}'></span>), 
            Number (<span id='dashboardNumberTerritoryVotersCountContainer_{$territoryId}'></span>)</div>
        {/foreach}
</div>