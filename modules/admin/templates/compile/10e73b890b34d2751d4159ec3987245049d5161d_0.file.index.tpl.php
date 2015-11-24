<?php /* Smarty version 3.1.27, created on 2015-11-24 21:32:54
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\prevote\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:318605654c976b6fd14_27252063%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e73b890b34d2751d4159ec3987245049d5161d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\prevote\\index.tpl',
      1 => 1448397155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318605654c976b6fd14_27252063',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654c976b93db5_85433045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654c976b93db5_85433045')) {
function content_5654c976b93db5_85433045 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '318605654c976b6fd14_27252063';
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
            <form id="addRealVoterForm" autocomplete="off">
                <div class="row" id='addRealVoterAddEditContainer'>
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