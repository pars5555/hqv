NGS.createLoad("ngsadmin.loads.skintype.skin_type", {

	getContainer : function() {
		return "content";
	},

	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.skintype.skin_type_list");
		
	}
});
