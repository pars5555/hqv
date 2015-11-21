{if isset($ns.voter)}
    {if !empty($ns.voter_data)}
        <p class="center-align red-text text-darken-4">You have already voted! call us if you were not</p>
    {/if}
    <p id="ErrorMessage" class="red-text text-darken-4 center-align"></p>
    <form class="col s12">
        <div class="section row">
            <div class="input-field col s12 m12 12 vote-text">
                {$ns.voter->getFirstName()}
                {$ns.voter->getLastName()}
                {$ns.voter->getFatherName()}
                {$ns.voter->getBirthDate()}
                {$ns.area->getRegion()}, {$ns.area->getCommunity()}, {$ns.voter->getAddress()}
            </div>
            <div class="input-field col s12 m12 12 vote-text">
                {$ns.area->getRegion()}, {$ns.area->getCommunity()}, {$ns.area->getAddress()}, {$ns.area->getTerritoryId()}/{$ns.area->getAreaId()}
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone">Telephone</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="">
                <div id="emailError" class="red-text text-darken-4 error-message" style="display:none;">please provide valid email</div>
                <label for="cu_email">Email</label>
            </div>
            <div class="col s12 m6 6">
                <div class="row">                   
                    <div class="col s12 m6 6">
                        <p>
                            <input type="checkbox" id="cu_will_be_in_armenia" checked="checked" />
                            <label for="cu_will_be_in_armenia">I will be in Armenia at 6th </label>	
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s6 m8 8 offset-m2">
                        <i class="f_vote_btn vote-btn yes fa fa-square-o left" data-ans='1'>
                            <i class="fa fa-check"></i>
                        </i>
                        <i class="f_vote_btn vote-btn no fa fa-square-o right" data-ans='0'>
                            <i class="fa fa-close"></i>
                        </i>
                        <!-- <div class="f_vote_btn yes vote-btn left" data-ans='1'>
                            Yes
                        </div> -->
                        <!-- <div class="f_vote_btn no vote-btn right" data-ans='0'>
                            No
                        </div> -->
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