<?php /* Smarty version 3.1.27, created on 2015-11-27 16:33:26
         compiled from "D:\xampp\htdocs\hqv\templates\main\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:641956584d962a93f6_16805212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5453d8b4442e6d5beb34c809368d9cb2e372f1f5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\home.tpl',
      1 => 1448627601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641956584d962a93f6_16805212',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56584d962e4fb6_09693206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56584d962e4fb6_09693206')) {
function content_56584d962e4fb6_09693206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '641956584d962a93f6_16805212';
?>
<div class="parallax-container valign-wrapper">
		<div class="no-pad-bot row center valign">
			<div class="col s12">
		      	<h1 class="header center white-text text-lighten-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(2);?>
</h1>
		      	<h5 class="header light white-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(3);?>
</h5>
		      	<h5 class="header light white-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(4);?>
</h5>
		      	<h5 class="header light white-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(5);?>
</h5>
			</div>
			<div class="col s12 hide">
				<a href="#searchDashboard" class="btn">
		          	Get Started 
	          	</a>
			</div>
	    </div>
	<div class="parallax">
		<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/bg_img_3.png">
	</div>
</div>
<div id="searchDashboard" class="section white scrollspy">
	<div class="row container">
        <div class="col s12 center-align">
            <p><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(42);?>
</p>
        </div>
		<div class="col s12 center-align">
			<h2 class="header"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(6);?>
</h2>
			<p class="grey-text text-darken-3 lighten-3">
				<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(7);?>

			</p>
		</div>
		<div class="col s12">
			<div class="row">
				<form class="col s12">
			      <div class="row">
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="firstName" type="text" class="keyboard">
			          <label for="firstName"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(8);?>
</label>
			        </div>
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="lastName" type="tel" class="keyboard">
			          <label for="lastName"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(9);?>
</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
						<i class="material-icons prefix">perm_contact_calendar</i>
						<input placeholder="<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(11);?>
" id="birthDate" type="date" class="datepicker">
			      	</div>
			      </div>
			      <div class="row">
		      		<button id="searchVoters" class="btn waves-effect waves-light blue darken-4 col s12">
		      			<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(10);?>

				    </button>
			      </div>
			    </form>
			</div>
		</div>
		<div class="col s12">
			
		</div>
	</div>
</div>
<h3 class="header col s12 light black-text center-align"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(12);?>
</h3>
<div class="section row container">
	<div class="col s12 m3 3 center">
        <a href="http://www.asparez.am/" target="_blank">
			<img width="150" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/asparez_logo.jpg" />
			<p class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(13);?>
</p>
		</a>
	</div>
	<div class="col s12 m3 3 center">
		<a href="http://transparency.am/" target="_blank">
			<img width="220" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/tr.jpg" />
			<p class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(14);?>
</p>
		</a>
	</div>
    <div class="col s12 m3 3 center">
		<a href="http://ela.am/" target="_blank">
			<img width="150" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/logo_ela.jpg" />
			<p class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(16);?>
</p>
		</a>
	</div>
	<div class="col s12 m3 3 center">
		<a href="http://hcav.am/" target="_blank">
			<img width="150" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/hcav.png" />
			<p class="black-text"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(15);?>
</p>
		</a>
	</div>
</div>
<div id="searchResultModal" class="modal current-user-modal modal-fixed-footer">
	<div class="modal-header">
		<h4 class="modal-title-abs center-align">
			<span id="selectYouHeaderText1"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(36);?>
</span>
			<span id="selectYouHeaderText2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(47);?>
</span>
		</h4>
		<i class="fa fa-times close-btn modal-action modal-close"></i>
	</div>
	<div id="" class="modal-content row">
		<div id="searchLoader" class="center-align hidden" style="display:none;">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-red-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="searchResultWrapper" class="search-result-wrapper" style="display:none;">
			<div id="searchResult" class="search-result-collection">
	      	</div>
		</div>
	</div>
</div>
<div id="currentUserModal" class="modal current-user-modal modal-fixed-footer">
	<div class="modal-header">
		<i class="fa fa-times close-btn modal-action modal-close"></i>
	</div>
	<div id="currentUser" class="modal-content row">
	</div>
	<div class="modal-footer">
		<a id="currentUserModalBtn" href="#!" class="btn blue darken-4 disabled"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(10);?>
</a>
	</div>
</div>
<div id="thankModal" class="modal thankyou-modal current-user-modal modal-fixed-footer">
	<div class="modal-header">
		<i class="fa fa-times close-btn modal-action modal-close"></i>
	</div>
	<div class="modal-content row">
		<div id="thankyouLoader" class="center-align hidden" style="display:none;">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-red-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="thankYouContainer">
			
		</div>
	</div>
	<div class="modal-footer">
	</div>
</div>




<?php }
}
?>