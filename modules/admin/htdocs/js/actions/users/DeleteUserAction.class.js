NGS.createAction("admin.actions.users.delete_user", {
	onError : function(params) {
		$("#errBox").html(params.msg);
		$("#errBox").show();
 },
  afterAction : function() {
  	NGS.load("admin.loads.users.user_list", this.getParams());
  }
});