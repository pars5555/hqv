<?php /* Smarty version 3.1.27, created on 2015-11-12 14:03:05
         compiled from "D:\xampp\htdocs\hqv\templates\main\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1100656448e09f3df27_28643388%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5453d8b4442e6d5beb34c809368d9cb2e372f1f5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\home.tpl',
      1 => 1447166111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1100656448e09f3df27_28643388',
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56448e0a283684_86244730',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56448e0a283684_86244730')) {
function content_56448e0a283684_86244730 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1100656448e09f3df27_28643388';
?>
<div class="parallax-container valign-wrapper">
		<div class="no-pad-bot row center valign">
			<div class="col s12">
		      	<h1 class="header center white-text text-lighten-2">Website</h1>
		      	<h5 class="header light white-text">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</h5>
			</div>
			<div class="col s12">
				<a href="#searchDashboard" class="btn">
		          	Get Started
		          </a>
			</div>
	    </div>
	<div class="parallax">
		<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/parallax1.jpg">
	</div>
</div>
<div id="searchDashboard" class="section white scrollspy">
	<div class="row container">
		<div class="col s12 center-align">
			<h2 class="header">Search</h2>
			<p class="grey-text text-darken-3 lighten-3">
				Fill in the form text Fill in the form text Fill in the form text Fill in the form text
				Fill in the form text Fill in the form text Fill in the form text Fill in the form text
			</p>
		</div>
		<div class="col s12">
			<div class="row">
				<form class="col s12">
			      <div class="row">
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="firstName" type="text" class="keyboard">
			          <label for="firstName">First Name</label>
			        </div>
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="lastName" type="tel" class="keyboard">
			          <label for="lastName">Last Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
						<i class="material-icons prefix">perm_contact_calendar</i>
						<input placeholder="Birthday" id="birthDate" type="date" class="datepicker">
			      	</div>
			      </div>
			      <div class="row">
		      		<button id="searchVoters" class="btn waves-effect waves-light col s12">
		      			Submit
				    </button>
			      </div>
			    </form>
			</div>
		</div>
		<div class="col s12">
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
				<div class="row">
					<button id="searchVoters" class="btn waves-effect waves-light col s12">
						Show more
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot row center">
      	<h3 class="header col s12 light white-text">Who we are ?</h3>
      	<p class="white-text">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
    </div>
	<div class="parallax">
		<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/parallax2.jpg">
	</div>
</div>
<div class="section row container">
    <div class="col s12 m4 4">
      <div class="center promo promo-example">
        <i class="material-icons large">flash_on</i>
        <p class="promo-caption">Speeds up development</p>
        <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
      </div>
    </div>
    <div class="col s12 m4 4">
      <div class="center promo promo-example">
        <i class="material-icons large">group</i>
        <p class="promo-caption">User Experience Focused</p>
        <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
      </div>
    </div>
    <div class="col s12 m4 4">
      <div class="center promo promo-example">
        <i class="material-icons large">settings</i>
        <p class="promo-caption">Easy to work with</p>
        <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
      </div>
    </div>
</div>
<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot row center">
      	<h3 class="header col s12 light white-text">Articles</h3>
      	<p class="white-text">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
    </div>
	<div class="parallax">
		<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/parallax1.jpg">
	</div>
</div>
<div class="section row container">
	<div class="col s12 m6 6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="img/office.jpg">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
				<p><a href="#">This is a link</a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				<p>Here is some more information about this product that is only revealed once clicked on.</p>
			</div>
		</div>
	</div>
	<div class="col s12 m6 6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="img/office.jpg">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
				<p><a href="#">This is a link</a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				<p>Here is some more information about this product that is only revealed once clicked on.</p>
			</div>
		</div>
	</div>
	<div class="col s12 m6 6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="img/office.jpg">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
				<p><a href="#">This is a link</a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				<p>Here is some more information about this product that is only revealed once clicked on.</p>
			</div>
		</div>
	</div>
	<div class="col s12 m6 6">
		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="img/office.jpg">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
				<p><a href="#">This is a link</a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				<p>Here is some more information about this product that is only revealed once clicked on.</p>
			</div>
		</div>
	</div>
</div>
<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot row center">
      	<h3 class="header col s12 light white-text">Our Parters</h3>
      	<p class="white-text">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
    </div>
	<div class="parallax">
		<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/parallax2.jpg">
	</div>
</div>
<div class="section row container">
	<div class="col s12 m3 3 center">
		<img src="" />
		<p>Partner name</p>
	</div>
	<div class="col s12 m3 3 center">
		<img src="" />
		<p>Partner name</p>
	</div>
	<div class="col s12 m3 3 center">
		<img src="" />
		<p>Partner name</p>
	</div>
	<div class="col s12 m3 3 center">
		<img src="" />
		<p>Partner name</p>
	</div>
</div><?php }
}
?>