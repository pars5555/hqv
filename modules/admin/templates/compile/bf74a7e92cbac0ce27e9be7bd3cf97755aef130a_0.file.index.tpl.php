<?php /* Smarty version 3.1.27, created on 2015-11-24 21:32:55
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passanalyze\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14375654c977a5fb37_07433887%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf74a7e92cbac0ce27e9be7bd3cf97755aef130a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passanalyze\\index.tpl',
      1 => 1448397145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14375654c977a5fb37_07433887',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654c977a7e4d0_95549738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654c977a7e4d0_95549738')) {
function content_5654c977a7e4d0_95549738 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '14375654c977a5fb37_07433887';
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