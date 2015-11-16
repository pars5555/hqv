<?php /* Smarty version 3.1.27, created on 2015-11-16 10:23:20
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:288635649a088d0f894_42392014%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9fe363b74e17cd6b55d75302076be5af7c598e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\index.tpl',
      1 => 1447665790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288635649a088d0f894_42392014',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5649a088d331e8_47872158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5649a088d331e8_47872158')) {
function content_5649a088d331e8_47872158 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '288635649a088d0f894_42392014';
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
                <?php echo $_smarty_tpl->getSubTemplate ("./util/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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