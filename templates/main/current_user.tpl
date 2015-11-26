{if isset($ns.voter)}
    {if !empty($ns.voter_data)}
        <p class="center-align red-text text-darken-4">{$ns.lm->getPhrase(30)}</p>
    {/if}
    <p id="ErrorMessage" class="red-text text-darken-4 center-align"></p>
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
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone">{$ns.lm->getPhrase(27)}</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="">
                <div id="emailError" class="red-text text-darken-4 error-message" style="display:none;">{$ns.lm->getPhrase(28)}</div>
                <label for="cu_email">{$ns.lm->getPhrase(28)}</label>
            </div>
            <div class="col s12 m12 12 hide">
                <div class="row">                   
                    <div class="col s12 m12 12">
                        <p>
                            <input type="checkbox" id="cu_will_be_in_armenia" checked="checked" />
                            <label for="cu_will_be_in_armenia">{$ns.lm->getPhrase(29)}</label>	
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s12 m12 l12 ">
                        <h5 class="center-align">{$ns.lm->getPhrase(37)}</h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="1" data-to='voteAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text">{$ns.lm->getPhrase(38)}</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align" >
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="0" data-to='voteAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text">{$ns.lm->getPhrase(39)}</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="1" data-to='appearAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text">{$ns.lm->getPhrase(39)}</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="0" data-to='appearAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text">{$ns.lm->getPhrase(40)}</span>
                        </a>
                    </div>
                    <input type="hidden" id="voteAnswer" id="cu_will_vote" value="" />
                    <input type="hidden" id="appearAnswer" id="cu_will_be_in_armenia" value="" />
                </div>
                <div class="row hide">
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