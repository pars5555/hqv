<?php /* Smarty version 3.1.27, created on 2015-11-29 14:11:21
         compiled from "D:\xampp\htdocs\hqv\templates\main\search_result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7801565acf49f39fd3_57035959%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545e272bd7e6e85e91528d45e494f9315c51387c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\search_result.tpl',
      1 => 1448621523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7801565acf49f39fd3_57035959',
  'variables' => 
  array (
    'ns' => 0,
    'voter' => 0,
    'area' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565acf4a06c4f2_55821594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565acf4a06c4f2_55821594')) {
function content_565acf4a06c4f2_55821594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7801565acf49f39fd3_57035959';
?>
<div>
	<?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['voters'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['voter'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['voter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['voter']->value) {
$_smarty_tpl->tpl_vars['voter']->_loop = true;
$foreach_voter_Sav = $_smarty_tpl->tpl_vars['voter'];
?>
		<div class="section cur-user f_current_user" data-hash="<?php echo $_smarty_tpl->tpl_vars['voter']->value->getHash();?>
">
			<h5><?php echo $_smarty_tpl->tpl_vars['voter']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['voter']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['voter']->value->getFatherName();?>
</h5>
			<?php $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable($_smarty_tpl->tpl_vars['ns']->value['areas'][$_smarty_tpl->tpl_vars['voter']->value->getAreaId()], null, 0);?>
                        <p><?php echo $_smarty_tpl->tpl_vars['area']->value->getRegion();?>
, <?php echo $_smarty_tpl->tpl_vars['area']->value->getCommunity();?>
, <?php echo $_smarty_tpl->tpl_vars['voter']->value->getAddress();?>
</p>
		</div>
		<div class="divider"></div>
	<?php
$_smarty_tpl->tpl_vars['voter'] = $foreach_voter_Sav;
}
?>
	<?php if (count($_smarty_tpl->tpl_vars['ns']->value['voters']) == 0) {?>
		<h5 class="center-align"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(45);?>
</h5>
	<?php }?>
    <input type="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['ns']->value['voters']);?>
" id="searchResultCount"/>
    
</div>
<?php }
}
?>