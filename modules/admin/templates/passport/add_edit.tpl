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
    <input type="hidden" id="editRowId"/>
    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
    <input class="btn col s12 m12 12" type="submit" value="add"/>
</div>
<div class="row">
    <a class="btn col s12 m12 12 hide" id="cancelEditButton" href ="javascript:void(0);" >cancel</a>
</div>