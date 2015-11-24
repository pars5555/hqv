<?php /* Smarty version 3.1.27, created on 2015-11-24 17:42:51
         compiled from "D:\xampp\htdocs\hqv\templates\main\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3545654938b6df2e7_36446965%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9ab4187ffc16273c27ef682f5cd70a2bc9347' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\contact.tpl',
      1 => 1447574210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3545654938b6df2e7_36446965',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654938b7a6fc3_09295843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654938b7a6fc3_09295843')) {
function content_5654938b7a6fc3_09295843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3545654938b6df2e7_36446965';
?>
<div class="container">
	<h4>Contact us</h4>
	<div class="row">
		<form class="col s12">
		  <div class="row">
		    <div class="input-field col s6">
		      <input id="first_name" type="text" class="validate">
		      <label for="first_name">First Name</label>
		    </div>
		    <div class="input-field col s6">
		      <input id="last_name" type="text" class="validate">
		      <label for="last_name">Last Name</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="email" type="email" class="validate">
		      <label for="email">Email</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <textarea id="textarea1" class="materialize-textarea"></textarea>
		      <label for="textarea1">Textarea</label>
		    </div>
		  </div>
		</form>
	</div>	
</div><?php }
}
?>