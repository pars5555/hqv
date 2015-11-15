NGS.createLoad("ngsadmin.loads.orderhistory.order_history", {
    getContainer: function () {
        return "content";
    },
    afterLoad: function () {
        $("#f_orderingBox").ilyovSorting("ngsadmin.loads.orderhistory.order_history_list");

        $('#exportOrderHistory').on('click', function () {
            var sortingInfo = $("#f_orderingBox").ilyovSorting.getSortingParams();
            $('#ordering').val(sortingInfo.ordering);
            $('#sorting').val(sortingInfo.sorting);
            jQuery("#csvExportOrderHistory").trigger('submit');
        });

        $("#searchBtn").click(function () {
            var sortingInfo = $("#f_orderingBox").ilyovSorting.getSortingParams();
            sortingInfo.search_key = $("#searchText").val();
            sortingInfo.search_type = $("#searchFieldSelect").val();
            NGS.load("ngsadmin.loads.users.user_list", sortingInfo);
        });
        $(".f_datepicker").datepicker({
            dateFormat: 'yy/mm/dd'
        });
        $("#filterPlusBtn").click(function () {
            var filterType = $("#searchFieldSelect").val();
            $("#" + filterType).show();
            $("#" + filterType).find("input, select").prop('disabled', false);
        });
        $(".f_filterMinusBtn").click(function () {
            $(this).closest(".f_filterInputBox").hide();
            $(this).closest(".f_filterInputBox").find("input, select").prop('disabled', true);
        });
        $("#filterForm").submit(function (evt) {
            evt.preventDefault();
            console.log(($("#filterForm").serializeObject()));
            var params = JSON.stringify($("#filterForm").serializeObject());
            NGS.load("ngsadmin.loads.orderhistory.order_history_list", {'filter': params});
            return false;
        }.bind(this));
    }
});
