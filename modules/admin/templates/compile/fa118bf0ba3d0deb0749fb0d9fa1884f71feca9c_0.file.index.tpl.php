<?php /* Smarty version 3.1.27, created on 2015-11-20 09:27:03
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\number\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25807564ed957ad5207_87902828%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa118bf0ba3d0deb0749fb0d9fa1884f71feca9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\number\\index.tpl',
      1 => 1448007876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25807564ed957ad5207_87902828',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ed957af7440_94588258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ed957af7440_94588258')) {
function content_564ed957af7440_94588258 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '25807564ed957ad5207_87902828';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Passport</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row">
        <div class="col s12 m6 6 offset-m3" id="realVoterAddEditForm">
            <form id="addRealVoterNumberForm" autocomplete="off">
                <div class="row" id='addRealVoterAreaSelectionContainer'>
                    <?php echo smarty_function_nest(array('ns'=>'area'),$_smarty_tpl);?>

                </div>
                <div class="row" id='addRealVoterNumberAddEditContainer'>
                    <?php echo smarty_function_nest(array('ns'=>'add_edit'),$_smarty_tpl);?>

                </div>
            </form>
        </div>
        <div class="col s12 m12 12" id='realVotersTableContainer'>
            <?php echo smarty_function_nest(array('ns'=>'list'),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }
}
?>