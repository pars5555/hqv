<?php /* Smarty version 3.1.27, created on 2015-11-20 09:27:01
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\add_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1961564ed955d7cd52_06435357%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d62d193f1b9ebee94d65847499a644fd911b7b6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\add_edit.tpl',
      1 => 1448007876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961564ed955d7cd52_06435357',
  'variables' => 
  array (
    'ns' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ed955d92539_56174272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ed955d92539_56174272')) {
function content_564ed955d92539_56174272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1961564ed955d7cd52_06435357';
?>
<div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="First Name" type="text" id="firstName" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['first_name'];?>
"/>
        <label class="active" for="firstName">First Name</label>
    </div>  
    <div class="input-field col s12 m4 4">
        <input placeholder="Last Name" type="text" id="lastName" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['last_name'];?>
"/>
        <label class="active" for="lastName">Last Name</label>
    </div>
    <div class="input-field col s12 m4 4">
        <input placeholder="Father Name" type="text" id="fatherName" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['father_name'];?>
"/>
        <label class="active" for="fatherName">Father Name</label>
    </div>
</div>
<div class="row">
    <div class="col s12 m4 4">
        <label for="birthYear">Year</label>
        <select id="birthYear" class="browser-default">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2000+1 - (1890) : 1890-(2000)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1890, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ns']->value['birth_year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php }} ?>
        </select>
    </div>
    <div class="col s12 m4 4">
        <label for="birthMonth">Month</label>
        <select id="birthMonth" class="browser-default">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['ns']->value['birth_month'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php }} ?>
        </select>
    </div>
    <div class="col s12 m4 4">
        <label for="birthDay">day</label>
        <select id="birthDay" class="browser-default">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['ns']->value['birth_day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php }} ?>
        </select>
    </div>
</div>

<div class="row">
    <input type="hidden" id="editRowId" value="<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {
echo $_smarty_tpl->tpl_vars['ns']->value['row_id'];
}?>"/>
    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
    <input class="btn col s12 m12 12" type="submit" value="<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {?>Save<?php } else { ?>Add<?php }?>"/>
</div>
<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {?>
    <div class="row">
        <a class="btn col s12 m12 12" id="cancelEditButton" href ="javascript:void(0);" >Cancel</a>
    </div>
<?php }
}
}
?>