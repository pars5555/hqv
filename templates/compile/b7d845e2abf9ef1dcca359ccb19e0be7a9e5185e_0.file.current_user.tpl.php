<?php /* Smarty version 3.1.27, created on 2015-11-13 10:05:07
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:273465645a7c3233812_86989876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1447405497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273465645a7c3233812_86989876',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5645a7c324ce00_00417215',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5645a7c324ce00_00417215')) {
function content_5645a7c324ce00_00417215 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '273465645a7c3233812_86989876';
?>
<h4>Message</h4>
<p class="center-align red-text text-darken-4">Warning Message</p>
<form class="col s12">
	<div class="section row">
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="firstName" value="test first name" type="tel" class="validate">
			<label class="active" for="firstName">First Name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="lastName" value="test last name" type="tel" class="validate">
			<label class="active" for="lastName">Last Name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="father1" value="test Father name" type="tel" class="validate">
			<label class="active" for="father1">Father name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input disabled  id="Birthday" value="Birthday" type="tel" class="validate">
			<label class="active" for="Birthday">Birthday</label>
		</div>
		<div class="input-field col s12 m8 8">
			<i class="material-icons prefix">mode_edit</i>
			<input disabled  id="Address1" value="Address" type="tel" class="validate">
			<label class="active" for="Address1">Address</label>
	    </div>
	    <div class="input-field col s12 m12 12">
			<input disabled  id="Address2" value="Address" type="tel" class="validate">
			<label class="active" for="Address2">Address</label>
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
				<p>
			      <input name="group1" type="radio" id="radioTest1" />
			      <label for="radioTest1">Red</label>
			    </p>
			    <p>
			      <input name="group1" type="radio" id="radioTest2" />
			      <label for="radioTest2">Yellow</label>
			    </p>
			    <p>
			      <input name="group1" type="radio" id="radioTest3" />
			      <label for="radioTest3">Yellow</label>
			    </p>
			</div>
	    </div>
	</div>
	<div class="section row">
	    <!-- <div class="input-field col s12">
			<i class="material-icons prefix">mode_edit</i>
			<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			<label for="icon_prefix2">Address</label>
	    </div> -->
	</div>
</form><?php }
}
?>