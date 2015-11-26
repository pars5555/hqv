<div class="parallax-container valign-wrapper">
		<div class="no-pad-bot row center valign">
			<div class="col s12">
		      	<h1 class="header center white-text text-lighten-2">{$ns.lm->getPhrase(2)}</h1>
		      	<h5 class="header light white-text">{$ns.lm->getPhrase(3)}</h5>
		      	<h5 class="header light white-text">{$ns.lm->getPhrase(4)}</h5>
		      	<h5 class="header light white-text">{$ns.lm->getPhrase(5)}</h5>
			</div>
			<div class="col s12 hide">
				<a href="#searchDashboard" class="btn">
		          	Get Started 
	          	</a>
			</div>
	    </div>
	<div class="parallax">
		<img src="{$SITE_PATH}/img/bg_img_3.png">
	</div>
</div>
<div id="searchDashboard" class="section white scrollspy">
	<div class="row container">
        <div class="col s12 center-align">
            <p>{$ns.lm->getPhrase(42)}</p>
        </div>
		<div class="col s12 center-align">
			<h2 class="header">{$ns.lm->getPhrase(6)}</h2>
			<p class="grey-text text-darken-3 lighten-3">
				{$ns.lm->getPhrase(7)}
			</p>
		</div>
		<div class="col s12">
			<div class="row">
				<form class="col s12">
			      <div class="row">
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="firstName" type="text" class="keyboard">
			          <label for="firstName">{$ns.lm->getPhrase(8)}</label>
			        </div>
			        <div class="input-field col s12 m6 6">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="lastName" type="tel" class="keyboard">
			          <label for="lastName">{$ns.lm->getPhrase(9)}</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
						<i class="material-icons prefix">perm_contact_calendar</i>
						<input placeholder="{$ns.lm->getPhrase(11)}" id="birthDate" type="date" class="datepicker">
			      	</div>
			      </div>
			      <div class="row">
		      		<button id="searchVoters" class="btn waves-effect waves-light col s12">
		      			{$ns.lm->getPhrase(10)}
				    </button>
			      </div>
			    </form>
			</div>
		</div>
		<div class="col s12">
			
		</div>
	</div>
</div>
<h3 class="header col s12 light black-text center-align">{$ns.lm->getPhrase(12)}</h3>
<div class="section row container">
	<div class="col s12 m3 3 center">
        <a href="http://www.asparez.am/" target="_blank">
			<img width="150" src="{$SITE_PATH}/img/asparez_logo.jpg" />
			<p class="black-text">{$ns.lm->getPhrase(13)}</p>
		</a>
	</div>
	<div class="col s12 m3 3 center">
		<a href="http://transparency.am/" target="_blank">
			<img width="150" src="{$SITE_PATH}/img/tr.jpg" />
			<p class="black-text">{$ns.lm->getPhrase(14)}</p>
		</a>
	</div>
	<div class="col s12 m3 3 center">
		<a href="http://hcav.am/" target="_blank">
			<img width="150" src="{$SITE_PATH}/img/hcav.png" />
			<p class="black-text">{$ns.lm->getPhrase(15)}</p>
		</a>
	</div>
	<div class="col s12 m3 3 center">
		<a href="http://ela.am/" target="_blank">
			<img width="150" src="{$SITE_PATH}/img/logo_ela.png" />
			<p class="black-text">{$ns.lm->getPhrase(16)}</p>
		</a>
	</div>
</div>
<div id="searchResultModal" class="modal current-user-modal modal-fixed-footer">
	<div class="modal-header">
		<h4 class="modal-title-abs center-align">
			{$ns.lm->getPhrase(36)}
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
		<a id="currentUserModalBtn" href="#!" class="btn disabled">{$ns.lm->getPhrase(10)}</a>
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
		<a  href="#!" class="modal-action modal-close btn">{$ns.lm->getPhrase(10)}</a>
	</div>
</div>




