<?php /* Smarty version 3.1.27, created on 2015-11-22 16:04:33
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passanalyze\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103395651d9813776c5_60192361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf74a7e92cbac0ce27e9be7bd3cf97755aef130a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passanalyze\\index.tpl',
      1 => 1448204556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103395651d9813776c5_60192361',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651d9813971a3_64050822',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651d9813971a3_64050822')) {
function content_5651d9813971a3_64050822 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '103395651d9813776c5_60192361';
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
    <div class="row" id="duplicatedVoterContainer">
        
    </div>
    <div class="row">
        <div class="col s12 m12 12" id='passanalyzeTableContainer'>
            <?php echo smarty_function_nest(array('ns'=>'list'),$_smarty_tpl);?>

        </div>
        
    </div>
</div><?php }
}
?>