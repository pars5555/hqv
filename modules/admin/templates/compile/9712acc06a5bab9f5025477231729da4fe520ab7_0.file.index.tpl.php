<?php /* Smarty version 3.1.27, created on 2015-11-19 07:39:07
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\voters\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27130564d6e8b57d724_94482341%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9712acc06a5bab9f5025477231729da4fe520ab7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\voters\\index.tpl',
      1 => 1447915145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27130564d6e8b57d724_94482341',
  'variables' => 
  array (
    'ns' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564d6e8b61c380_60418492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d6e8b61c380_60418492')) {
function content_564d6e8b61c380_60418492 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '27130564d6e8b57d724_94482341';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Profile</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row">
        <div class="row">
            unique voters : <?php echo $_smarty_tpl->tpl_vars['ns']->value['countGroupByVoter'];?>
<br>
            unique Participants : <?php echo $_smarty_tpl->tpl_vars['ns']->value['nonParticipantCounts'];?>
<br>
            unique Non Participants  : <?php echo $_smarty_tpl->tpl_vars['ns']->value['participantCounts'];?>
<br>
            
            <div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="First Name" type="text" id="firstName"/>
        <label class="active" for="firstName">First Name</label>
    </div>  
    <div class="input-field col s12 m4 4">
        <input placeholder="Last Name" type="text" id="lastName" />
        <label class="active" for="lastName">Last Name</label>
    </div>
    <div class="input-field col s12 m4 4">
        <input placeholder="Father Name" type="text" id="fatherName" />
        <label class="active" for="fatherName">Father Name</label>
    </div>
</div>
            <div class="row">
                <div class="col s4 m4 4">
                    <label for="birthYear">Year</label>
                    <select id="birthYear" class="browser-default">
                        <option value="0">Select</option>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2000+1 - (1890) : 1890-(2000)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1890, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="col s4 m4 4">
                    <label for="birthMonth">Month</label>
                    <select id="birthMonth" class="browser-default">
                        <option value="0">Select</option>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="col s4 m4 4">
                    <label for="birthDay">day</label>
                    <select id="birthDay" class="browser-default">
                        <option value="0">Select</option>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }} ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col s12 m12 12" id='realVotersTableContainer'>
            <?php echo smarty_function_nest(array('ns'=>'list'),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }
}
?>