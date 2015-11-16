NGS.createAction("admin.actions.skintype.edit_skin_type", {
	onError : function(params) {
		$("#descErrBox").html(params.msg);
		$("#descErrBox").show();
 },
  afterAction : function() {
  }
});