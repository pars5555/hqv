<?php /* Smarty version 3.1.27, created on 2015-11-14 11:01:19
         compiled from "D:\xampp\htdocs\hqv\templates\main\search_result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51695647066fa1d3d1_18466517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545e272bd7e6e85e91528d45e494f9315c51387c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\search_result.tpl',
      1 => 1447495265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51695647066fa1d3d1_18466517',
  'variables' => 
  array (
    'ns' => 0,
    'voter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5647066fa42185_58746619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5647066fa42185_58746619')) {
function content_5647066fa42185_58746619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '51695647066fa1d3d1_18466517';
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
		<div class="section cur-user f_current_user">
			<h5><?php echo $_smarty_tpl->tpl_vars['voter']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['voter']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['voter']->value->getFatherName();?>
</h5>
			<p><?php echo $_smarty_tpl->tpl_vars['voter']->value->getAddress();?>
</p>
		</div>
		<div class="divider"></div>
	<?php
$_smarty_tpl->tpl_vars['voter'] = $foreach_voter_Sav;
}
?>
	<?php if (count($_smarty_tpl->tpl_vars['ns']->value['voters']) == 0) {?>
		<h5 class="center-align">No users</h5>
	<?php }?>
</div>
<?php }
}
?>