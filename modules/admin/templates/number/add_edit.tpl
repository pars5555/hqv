<div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="Voter Number" type="number" id="voterNumber" value="{$ns.voterNumber}"/>
        <label class="active" for="voterNumber">Voter Number</label>
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