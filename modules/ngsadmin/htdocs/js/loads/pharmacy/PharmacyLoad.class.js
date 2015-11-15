NGS.createLoad("ngsadmin.loads.pharmacy.pharmacy", {

	getContainer : function() {
		return "content";
	},

	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.pharmacy.pharmacy_list");
	}
});
