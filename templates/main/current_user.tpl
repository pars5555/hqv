{if isset($ns.voter)}
    <h4>Message</h4>
    <p class="center-align red-text text-darken-4">Warning Message</p>
    <form class="col s12">
        <div class="section row">
            <div class="input-field col s12 m4 4">
                <i class="material-icons prefix">account_circle</i>
                <input disabled  value="{$ns.voter->getFirstName()}" type="tel" class="validate">
                <label class="active" >First Name</label>
            </div>
            <div class="input-field col s12 m4 4">
                <i class="material-icons prefix">account_circle</i>
                <input disabled value="{$ns.voter->getLastName()}" type="tel" class="validate">
                <label class="active">Last Name</label>
            </div>
            <div class="input-field col s12 m4 4">
                <i class="material-icons prefix">account_circle</i>
                <input disabled  value="{$ns.voter->getFatherName()}" type="tel" class="validate">
                <label class="active" >Father name</label>
            </div>
            <div class="input-field col s12 m4 4">
                <i class="material-icons prefix">perm_contact_calendar</i>
                <input disabled value="{$ns.voter->getDirthDate()}" type="tel" class="validate">
                <label class="active">Birthday</label>
            </div>
            <div class="input-field col s12 m8 8">
                <i class="material-icons prefix">mode_edit</i>
                <input disabled  value="{$ns.voter->getAddress()}" type="tel" class="validate">
                <label class="active" >Address</label>
            </div>
            <div class="input-field col s12 m12 12">
                <input disabled value="Address" type="tel" class="validate">
                <label class="active">Address</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone">Telephone</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="email" class="validate">
                <label for="cu_email" data-error="wrong" data-success="right">Email</label>
            </div>
            <div class="col s12 m6 6">
                <div class="row">                   
                    <div class="col s12 m6 6">
                        <p>
                            <input type="checkbox" id="cu_will_be_in_armenia" checked="checked" />
                            <label for="cu_will_be_in_armenia">I will be in Armenia at 6th</label>	
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s6 m6 6 offset-m3">
                        <h4 class="center-align">I will vote</h4>                      
                        <div class="f_vote_btn yes vote-btn left" data-ans='1'>
                            Yes
                        </div>
                        <div class="f_vote_btn no vote-btn right" data-ans='0'>
                            No
                        </div>
                        <input id="cu_will_vote" type="hidden" />
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="voterHash" value="{$ns.voter->getHash()}"/>
    </form>
{else}
    <h4>Wrong Voter Data!<h4>
        {/if}