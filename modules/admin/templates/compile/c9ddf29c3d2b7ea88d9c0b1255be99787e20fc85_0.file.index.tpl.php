<?php /* Smarty version 3.1.27, created on 2015-11-22 22:17:47
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\numanalyze\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14854565230fb351c27_58386555%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ddf29c3d2b7ea88d9c0b1255be99787e20fc85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\numanalyze\\index.tpl',
      1 => 1448226937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14854565230fb351c27_58386555',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565230fb36ea05_07539299',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565230fb36ea05_07539299')) {
function content_565230fb36ea05_07539299 ($_smarty_tpl) {
if (!is_callable('smarty_function_nest')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.nest.php';

$_smarty_tpl->properties['nocache_hash'] = '14854565230fb351c27_58386555';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Numbers Analyze</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row" id="duplicatedVoterContainer">
        
    </div>
    <div class="row">
        <div class="col s12 m12 12" id='numanalyzeTableContainer'>
            <?php echo smarty_function_nest(array('ns'=>'list'),$_smarty_tpl);?>

        </div>
        
    </div>
</div><?php }
}
?>