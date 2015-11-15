NGS.createLoad("ngsadmin.loads.users.user", {
	getContainer : function() {
		return "content";
	},
	getPermalink : function() {
		return "users";
	},
	afterLoad : function() {
		$("#f_orderingBox").ilyovSorting("ngsadmin.loads.users.user_list");
		$("#content .f_add_item").click( function(evt) {
			NGS.load("ngsadmin.loads.users.add_edit_user", {});
		}.bind(this));

		$("#searchBtn").click(function() {
			var sortingInfo = $("#f_orderingBox").ilyovSorting.getSortingParams();
			sortingInfo.search_key = $("#searchText").val();
			sortingInfo.search_type = $("#searchFieldSelect").val();
			NGS.load("ngsadmin.loads.users.user_list", sortingInfo);
		});

		$(".f_datepicker").datepicker({
			dateFormat : 'yy/mm/dd'
		});
		$("#filterPlusBtn").click(function() {
			var filterType = $("#searchFieldSelect").val();
			$("#" + filterType).show();
			$("#" + filterType).find("input, select").prop('disabled', false);
		});
		$(".f_filterMinusBtn").click(function() {
			$(this).closest(".f_filterInputBox").hide();
			$(this).closest(".f_filterInputBox").find("input, select").prop('disabled', true);
		});
		$("#filterForm").submit( function(evt) {
                    evt.preventDefault();
			console.log(($("#filterForm").serializeObject()));
                        var params = JSON.stringify($("#filterForm").serializeObject());
			NGS.load("ngsadmin.loads.users.user_list",{'filter':params});
			return false;
		}.bind(this));
		$('#exportUsers').on('click', function() {
			var sortingInfo = $("#f_orderingBox").ilyovSorting.getSortingParams();
			$('#ordering').val(sortingInfo.ordering);
			$('#sorting').val(sortingInfo.sorting);
			$("#exportFilter").val(JSON.stringify($("#filterForm").serializeObject()));
			jQuery("#csvExportUsers").trigger('submit');
		});
	}
});
