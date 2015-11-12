<?php /* Smarty version 3.1.27, created on 2015-11-12 15:20:04
         compiled from "D:\xampp\htdocs\hqv\templates\main\current_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:312025644a0149e9913_44074530%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d845e2abf9ef1dcca359ccb19e0be7a9e5185e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\current_user.tpl',
      1 => 1447337977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312025644a0149e9913_44074530',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5644a014a022d0_12640647',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5644a014a022d0_12640647')) {
function content_5644a014a022d0_12640647 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '312025644a0149e9913_44074530';
?>
<h4>Edit User</h4>
<form class="col s12">
	<div class="section row">
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
					Off
					<input type="checkbox">
					<span class="lever"></span>
					On
				</label>
			</div>
	    </div>
	</div>
	<div class="section row">
	    <div class="input-field col s12">
			<i class="material-icons prefix">mode_edit</i>
			<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			<label for="icon_prefix2">First Name</label>
	    </div>
	</div>
</form><?php }
}
?>