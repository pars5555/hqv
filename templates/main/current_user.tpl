<h4>Message</h4>
<p class="center-align red-text text-darken-4">Warning Message</p>
<form class="col s12">
	<div class="section row">
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="firstName" value="test first name" type="tel" class="validate">
			<label class="active" for="firstName">First Name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="lastName" value="test last name" type="tel" class="validate">
			<label class="active" for="lastName">Last Name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">account_circle</i>
			<input disabled  id="father1" value="test Father name" type="tel" class="validate">
			<label class="active" for="father1">Father name</label>
		</div>
		<div class="input-field col s12 m4 4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input disabled  id="Birthday" value="Birthday" type="tel" class="validate">
			<label class="active" for="Birthday">Birthday</label>
		</div>
		<div class="input-field col s12 m8 8">
			<i class="material-icons prefix">mode_edit</i>
			<input disabled  id="Address1" value="Address" type="tel" class="validate">
			<label class="active" for="Address1">Address</label>
	    </div>
	    <div class="input-field col s12 m12 12">
			<input disabled  id="Address2" value="Address" type="tel" class="validate">
			<label class="active" for="Address2">Address</label>
	    </div>
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
	    	<div class="row">
	    		<div class="col s12 m6 6">
	    			<p>
						<input type="checkbox" id="test1" checked="checked" />
						<label for="test1">Notify me by email</label>	
			    	</p>
	    		</div>
	    		<div class="col s12 m6 6">
		    		<p>
						<input type="checkbox" id="test2" checked="checked" />
						<label for="test2">I will be in Armenia at 6th</label>	
			    	</p>
	    		</div>
	    	</div>
	    </div>
	    <div class="col s12 m12 12">
		    <div class="row">
			    <div class="col s6 m6 6 offset-m3">
					<h4 class="center-align">I will vote</h4>
					<!-- <p class="hide">
				      <input name="vote-group" type="radio" id="yesRadioBtn" />
				      <label for="radioTest1">Yes</label>
				    </p>
				    <p class="hide">
				      <input name="vote-group" type="radio" id="noRadioBtn" />
				      <label for="radioTest2">No</label>
				    </p> -->
				    <div class="f_vote_btn yes vote-btn left" data-ans='yes'>
				    	Yes
				    </div>
				    <div class="f_vote_btn no vote-btn right" data-ans='no'>
				    	No
				    </div>
					<input id="voteAnswer" name="" type="hidden" />
				    <div class="clearfix"></div>
			    </div>
		    </div>
	    </div>
	</div>
	<div class="section row">
	    <!-- <div class="input-field col s12">
			<i class="material-icons prefix">mode_edit</i>
			<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			<label for="icon_prefix2">Address</label>
	    </div> -->
	</div>
</form>