{if isset($ns.voter)}
    {if !empty($ns.voter_data)}
        <p class="center-align red-text text-darken-4">{$ns.lm->getPhrase(30)}</p>
    {/if}
    <div class="row center-align hide" id="emergencyContainer">
        <p class="red-text text-darken-4 center-align">
            {$ns.lm->getPhrase(48)}
        </p>
        <div class="col s12 m12 l6 offset-l3">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix red-text">phone</i>
                    <input type="text" id="emergencyPhoneNumber"/>
                    <label for="emergencyPhoneNumber">{$ns.lm->getPhrase(27)}</label>
                </div>
                <div class="col s12 m12 l12">
                    <a href="javascript:void(0);" class="btn grey ligten-3" id="emergencyPhoneNumberSubmitBtn">{$ns.lm->getPhrase(49)}</a>
                </div>
            </div>
        </div>
    </div>
    <form class="col s12">
        <div class="row">
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
            <div class="input-field col s12 m12 l6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone">{$ns.lm->getPhrase(27)}</label>
            </div>
            <div class="input-field col s12 m12 l6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="">
                <div id="emailError" class="red-text text-darken-4 error-message" style="display:none;">{$ns.lm->getPhrase(28)}</div>
                <label for="cu_email">{$ns.lm->getPhrase(28)}</label>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s12 m12 l12 ">
                        <h5 class="center-align">{$ns.lm->getPhrase(37)}</h5>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12 center-align">
                            <a href="javascript:void(0);" class="choose-btn" id="death_checkbox" data-to='deathAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="red-text text-darken-4">This person in death</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="1" data-to='inArmAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text">{$ns.lm->getPhrase(38)}</span>
                            </a>
                        </div>
                        <div class="col s12 m6 l6 center-align" >
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="0" data-to='inArmAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text">{$ns.lm->getPhrase(39)}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row" id="willVoteAnswerContainer">
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="1" data-to='willVoteAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text">{$ns.lm->getPhrase(40)}</span>
                            </a>
                        </div>
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="0" data-to='willVoteAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text">{$ns.lm->getPhrase(41)}</span>
                            </a>
                        </div>
                    </div>
                    <input type="hidden" id="inArmAnswer"/>
                    <input type="hidden" id="willVoteAnswer" />
                    <input type="hidden" id="deathAnswer" />
                </div>
            </div>
        </div>
        <input type="hidden" id="voterHash" value="{$ns.voter->getHash()}"/>
    </form>
{else}
    <h4>Wrong Voter Data!<h4>
        {/if}