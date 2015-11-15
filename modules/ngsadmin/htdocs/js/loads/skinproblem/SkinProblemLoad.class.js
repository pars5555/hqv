NGS.createLoad("ngsadmin.loads.skinproblem.skin_problem", {

	getContainer : function() {
		return "content";
	},

	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.skinproblem.skin_problem_list");
		
	}
});
