NGS.createLoad("admin.loads.dashboard.statistics", {
    getContainer: function () {
        return "dashboardStatisticsContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initAreaSelection();
    },
    initAreaSelection: function () {
        if (NGS.dashboardStatisticsTimoutId) {
            clearTimeout(NGS.dashboardStatisticsTimoutId);
        }
        NGS.dashboardStatisticsTimoutId = setTimeout(function () {
            if ($('#sidebar_dashboard_li').hasClass('active')) {
                NGS.load('admin.loads.dashboard.statistics', {});
            }
        }, 5000);
    }
});
