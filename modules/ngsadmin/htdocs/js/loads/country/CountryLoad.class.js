NGS.createLoad("ngsadmin.loads.country.country", {

	getContainer : function() {
		return "content";
	},

	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.country.country_list");
               
	}
});
