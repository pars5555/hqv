<?php /* Smarty version 3.1.27, created on 2015-11-27 15:06:50
         compiled from "D:\xampp\htdocs\hqv\templates\main\about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:313175658394aa98434_97593219%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591a45e90934fe4da832e784c598616eb8bff56f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\about.tpl',
      1 => 1448621523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313175658394aa98434_97593219',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5658394aab7ad7_82454669',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5658394aab7ad7_82454669')) {
function content_5658394aab7ad7_82454669 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '313175658394aa98434_97593219';
?>
<div class="container">
	<h4><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(19);?>
</h4>
	<div class="section ">
        <p class="text-justify">
            <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(35);?>

        </p>
	</div>
</div><?php }
}
?>