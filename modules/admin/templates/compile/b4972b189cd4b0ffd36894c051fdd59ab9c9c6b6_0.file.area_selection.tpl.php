<?php /* Smarty version 3.1.27, created on 2015-11-22 15:12:51
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\area_selection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203025651cd63523984_68535139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4972b189cd4b0ffd36894c051fdd59ab9c9c6b6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\area_selection.tpl',
      1 => 1448041893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203025651cd63523984_68535139',
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
  'unifunc' => 'content_5651cd635c09f9_95384161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651cd635c09f9_95384161')) {
function content_5651cd635c09f9_95384161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203025651cd63523984_68535139';
?>
<div class="row">
    <div class="col s8">
        <div class="row">
            <div class="col s12 m3 4">
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
            <div class="col s12 m6 6">
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
    </div>
</div><?php }
}
?>