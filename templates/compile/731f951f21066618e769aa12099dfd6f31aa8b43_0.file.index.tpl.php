<?php /* Smarty version 3.1.23, created on 2015-07-19 17:16:50
         compiled from "D:/xampp/htdocs/ngs-framework/templates/main/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2600455abbf629a87a8_22887388%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731f951f21066618e769aa12099dfd6f31aa8b43' => 
    array (
      0 => 'D:/xampp/htdocs/ngs-framework/templates/main/index.tpl',
      1 => 1432656501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2600455abbf629a87a8_22887388',
  'variables' => 
  array (
    'STATIC_PATH' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55abbf629de625_29645667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55abbf629de625_29645667')) {
function content_55abbf629de625_29645667 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:/xampp/htdocs/ngs-framework/classes/lib/smarty/plugins/function.nest.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2600455abbf629a87a8_22887388';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['STATIC_PATH']->value;?>
/css/out/styles.css?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
" />
		<title>NGS Home</title>
	</head>
	<body>

		<section id="main" class="content">
			<header>
				<div class="welcome">
					<h1>Welcome to NGS Framework</h1>
				</div>
			</header>
		</section>
		<section class="content">
      <?php echo smarty_function_nest(array('ns'=>'nested_home'),$_smarty_tpl);?>

    </section>
	</body>
</html>
<?php }
}
?>