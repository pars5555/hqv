<?php /* Smarty version 3.1.27, created on 2015-11-20 09:27:01
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\area_selection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20272564ed955d2e1d5_51121694%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89247926cf902757dcabbf4f60363f3641084ab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\area_selection.tpl',
      1 => 1448007876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20272564ed955d2e1d5_51121694',
  'variables' => 
  array (
    'ns' => 0,
    'region' => 0,
    'regionCommunity' => 0,
    'rowid' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ed955d40af1_81074101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ed955d40af1_81074101')) {
function content_564ed955d40af1_81074101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20272564ed955d2e1d5_51121694';
?>
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
        </div><?php }
}
?>