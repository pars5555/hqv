<?php /* Smarty version 3.1.27, created on 2015-11-17 18:31:18
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31837564b646623d747_39862771%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd8a8ed679e7f89e2f28c6686a46d00875b9303' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\index.tpl',
      1 => 1447780955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31837564b646623d747_39862771',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b64662e37d1_59863986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b64662e37d1_59863986')) {
function content_564b64662e37d1_59863986 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '31837564b646623d747_39862771';
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
            <form id="addRealVoterForm" autocomplete="off">
                <div class="row" id='addRealVoterRegionSelectionContainer'>
                    <?php echo smarty_function_nest(array('ns'=>'region'),$_smarty_tpl);?>

                </div>
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