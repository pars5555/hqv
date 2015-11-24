<div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="First Name" type="text" id="firstName" value="{$ns.first_name}"/>
        <label class="active" for="firstName">First Name</label>
    </div>  
    <div class="input-field col s12 m4 4">
        <input placeholder="Last Name" type="text" id="lastName" value="{$ns.last_name}"/>
        <label class="active" for="lastName">Last Name</label>
    </div>
    <div class="input-field col s12 m4 4">
        <input placeholder="Father Name" type="text" id="fatherName" value="{$ns.father_name}"/>
        <label class="active" for="fatherName">Father Name</label>
    </div>
</div>
<div class="row">
    <div class="col s12 m4 4">
        <label for="birthYear">Year</label>
        <select id="birthYear" class="browser-default">
            {for $i=1890 to 2000}
                <option value="{$i}" {if $ns.birth_year == $i}selected{/if}>{$i}</option>
            {/for}
        </select>
    </div>
    <div class="col s12 m4 4">
        <label for="birthMonth">Month</label>
        <select id="birthMonth" class="browser-default">
            {for $i=1 to 12}
                <option value="{$i}"  {if $ns.birth_month == $i}selected{/if}>{$i}</option>
            {/for}
        </select>
    </div>
    <div class="col s12 m4 4">
        <label for="birthDay">day</label>
        <select id="birthDay" class="browser-default">
            {for $i=1 to 31}
                <option value="{$i}"  {if $ns.birth_day == $i}selected{/if}>{$i}</option>
            {/for}
        </select>
    </div>
</div>
<div class="row">
    <div class="col s4 m4 l4">
        <p>
          <input name="group1" type="radio" id="passportRadio" />
          <label for="passportRadio">Passport</label>
        </p>
    </div>
    <div class="col s4 m4 l4">
        <p>
          <input name="group1" type="radio" id="idRadio" />
          <label for="idRadio">Id</label>
        </p>
    </div>
    <div class="col s4 m4 l4">
        <p>
          <input name="group1" type="radio" id="militaryRadio" />
          <label for="militaryRadio">Military</label>
        </p>
    </div>
</div>
<div class="row">
    <input type="hidden" id="editRowId" value="{if $ns.edit==1}{$ns.row_id}{/if}"/>
    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
    <input class="btn col s12 m12 12" type="submit" value="{if $ns.edit==1}Save{else}Add{/if}"/>
</div>
{if $ns.edit==1}
    <div class="row">
        <a class="btn col s12 m12 12" id="cancelEditButton" href ="javascript:void(0);" >Cancel</a>
    </div>
{/if}