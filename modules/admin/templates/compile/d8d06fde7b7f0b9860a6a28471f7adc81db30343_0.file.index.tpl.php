<?php /* Smarty version 3.1.27, created on 2015-11-15 12:20:04
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\main\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:442456486a64c8e4a8_31341335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d06fde7b7f0b9860a6a28471f7adc81db30343' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\main\\index.tpl',
      1 => 1447586323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442456486a64c8e4a8_31341335',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56486a64dd28b8_87465136',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56486a64dd28b8_87465136')) {
function content_56486a64dd28b8_87465136 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '442456486a64c8e4a8_31341335';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <?php echo $_smarty_tpl->getSubTemplate ("./util/header_control.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </head>
    <body>
        <div id="ajaxLoader"></div>

        <header class="header">
            <?php echo $_smarty_tpl->getSubTemplate ("./util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </header>
        <section class="wrapper">
            <div class="content" id="indexRightContent">
                <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>

            </div>
        </section>
        <footer class="footer">
            <?php echo $_smarty_tpl->getSubTemplate ("./util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </footer>
    </body>
</html>
<?php }
}
?>