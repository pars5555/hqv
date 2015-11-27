<?php /* Smarty version 3.1.27, created on 2015-11-28 00:25:44
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116805658bc4844d4f7_12102464%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1448655934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116805658bc4844d4f7_12102464',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5658bc484932c7_08012639',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5658bc484932c7_08012639')) {
function content_5658bc484932c7_08012639 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116805658bc4844d4f7_12102464';
if (isset($_smarty_tpl->tpl_vars['ns']->value['voter'])) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['ns']->value['voter_data'])) {?>
        <p class="center-align red-text text-darken-4"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(30);?>
</p>
    <?php }?>
    <div class="row center-align hide" id="emergencyContainer">
        <p class="red-text text-darken-4 center-align">
            <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(48);?>

        </p>
        <div class="col s12 m12 l6 offset-l3">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix red-text">phone</i>
                    <input type="text" id="emergencyPhoneNumber"/>
                    <label for="emergencyPhoneNumber"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(27);?>
</label>
                </div>
                <div class="col s12 m12 l12">
                    <a href="javascript:void(0);" class="btn grey ligten-3" id="emergencyPhoneNumberSubmitBtn"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(49);?>
</a>
                </div>
            </div>
        </div>
    </div>
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12 m12 12 vote-text">
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFirstName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getLastName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFatherName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getBirthDate();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getRegion();?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getCommunity();?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getAddress();?>

            </div>
            <div class="input-field col s12 m12 12 vote-text">
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getRegion();?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getCommunity();?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getAddress();?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getTerritoryId();?>
/<?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getAreaId();?>

            </div>
            <div class="input-field col s12 m12 l6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(27);?>
</label>
            </div>
            <div class="input-field col s12 m12 l6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="">
                <div id="emailError" class="red-text text-darken-4 error-message" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(28);?>
</div>
                <label for="cu_email"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(28);?>
</label>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s12 m12 l12 ">
                        <h5 class="center-align"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(37);?>
</h5>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="1" data-to='inArmAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(38);?>
</span>
                            </a>
                        </div>
                        <div class="col s12 m6 l6 center-align" >
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="0" data-to='inArmAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(39);?>
</span>
                            </a>
                        </div>
                    </div>
                    <div class="row" id="willVoteAnswerContainer">
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="1" data-to='willVoteAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(40);?>
</span>
                            </a>
                        </div>
                        <div class="col s12 m6 l6 center-align">
                            <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="0" data-to='willVoteAnswer'>
                                <i class="hide fa fa-check green-text"></i>
                                <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(41);?>
</span>
                            </a>
                        </div>
                    </div>
                    <input type="hidden" id="inArmAnswer"/>
                    <input type="hidden" id="willVoteAnswer" />
                </div>
            </div>
        </div>
        <input type="hidden" id="voterHash" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getHash();?>
"/>
    </form>
<?php } else { ?>
    <h4>Wrong Voter Data!<h4>
        <?php }
}
}
?>