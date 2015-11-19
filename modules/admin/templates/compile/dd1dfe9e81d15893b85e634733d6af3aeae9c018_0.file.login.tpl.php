<?php /* Smarty version 3.1.27, created on 2015-11-19 07:47:13
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10318564d70719e08b7_19987168%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1dfe9e81d15893b85e634733d6af3aeae9c018' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\login.tpl',
      1 => 1447743763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10318564d70719e08b7_19987168',
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564d7071a26b24_85890362',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d7071a26b24_85890362')) {
function content_564d7071a26b24_85890362 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10318564d70719e08b7_19987168';
?>
<div class="container">
	<div class="section row">
		<div class="col s12 m6 6 offset-m3">
			<h5>Admin Login</h5>
			<form action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/login/do_login" method="POST" autocomplete="off">
				<div class="input-field col s12">
					<input id="userName" type="text" name="username"/>
					<label for="userName">Username</label>
			    </div>
			    <div class="input-field col s12">
			    	<input id="password" type="password" name="password"/>
					<label for="password">Password</label>
			    </div>
			    <div class="center-align">
					<button class="btn waves-effect waves-light" type="submit" value="login">Login
						<i class="material-icons right">send</i>
					</button>
			    </div>
			</form>
		</div>
	</div>
</div><?php }
}
?>