<?php /* Smarty version 3.1.27, created on 2015-11-12 14:21:41
         compiled from "D:\xampp\htdocs\hqv\templates\main\search_result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2949156449265980131_13561849%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545e272bd7e6e85e91528d45e494f9315c51387c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\search_result.tpl',
      1 => 1447334454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2949156449265980131_13561849',
  'variables' => 
  array (
    'ns' => 0,
    'voter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56449265a73899_46044406',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56449265a73899_46044406')) {
function content_56449265a73899_46044406 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2949156449265980131_13561849';
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
	<div class="section f_current_user">
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
}
}
?>