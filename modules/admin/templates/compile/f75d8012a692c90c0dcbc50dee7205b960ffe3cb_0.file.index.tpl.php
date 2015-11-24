<?php /* Smarty version 3.1.27, created on 2015-11-24 21:34:17
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:242175654c9c92f3054_85126230%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75d8012a692c90c0dcbc50dee7205b960ffe3cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\index.tpl',
      1 => 1448397256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242175654c9c92f3054_85126230',
  'variables' => 
  array (
    'ns' => 0,
    'territoryId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654c9c93222a7_32118932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654c9c93222a7_32118932')) {
function content_5654c9c93222a7_32118932 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '242175654c9c92f3054_85126230';
?>
 
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['bar','corechart']}]}"><?php echo '</script'; ?>
>
 
<div class="breadscrumb">
    <nav class="grey darken-4" style="padding-left:10px;">
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
                Passport Voters Count: <span id="passport_total_voters_count"></span>
            </div>
            <div class='col s12 m6 l3'>
                Number Chart
                <div id="number_chart" style="width: 200px; height: 300px;"></div>
                Number Voters Count: <span id="number_total_voters_count"></span>
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
</div>
<div class="row">
    <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['allTerritoryIds'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['territoryId'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['territoryId']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['territoryId']->value) {
$_smarty_tpl->tpl_vars['territoryId']->_loop = true;
$foreach_territoryId_Sav = $_smarty_tpl->tpl_vars['territoryId'];
?>
        <div class="col s12"><?php echo $_smarty_tpl->tpl_vars['territoryId']->value;?>
: 
            Passport(<span id='dashboardPassportTerritoryVotersCountContainer_<?php echo $_smarty_tpl->tpl_vars['territoryId']->value;?>
'></span>), 
            Number (<span id='dashboardNumberTerritoryVotersCountContainer_<?php echo $_smarty_tpl->tpl_vars['territoryId']->value;?>
'></span>)</div>
        <?php
$_smarty_tpl->tpl_vars['territoryId'] = $foreach_territoryId_Sav;
}
?>
</div><?php }
}
?>