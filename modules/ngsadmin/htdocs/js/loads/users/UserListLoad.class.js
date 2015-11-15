NGS.createLoad("ngsadmin.loads.users.user_list", {

	getContainer : function() {
		return "f_tbody";
	},

	afterLoad : function(params) {
		$("#f_tbody .f_edit_item").click( function(evt) {

			var params = this.getParams();
			params.itemId = $(evt.target).attr("data-ngs-item-id");
			NGS.load("ngsadmin.loads.users.add_edit_user", params);
		}.bind(this));

		$("#f_tbody .f_delete_item").click( function(evt) {
			var r = confirm("Are you sure you want to delete this user!");
			if (r == true) {
				var params = this.getParams();
				params.itemId = $(evt.target).attr("data-ngs-item-id");
				NGS.action("ngsadmin.actions.users.delete_user", params);
			}
		}.bind(this));
		$("#f_pageingBox").ilyovPaging({
			ajaxBase : true,
			currentPage : this.getArgs().page,
			count : this.getArgs().itemsCount,
			onClick : function(page) {
				var params = this.getParams();
				params.page = page;
				NGS.load("ngsadmin.loads.users.user_list", params);
			}.bind(this),
		}, false);
	}
});
