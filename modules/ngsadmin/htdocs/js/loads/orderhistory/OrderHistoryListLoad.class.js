NGS.createLoad("ngsadmin.loads.orderhistory.order_history_list", {

	getContainer : function() {
		return "f_tbody";
	},

	afterLoad : function() {
		$("#f_tbody .f_edit_item").click(function(evt){
			var params = this.getParams();
			params.itemId = $(evt.target).attr("data-ngs-item-id");
			NGS.load("ngsadmin.loads.orderhistory.edit_order_history", params);
		}.bind(this));
	}
});
