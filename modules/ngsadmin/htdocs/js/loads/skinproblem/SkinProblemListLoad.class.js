NGS.createLoad("ngsadmin.loads.skinproblem.skin_problem_list", {

	getContainer : function() {
		return "f_tbody";
	},

	afterLoad : function() {
		$("#f_tbody .f_edit_item").click(function(evt){
			var params = this.getParams();
			params.itemId = $(evt.target).attr("data-ngs-item-id");
			NGS.load("ngsadmin.loads.skinproblem.edit_skin_problem", params);
		}.bind(this));
	}
});
