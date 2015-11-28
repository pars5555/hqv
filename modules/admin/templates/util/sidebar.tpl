
<div id="slide-out" class="side-nav fixed">
    <div class="section grey darken-4 right-align">
        <div class="row">
            <div class="col">
                <h5 class="white-text text-lighten-2 margin-right-5" >Հանրաքվե</h5>
            </div>
        </div>
    </div>
    <ul >
        {if $ns.userType==$ns.userTypeAdmin}
        <li id="sidebar_dashboard_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='dashboard.index' ><i class="material-icons left">language</i>Dashboard</a>
        </li>
            <li id="sidebar_voters_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='voters.index' ><i class="material-icons left">perm_identity</i>Pre Vote Data</a>
            </li>
        {/if}
        <li id="sidebar_passport_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passport.index'><i class="material-icons left">perm_media</i>Passport</a>
        </li>
        <li id="sidebar_number_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='number.index'><i class="material-icons left">perm_media</i>Number</a>
        </li>
        <li id="sidebar_prevote_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='prevote.index'><i class="material-icons left">perm_media</i>Prevote</a>
        </li>
        {if $ns.userType==$ns.userTypeAdmin}
            <li id="sidebar_passanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passanalyze.index'><i class="material-icons left">perm_media</i>PassAnalyze</a>
            </li>
            <li id="sidebar_numanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='numanalyze.index'><i class="material-icons left">perm_media</i>NumAnalyze</a>
            </li>
            <li id="sidebar_prevoteanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='prevoteanalyze.index'><i class="material-icons left">perm_media</i>PrevoteAnalyze</a>
            </li>
            <li id="sidebar_snippets_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='snippets.index'><i class="material-icons left">perm_media</i>Snippets</a>
            </li>
            <li id="sidebar_emergency_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='emergency.index'><i class="material-icons left">perm_media</i>Emergency Call</a>
            </li>
        {/if}
        <li>
            <a class="waves-effect waves-light btn-flat le" href="{$SITE_PATH}/dyn/login/do_logout"><i class="material-icons left">input</i>Logout</a>
        </li>
    </ul>
    <!-- <a style="" href="#"  class="button-collapse"><i class="material-icons prefix">view_headline</i></a> -->
</div>