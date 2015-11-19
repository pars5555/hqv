<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Profile</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row">
        <div class="row">
            unique voters : {$ns.countGroupByVoter}<br>
            unique Participants : {$ns.nonParticipantCounts}<br>
            unique Non Participants  : {$ns.participantCounts}<br>
            
            <div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="First Name" type="text" id="firstName"/>
        <label class="active" for="firstName">First Name</label>
    </div>  
    <div class="input-field col s12 m4 4">
        <input placeholder="Last Name" type="text" id="lastName" />
        <label class="active" for="lastName">Last Name</label>
    </div>
    <div class="input-field col s12 m4 4">
        <input placeholder="Father Name" type="text" id="fatherName" />
        <label class="active" for="fatherName">Father Name</label>
    </div>
</div>
            <div class="row">
                <div class="col s4 m4 4">
                    <label for="birthYear">Year</label>
                    <select id="birthYear" class="browser-default">
                        <option value="0">Select</option>
                        {for $i=1890 to 2000}
                            <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col s4 m4 4">
                    <label for="birthMonth">Month</label>
                    <select id="birthMonth" class="browser-default">
                        <option value="0">Select</option>
                        {for $i=1 to 12}
                            <option value="{$i}" >{$i}</option>
                        {/for}
                    </select>
                </div>
                <div class="col s4 m4 4">
                    <label for="birthDay">day</label>
                    <select id="birthDay" class="browser-default">
                        <option value="0">Select</option>
                        {for $i=1 to 31}
                            <option value="{$i}">{$i}</option>
                        {/for}
                    </select>
                </div>
            </div>
        </div>
        <div class="col s12 m12 12" id='realVotersTableContainer'>
            {nest ns=list}
        </div>
    </div>
</div>