<h4>Edit User</h4>
<form class="col s12">
	<div class="section row">
		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">phone</i>
			<input id="icon_telephone" type="tel" class="validate">
			<label for="icon_telephone">Telephone</label>
		</div>
		<div class="input-field col s12 m6 6">
			<i class="material-icons prefix">mailbox</i>
			<input id="email" type="email" class="validate">
			<label for="email" data-error="wrong" data-success="right">Email</label>
	    </div>
	    <div class="col s12 m6 6">
	    	<p>
				<input type="checkbox" id="test1" checked="checked" />
				<label for="test1">Notify me by email</label>	
	    	</p>
	    	<p>
				<input type="checkbox" id="test2" checked="checked" />
				<label for="test2">I will be in Armenia at 6th</label>	
	    	</p>
			
	    </div>

	    <div class="col s12 m6 6">
	    	<div class="switch">
				<p>I will vote</p>
				<label>
					Off
					<input type="checkbox">
					<span class="lever"></span>
					On
				</label>
			</div>
	    </div>
	</div>
	<div class="section row">
	    <div class="input-field col s12">
			<i class="material-icons prefix">mode_edit</i>
			<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			<label for="icon_prefix2">First Name</label>
	    </div>
	</div>
</form>