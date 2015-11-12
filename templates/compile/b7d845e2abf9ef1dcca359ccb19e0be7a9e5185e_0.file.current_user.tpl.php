<?php /* Smarty version 3.1.27, created on 2015-11-12 15:34:00
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96665644a358eafe74_95158698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1447338796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96665644a358eafe74_95158698',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5644a358ec95a4_34652899',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5644a358ec95a4_34652899')) {
function content_5644a358ec95a4_34652899 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96665644a358eafe74_95158698';
?>
<h4>Edit User</h4>
<form class="col s12">
	<div class="section row">
		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="icon_telephone" value="test first name" type="tel" class="validate">
			<label class="active" for="icon_telephone">First Name</label>
		</div>
		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="icon_telephone" value="test last name" type="tel" class="validate">
			<label class="active" for="icon_telephone">Last Name</label>
		</div>
		<div class="input-field col s12 m12 12">
			<i class="material-icons prefix">phone</i>
			<input disabled  id="icon_telephone" value="test Birthday" type="tel" class="validate">
			<label class="active" for="icon_telephone">perm_contact_calendar</label>
		</div>


		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">phone</i>
			<input id="icon_telephone" type="tel" class="validate">
			<label for="icon_telephone">Telephone</label>
		</div>
		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">mailbox</i>
			<input id="email" type="email" class="validate">
			<label for="email" data-error="wrong" data-success="right">Email</label>
	    </div>
	    <div class="col s12 m6 6">
	    	<p>
				<input type="checkbox" id="test1" checked="checked" />
				<label for="test1">Notify me by email</label>	
	    	</p>
	    	<p>
				<input type="checkbox" id="test2" checked="checked" />
				<label for="test2">I will be in Armenia at 6th</label>	
	    	</p>
			
	    </div>

	    <div class="col s12 m6 6">
	    	<div class="switch">
				<p>I will vote</p>
				<label>
					No
					<input type="checkbox">
					<span class="lever"></span>
					Yes
				</label>
			</div>
	    </div>
	</div>
	<div class="section row">
	    <div class="input-field col s12">
			<i class="material-icons prefix">mode_edit</i>
			<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			<label for="icon_prefix2">Address</label>
	    </div>
	</div>
</form><?php }
}
?>