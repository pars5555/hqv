<?php /* Smarty version 3.1.27, created on 2015-11-20 09:26:52
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29976564ed94c3fdd01_06476774%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75d8012a692c90c0dcbc50dee7205b960ffe3cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\index.tpl',
      1 => 1448007876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29976564ed94c3fdd01_06476774',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ed94c401376_29250380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ed94c401376_29250380')) {
function content_564ed94c401376_29250380 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '29976564ed94c3fdd01_06476774';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row" id='dashboardStatisticsContainer'>
        <?php echo smarty_function_nest(array('ns'=>'statistics'),$_smarty_tpl);?>

    </div>
    <div class="row" id='dashboardAreaSelectionContainer'>
        <?php echo smarty_function_nest(array('ns'=>'area'),$_smarty_tpl);?>

    </div>
    <div class="row" id='dashboardAreaStatisticsContainer'>
    </div>
</div><?php }
}
?>