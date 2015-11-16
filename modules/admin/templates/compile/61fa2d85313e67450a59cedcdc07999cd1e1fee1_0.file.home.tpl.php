<?php /* Smarty version 3.1.27, created on 2015-11-16 11:58:36
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:232695649b6dc611527_33606048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fa2d85313e67450a59cedcdc07999cd1e1fee1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\home.tpl',
      1 => 1447671515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232695649b6dc611527_33606048',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5649b6dc63a712_81430296',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5649b6dc63a712_81430296')) {
function content_5649b6dc63a712_81430296 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '232695649b6dc611527_33606048';
?>
<div class="breadscrumb">
	<nav class="red darken-3" style="padding-left:10px;">
		<div class="nav-wrapper">
			<div class="col s12">
				<a href="#!" class="breadcrumb">Admin</a>
				<a href="#!" class="breadcrumb">Profile</a>
			</div>
		</div>
	</nav>
</div>
<div class="admin-content">
	<div class="row">
		<div class=" col s12 m6 6">
			<table class="responsive-table">
		        <thead>
		          <tr>
		              <th data-field="id">Name</th>
		              <th data-field="name">Item Name</th>
		              <th data-field="price">Item Price</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>Alvin</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		          </tr>
		          <tr>
		            <td>Alan</td>
		            <td>Jellybean</td>
		            <td>$3.76</td>
		          </tr>
		          <tr>
		            <td>Jonathan</td>
		            <td>Lollipop</td>
		            <td>$7.00</td>
		          </tr>
		        </tbody>
	      </table>
		</div>
		<div class="col s12 m6 6">
			<div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s6">
			          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
			          <label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" type="text" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
			          <label for="disabled">Disabled</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			    </form>
			  </div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6 6">
			 <form action="#">
			    <p>
			      <input name="group1" type="radio" id="test1" />
			      <label for="test1">Red</label>
			    </p>
			    <p>
			      <input name="group1" type="radio" id="test2" />
			      <label for="test2">Yellow</label>
			    </p>
			    <p>
			      <input class="with-gap" name="group1" type="radio" id="test3"  />
			      <label for="test3">Green</label>
			    </p>
			      <p>
			        <input name="group1" type="radio" id="test4" disabled="disabled" />
			        <label for="test4">Brown</label>
			    </p>
			  </form>
		</div>
		<div class="col s12 m6 6">
			<form action="#">
			    <p>
			      <input type="checkbox" id="test5" />
			      <label for="test5">Red</label>
			    </p>
			    <p>
			      <input type="checkbox" id="test6" checked="checked" />
			      <label for="test6">Yellow</label>
			    </p>
			    <p>
			      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
			      <label for="filled-in-box">Filled in</label>
			    </p>
			    <p>
			      <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
			      <label for="test7">Green</label>
			    </p>
			      <p>
			        <input type="checkbox" id="test8" disabled="disabled" />
			        <label for="test8">Brown</label>
			    </p>
			  </form>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6 6">
			<div class="switch">
			    <label>
			      Off
			      <input type="checkbox">
			      <span class="lever"></span>
			      On
			    </label>
		  	</div>
		  	<table class="bordered">
		        <thead>
		          <tr>
		              <th data-field="id">Name</th>
		              <th data-field="name">Item Name</th>
		              <th data-field="price">Item Price</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>Alvin</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		          </tr>
		          <tr>
		            <td>Alan</td>
		            <td>Jellybean</td>
		            <td>$3.76</td>
		          </tr>
		          <tr>
		            <td>Jonathan</td>
		            <td>Lollipop</td>
		            <td>$7.00</td>
		          </tr>
		        </tbody>
		      </table>
		</div>
		<div class="col s12 m6 6">
			<table class='striped'>
		        <thead>
		          <tr>
		              <th data-field="id">Name</th>
		              <th data-field="name">Item Name</th>
		              <th data-field="price">Item Price</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>Alvin</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		          </tr>
		          <tr>
		            <td>Alan</td>
		            <td>Jellybean</td>
		            <td>$3.76</td>
		          </tr>
		          <tr>
		            <td>Jonathan</td>
		            <td>Lollipop</td>
		            <td>$7.00</td>
		          </tr>
		        </tbody>
		      </table>
		      
		</div>
	</div>
</div><?php }
}
?>