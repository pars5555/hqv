NGS.createAction("ngsadmin.actions.users.delete_user", {
	onError : function(params) {
		$("#errBox").html(params.msg);
		$("#errBox").show();
 },
  afterAction : function() {
  	NGS.load("ngsadmin.loads.users.user_list", this.getParams());
  }
});