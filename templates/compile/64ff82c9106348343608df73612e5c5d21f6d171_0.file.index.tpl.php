<?php /* Smarty version 3.1.27, created on 2015-10-30 10:06:47
         compiled from "D:\xampp\htdocs\ngs-framework\templates\main\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:252756333327e01b98_46291175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ff82c9106348343608df73612e5c5d21f6d171' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ngs-framework\\templates\\main\\index.tpl',
      1 => 1432656501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252756333327e01b98_46291175',
  'variables' => 
  array (
    'STATIC_PATH' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56333327e5d294_42120784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56333327e5d294_42120784')) {
function content_56333327e5d294_42120784 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\ngs-framework\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '252756333327e01b98_46291175';
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