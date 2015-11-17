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
    <div class="row">
        <div class="col s12 m6 6 offset-m3">
            <form id='addRealVoterForm' autocomplete="off">
                <div class="row">
                    <div class="input-field col s12 m4 4">
                        <input placeholder="First Name" type="text" id="firstName"/>
                        <label class="active" for="firstName">First Name</label>
                    </div>  
                    <div class="input-field col s12 m4 4">
                        <input placeholder="Last Name" type="text" id="lastName"/>
                        <label class="active" for="lastName">Last Name</label>
                    </div>
                    <div class="input-field col s12 m4 4">
                        <input placeholder="Father Name" type="text" id="fatherName"/>
                        <label class="active" for="fatherName">Father Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4 4">
                        <label for="birthYear">Year</label>
                        <select id="birthYear" class="browser-default">
                            {for $i=1890 to 2000}
                                <option value="{$i}">{$i}</option>
                            {/for}
                        </select>
                    </div>
                    <div class="col s12 m4 4">
                        <label for="birthMonth">Month</label>
                        <select id="birthMonth" class="browser-default">
                            {for $i=1 to 12}
                                <option value="{$i}">{$i}</option>
                            {/for}
                        </select>
                    </div>
                    <div class="col s12 m4 4">
                        <label for="birthDay">day</label>
                        <select id="birthDay" class="browser-default">
                            {for $i=1 to 31}
                                <option value="{$i}">{$i}</option>
                            {/for}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2 4">
                        <label for="p_region">Region</label>
                        <select id="p_region" class="browser-default">
                            {foreach from=$ns.regions item=region}
                                <option value="{$region}" {if $ns.selectedRegion == $region}selected{/if}>{$region}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col s12 m3 4">
                        <label for="p_community">Community</label>
                        <select id="p_community" class="browser-default">
                            {foreach from=$ns.regionCommunities item=regionCommunity}
                                <option value="{$regionCommunity}" {if $ns.selectedRegionCommunity == $regionCommunity}selected{/if}>{$regionCommunity}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col s12 m7 4">
                        <label for="p_address">Address</label>
                        <select id="p_address" class="browser-default">
                            {foreach from=$ns.areas item=address key=rowid}
                                <option value="{$rowid}" {if $ns.selectedAreaId == $rowid}selected{/if}>{$address}</option>
                            {/foreach}
                        </select>
                    </div>

                </div>
                <div class="row">
                    <input type="hidden" id="editRowId"/>
                    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
                    <input class="btn col s12 m12 12" type="submit" value="add"/>
                </div>
                <div class="row">
                    <a class="btn col s12 m12 12 hide" id="cancelEditButton" href ="javascript:void(0);" >cancel</a>
                </div>
            </form>

        </div>
        <div class="col s12 m12 12" id='realVotersTableContainer'>
            {nest ns=list}
        </div>
    </div>
</div>