<?php /* Smarty version 3.1.27, created on 2015-11-10 08:55:18
         compiled from "D:\xampp\htdocs\hqv\templates\main\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184575641a2e6898b82_30030212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5453d8b4442e6d5beb34c809368d9cb2e372f1f5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\home.tpl',
      1 => 1447141884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184575641a2e6898b82_30030212',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5641a2e68c24c4_44078992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5641a2e68c24c4_44078992')) {
function content_5641a2e68c24c4_44078992 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184575641a2e6898b82_30030212';
?>
<input type="text" id='firstName' class="keyboard">
<input type="text" id='lastName' class="keyboard">
<input type="text" id="birthDate" style="border: 1px solid gray">
<button id="searchVoters">search</button>
<div id="searchResult">
    
</div><?php }
}
?>