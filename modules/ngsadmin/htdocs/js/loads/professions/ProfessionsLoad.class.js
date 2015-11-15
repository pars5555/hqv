NGS.createLoad("ngsadmin.loads.professions.professions", {

	getContainer : function() {
		return "content";
	},

	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.professions.professions_list");
	}
});
