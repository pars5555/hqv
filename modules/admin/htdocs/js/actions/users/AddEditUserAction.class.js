NGS.createAction("admin.actions.users.add_edit_user", {
	onError : function(params) {
		$("#errBox").html(params.msg);
		$("#errBox").show();
 },
  afterAction : function() {
  }
});