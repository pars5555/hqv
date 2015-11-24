<?php /* Smarty version 3.1.27, created on 2015-11-24 21:31:46
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\number\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:239945654c9325b8bf2_31408896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa118bf0ba3d0deb0749fb0d9fa1884f71feca9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\number\\index.tpl',
      1 => 1448397084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239945654c9325b8bf2_31408896',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654c9325db2d6_15133967',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654c9325db2d6_15133967')) {
function content_5654c9325db2d6_15133967 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '239945654c9325b8bf2_31408896';
?>
<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
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