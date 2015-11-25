<?php /* Smarty version 3.1.27, created on 2015-11-25 13:57:16
         compiled from "D:\xampp\htdocs\hqv\templates\main\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:147495655b02ca55251_59033634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9ab4187ffc16273c27ef682f5cd70a2bc9347' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\contact.tpl',
      1 => 1448456236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147495655b02ca55251_59033634',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5655b02ca748f9_69882980',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5655b02ca748f9_69882980')) {
function content_5655b02ca748f9_69882980 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147495655b02ca55251_59033634';
?>
<div class="container">
	<h4>ԿԱՊ</h4>
	<div class="row">
		<form class="col s12">
		  <div class="row">
		    <div class="input-field col s6">
		      <input id="first_name" type="text" class="validate">
		      <label for="first_name">Անուն</label>
		    </div>
		    <div class="input-field col s6">
		      <input id="last_name" type="text" class="validate">
		      <label for="last_name">Ազգանուն</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="email" type="email" class="validate">
		      <label for="email">էլեկտրոնային փոստի հասցե</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <textarea id="textarea1" class="materialize-textarea"></textarea>
		      <label for="textarea1">Textarea</label>
		    </div>
		  </div>
		  <div class="row">
		  	<button class="btn col s12 m12 12">
		  		contact
		  	</button>
		  </div>
		</form>
	</div>	
</div><?php }
}
?>