<?php /* Smarty version 3.1.27, created on 2015-11-17 08:02:52
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26121564ad11c34ecd0_41464256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9fe363b74e17cd6b55d75302076be5af7c598e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\index.tpl',
      1 => 1447743763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26121564ad11c34ecd0_41464256',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ad11c3a3f09_62867662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ad11c3a3f09_62867662')) {
function content_564ad11c3a3f09_62867662 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '26121564ad11c34ecd0_41464256';
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
            <?php if ($_smarty_tpl->tpl_vars['ns']->value['userId'] > 0) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("./util/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php }?>
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