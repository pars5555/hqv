<div class="container">
	<h4>{$ns.lm->getPhrase(18)}</h4>
	<div class="row">
		<form class="col s12">
		  <div class="row">
		    <div class="input-field col s6">
		      <input id="first_name" type="text" class="validate">
		      <label for="first_name">{$ns.lm->getPhrase(8)}</label>
		    </div>
		    <div class="input-field col s6">
		      <input id="last_name" type="text" class="validate">
		      <label for="last_name">{$ns.lm->getPhrase(9)}</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="email" type="email" class="validate">
		      <label for="email">{$ns.lm->getPhrase(22)}</label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <textarea id="textarea1" class="materialize-textarea"></textarea>
		      <label for="textarea1">{$ns.lm->getPhrase(46)}</label>
		    </div>
		  </div>
		  <div class="row">
		  	<button class="btn col blue darken-4 s12 m12 12">
		  		{$ns.lm->getPhrase(10)}
		  	</button>
		  </div>
		</form>
	</div>	
</div>