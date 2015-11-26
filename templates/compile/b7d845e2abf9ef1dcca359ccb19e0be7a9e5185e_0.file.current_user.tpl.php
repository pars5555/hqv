<?php /* Smarty version 3.1.27, created on 2015-11-26 11:21:26
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:685656dd26c66968_53418408%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1448533278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685656dd26c66968_53418408',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5656dd26ca8326_29083716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656dd26ca8326_29083716')) {
function content_5656dd26ca8326_29083716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '685656dd26c66968_53418408';
if (isset($_smarty_tpl->tpl_vars['ns']->value['voter'])) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['ns']->value['voter_data'])) {?>
        <p class="center-align red-text text-darken-4"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(30);?>
</p>
    <?php }?>
    <p id="ErrorMessage" class="red-text text-darken-4 center-align"></p>
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
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(27);?>
</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="">
                <div id="emailError" class="red-text text-darken-4 error-message" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(28);?>
</div>
                <label for="cu_email"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(28);?>
</label>
            </div>
            <div class="col s12 m12 12 hide">
                <div class="row">                   
                    <div class="col s12 m12 12">
                        <p>
                            <input type="checkbox" id="cu_will_be_in_armenia" checked="checked" />
                            <label for="cu_will_be_in_armenia"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(29);?>
</label>	
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 12">
                <div class="row">
                    <div class="col s12 m12 l12 ">
                        <h5 class="center-align"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(37);?>
</h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="1" data-to='voteAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(38);?>
</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align" >
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="vote" data-ans="0" data-to='voteAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(39);?>
</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="1" data-to='appearAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(39);?>
</span>
                        </a>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <a href="javascript:void(0);" class="f_choose_btn choose-btn" data-group="appear" data-ans="0" data-to='appearAnswer'>
                            <i class="hide fa fa-check green-text"></i>
                            <span class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(40);?>
</span>
                        </a>
                    </div>
                    <input type="hidden" id="voteAnswer" value="" />
                    <input type="hidden" id="appearAnswer" value="" />
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
        <input type="hidden" id="voterHash" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getHash();?>
"/>
    </form>
<?php } else { ?>
    <h4>Wrong Voter Data!<h4>
        <?php }
}
}
?>