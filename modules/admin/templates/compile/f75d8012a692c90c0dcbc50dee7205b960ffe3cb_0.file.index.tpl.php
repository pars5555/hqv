<?php /* Smarty version 3.1.27, created on 2015-11-22 22:17:39
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30955565230f3934cf3_59358989%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75d8012a692c90c0dcbc50dee7205b960ffe3cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\index.tpl',
      1 => 1448226937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30955565230f3934cf3_59358989',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565230f3a90237_88879296',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565230f3a90237_88879296')) {
function content_565230f3a90237_88879296 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '30955565230f3934cf3_59358989';
?>
 
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['bar','corechart']}]}"><?php echo '</script'; ?>
>
 
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
            <span class='hamburger-btn'>
                <i data-activates="slide-out" id="hamburgerMenuBtn" class="material-icons hamburger-btn">reorder</i>
            </span>
        </div>
    </nav>
</div>
<div class="row">
    <div class="col s12">
        <div class="row">
            <div class='col s12 m6 l3'>
                Passport Chart
                <div id="passport_chart" style="width: 200px; height: 300px;"></div>
            </div>
            <div class='col s12 m6 l3'>
                Number Chart
                <div id="number_chart" style="width: 200px; height: 300px;"></div>
            </div>
            <div class='col s12 m6 l3'>
            </div>
            <div class='col s12 m6 l3'>
            </div>
        </div>
    </div>
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