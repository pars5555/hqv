<?php /* Smarty version 3.1.27, created on 2015-11-15 10:23:29
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:89456484f11f0c9f9_08259912%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1447579404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89456484f11f0c9f9_08259912',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56484f11f37ab9_78731354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56484f11f37ab9_78731354')) {
function content_56484f11f37ab9_78731354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89456484f11f0c9f9_08259912';
if (isset($_smarty_tpl->tpl_vars['ns']->value['voter'])) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['ns']->value['voter_data'])) {?>
        <p class="center-align red-text text-darken-4">You have already voted! call us if you were not</p>
    <?php }?>
    <form class="col s12">
        <div class="section row">
            <div class="input-field col s12 m12 12 vote-text">
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFirstName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getLastName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFatherName();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getBirthDate();?>

                <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getAddress();?>

            </div>
            <div class="input-field col s12 m12 12 vote-text">
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getAddress();?>

            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">phone</i>
                <input id="cu_telephone" type="text" class="validate">
                <label for="cu_telephone">Telephone</label>
            </div>
            <div class="input-field col s12 m6 6">
                <i class="material-icons prefix">mailbox</i>
                <input id="cu_email" type="text" class="validate">
                <label for="cu_email">Email</label>
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
                    <div class="col s6 m8 8 offset-m2">
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
        <input type="hidden" id="voterHash" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getHash();?>
"/>
    </form>
<?php } else { ?>
    <h4>Wrong Voter Data!<h4>
<?php }
}
}
?>