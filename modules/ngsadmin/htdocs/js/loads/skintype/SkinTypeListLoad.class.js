NGS.createLoad("ngsadmin.loads.skintype.skin_type_list", {

	getContainer : function() {
		return "f_tbody";
	},

	afterLoad : function() {
		$("#f_tbody .f_edit_item").click(function(evt){
			var params = this.getParams();
			params.itemId = $(evt.target).attr("data-ngs-item-id");
			NGS.load("ngsadmin.loads.skintype.edit_skin_type", params);
		}.bind(this));
	}
});
