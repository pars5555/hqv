NGS.createAction("admin.actions.skinproblem.edit_skin_problem", {
	onError : function(params) {
		$("#descErrBox").html(params.msg);
		$("#descErrBox").show();
 },
  afterAction : function() {
  }
});