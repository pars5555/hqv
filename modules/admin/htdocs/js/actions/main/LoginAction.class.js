NGS.createAction("admin.actions.main.login", {
	onError : function(params) {
		$("#errBox").html(params.msg);
		$("#errBox").show();
 },
  afterAction : function() {
		window.location.href="users";
  }
});