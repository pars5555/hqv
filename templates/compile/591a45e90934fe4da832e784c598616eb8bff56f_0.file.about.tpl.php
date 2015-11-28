<?php /* Smarty version 3.1.27, created on 2015-11-28 18:39:43
         compiled from "D:\xampp\htdocs\hqv\templates\main\about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102195659bcaff11bd7_07937678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591a45e90934fe4da832e784c598616eb8bff56f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\about.tpl',
      1 => 1448721580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102195659bcaff11bd7_07937678',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5659bcaff359e9_03689053',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5659bcaff359e9_03689053')) {
function content_5659bcaff359e9_03689053 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102195659bcaff11bd7_07937678';
?>
<div class="container">
	<h4 class="search-header"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(19);?>
</h4>
	<div class="section ">
        <p class="text-justify">
            <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(35);?>

        </p>
	</div>
</div><?php }
}
?>