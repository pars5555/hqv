NGS.createLoad("ngsadmin.loads.login", {

	getContainer : function() {
		return "initialLoad";
	},

	afterLoad : function() {
		$("#loginForm").submit(function() {
			$("#errBox").hide();
			var status = $(this).imFormValidator({
				showError : function(inputElem) {
					$(inputElem).addClass("invalid");
				},
				hideError : function(inputElem) {
					$(inputElem).removeClass("invalid");
				}
			});
			if (!status) {
				return false;
			}
			var params = $(this).serializeObject();
			NGS.action("ngsadmin.actions.main.login", params);
			return false;
		});
	}
});
