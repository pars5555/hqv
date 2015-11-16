<div class="container">
	<div class="section row">
		<div class="col s12 m6 6 offset-m3">
			<h5>Admin Login</h5>
			<form action="{$SITE_PATH}/dologin" method="POST" autocomplete="off">
				<div class="input-field col s12">
					<input id="userName" type="text" name="username"/>
					<label for="userName">Username</label>
			    </div>
			    <div class="input-field col s12">
			    	<input id="password" type="password" name="password"/>
					<label for="password">Password</label>
			    </div>
			    <div class="center-align">
					<button class="btn waves-effect waves-light" type="submit" value="login">Login
						<i class="material-icons right">send</i>
					</button>
			    </div>
			</form>
		</div>
	</div>
</div>