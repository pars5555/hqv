<div class="parallax-container valign-wrapper">
		<div class="no-pad-bot row right valign main-text">
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
        <div class="col s12 left-align">
            <p>{$ns.lm->getPhrase(42)}</p>
        </div>
		<div class="col s12 left-align">
			<h2 class="header search-header">{$ns.lm->getPhrase(6)}</h2>
			<p class="grey-text text-darken-3 lighten-3">
				{$ns.lm->getPhrase(7)}
			</p>
		</div>
		<div class="col s12">
			<div class="row">
				<form class="col s12">
			      <div class="row">
			        <div class="input-field col s12 m4 4">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="firstName" type="text" class="keyboard">
			          <label for="firstName">{$ns.lm->getPhrase(8)}</label>
			        </div>
			        <div class="input-field col s12 m4 4">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="lastName" type="text" class="keyboard">
			          <label for="lastName">{$ns.lm->getPhrase(9)}</label>
			        </div>
			        <div class="input-field col s12 m4 4">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="fatherName" type="text" class="keyboard">
			          <label for="fatherName">{$ns.lm->getPhrase(51)}</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
						<i class="material-icons prefix">perm_contact_calendar</i>
						<input placeholder="{$ns.lm->getPhrase(11)}" id="birthDate" type="date" class="datepicker">
			      	</div>
			      </div>
			      <div class="row">
		      		<button id="searchVoters" class="btn waves-effect waves-light grey ligten-3 col s12">
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
<div class="section blue darken-6">
	<div class="row container">
		<h3 class="header col s12 light white-text left-align search-header">{$ns.lm->getPhrase(12)}</h3>
	</div>
</div>
<div class="section row container valign-wrapper our-team">
	<div class="col s12 m6 l3 center">
        <a href="http://www.asparez.am/" target="_blank">
			<img class="asp-img responsive-img"  src="{$SITE_PATH}/img/asparez_logo.jpg" />
			<!-- <p class="black-text">{$ns.lm->getPhrase(13)}</p> -->
		</a>
	</div>
	<div class="col s12 m6 l3 center">
		<a href="http://transparency.am/" target="_blank">
			<img class="tra-img responsive-img"  src="{$SITE_PATH}/img/tr.jpg" />
			<!-- <p class="black-text">{$ns.lm->getPhrase(14)}</p> -->
		</a>
	</div>
    <div class="col s12 m6 l3 center">
		<a href="http://ela.am/" target="_blank">
			<img class="ela-img responsive-img" src="{$SITE_PATH}/img/logo_ela.jpg" />
			<!-- <p class="black-text">{$ns.lm->getPhrase(16)}</p> -->
		</a>
	</div>
	<div class="col s12 m6 l3 center">
		<a href="http://hcav.am/" target="_blank">
			<img class="hc-img responsive-img"  src="{$SITE_PATH}/img/hcav.png" />
			<!-- <p class="black-text">{$ns.lm->getPhrase(15)}</p> -->
		</a>
	</div>
</div>
<div id="searchResultModal" class="modal current-user-modal modal-fixed-footer">
	<div class="modal-header">
		<h4 class="modal-title-abs center-align">
			<span id="selectYouHeaderText1">{$ns.lm->getPhrase(36)}</span>
			<span id="selectYouHeaderText2">{$ns.lm->getPhrase(47)}</span>
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
	<div class="modal-footer row">
		<a id="currentUserModalBtn" href="#!" class="btn grey ligten-3 col s12 disabled">{$ns.lm->getPhrase(10)}</a>
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




