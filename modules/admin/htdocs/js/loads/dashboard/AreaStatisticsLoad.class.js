NGS.createLoad("admin.loads.dashboard.area_statistics", {
    getContainer: function () {
        return "dashboardAreaStatisticsContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        if (NGS.dashboardAreaStatisticsTimoutId) {
            clearTimeout(NGS.dashboardAreaStatisticsTimoutId);
        }
        NGS.dashboardAreaStatisticsTimoutId = setTimeout(function () {
            if ($('#sidebar_dashboard_li').hasClass('active')) {
                this.loadStatistics();
            }
        }.bind(this), 5000);
    },
    loadStatistics: function () {
        var areaId = $('#p_address').val();
        if (areaId > 0)
        {
            NGS.load('admin.loads.dashboard.area_statistics', {areaId: areaId});
        }
    }
});
