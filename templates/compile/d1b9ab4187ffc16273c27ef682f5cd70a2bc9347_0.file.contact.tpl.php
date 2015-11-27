<?php /* Smarty version 3.1.27, created on 2015-11-27 15:06:38
         compiled from "D:\xampp\htdocs\hqv\templates\main\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:160115658393ee73451_12681723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9ab4187ffc16273c27ef682f5cd70a2bc9347' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\contact.tpl',
      1 => 1448621523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160115658393ee73451_12681723',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5658393ee9b0a2_27413410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5658393ee9b0a2_27413410')) {
function content_5658393ee9b0a2_27413410 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '160115658393ee73451_12681723';
?>
<div class="container">
	<h4><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(18);?>
</h4>
	<div class="row">
		<form class="col s12">
		  <div class="row">
		    <div class="input-field col s6">
		      <input id="first_name" type="text" class="validate">
		      <label for="first_name"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(8);?>
</label>
		    </div>
		    <div class="input-field col s6">
		      <input id="last_name" type="text" class="validate">
		      <label for="last_name"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(9);?>
</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="email" type="email" class="validate">
		      <label for="email"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(22);?>
</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <textarea id="textarea1" class="materialize-textarea"></textarea>
		      <label for="textarea1"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(46);?>
</label>
		    </div>
		  </div>
		  <div class="row">
		  	<button class="btn col blue darken-4 s12 m12 12">
		  		<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(10);?>

		  	</button>
		  </div>
		</form>
	</div>	
</div><?php }
}
?>