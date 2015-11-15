NGS.createLoad("ngsadmin.loads.users.upload_user_list", {
	getContainer : function() {
		return "f_tbody";
	},

	afterLoad : function() {
		$("#usersTable").show();
		$("#exportUsers").show();
	}
});
