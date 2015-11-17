<?php /* Smarty version 3.1.27, created on 2015-11-17 10:12:05
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14501564aef652a1629_85619094%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd8a8ed679e7f89e2f28c6686a46d00875b9303' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\index.tpl',
      1 => 1447751523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14501564aef652a1629_85619094',
  'variables' => 
  array (
    'i' => 0,
    'ns' => 0,
    'region' => 0,
    'regionCommunity' => 0,
    'rowid' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564aef653055c5_69546966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564aef653055c5_69546966')) {
function content_564aef653055c5_69546966 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '14501564aef652a1629_85619094';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Passport</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row">
        <div class="col s12 m6 6">
            <form id='addRealVoterForm' autocomplete="off">
                <div class="row">
                    <div class="input-field col s12 m4 4">
                        <input placeholder="First Name" type="text" id="firstName"/>
                        <label class="active" for="firstName">First Name</label>
                    </div>  
                    <div class="input-field col s12 m4 4">
                        <input placeholder="Last Name" type="text" id="lastName"/>
                        <label class="active" for="lastName">Last Name</label>
                    </div>
                    <div class="input-field col s12 m4 4">
                        <input placeholder="Father Name" type="text" id="fatherName"/>
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
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m2 4">
                        <label for="p_region">Region</label>
                        <select id="p_region" class="browser-default">
                            <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['regions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['region']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
$foreach_region_Sav = $_smarty_tpl->tpl_vars['region'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['region']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ns']->value['selectedRegion'] == $_smarty_tpl->tpl_vars['region']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['region']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['region'] = $foreach_region_Sav;
}
?>
                        </select>
                    </div>
                    <div class="col s12 m3 4">
                        <label for="p_community">Community</label>
                        <select id="p_community" class="browser-default">
                            <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['regionCommunities'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['regionCommunity'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['regionCommunity']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['regionCommunity']->value) {
$_smarty_tpl->tpl_vars['regionCommunity']->_loop = true;
$foreach_regionCommunity_Sav = $_smarty_tpl->tpl_vars['regionCommunity'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['regionCommunity']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ns']->value['selectedRegionCommunity'] == $_smarty_tpl->tpl_vars['regionCommunity']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['regionCommunity']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['regionCommunity'] = $foreach_regionCommunity_Sav;
}
?>
                        </select>
                    </div>
                    <div class="col s12 m7 4">
                        <label for="p_address">Address</label>
                        <select id="p_address" class="browser-default">
                            <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['areas'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['address']->_loop = false;
$_smarty_tpl->tpl_vars['rowid'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['rowid']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
$foreach_address_Sav = $_smarty_tpl->tpl_vars['address'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rowid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ns']->value['selectedAreaId'] == $_smarty_tpl->tpl_vars['rowid']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['address'] = $foreach_address_Sav;
}
?>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <input type="hidden" id="editRowId"/>
                    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
                    <input class="btn col s12 m12 12" type="submit" value="add"/>
                    <a class="btn col s12 m12 12 hide" id="cancelEditButton" href ="javascript:void(0);" >cancel</a>
                </div>
            </form>

        </div>
        <div class="col s12 m6 6" id='realVotersTableContainer'>
            <?php echo smarty_function_nest(array('ns'=>'list'),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }
}
?>