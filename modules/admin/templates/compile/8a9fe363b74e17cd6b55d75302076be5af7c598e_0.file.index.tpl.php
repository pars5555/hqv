<?php /* Smarty version 3.1.27, created on 2015-11-15 14:20:36
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28716564886a4d79964_65726646%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9fe363b74e17cd6b55d75302076be5af7c598e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\index.tpl',
      1 => 1447582664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28716564886a4d79964_65726646',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564886a4dff560_33692063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564886a4dff560_33692063')) {
function content_564886a4dff560_33692063 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '28716564886a4d79964_65726646';
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