NGS.createLoad("admin.loads.dashboard.statistics", {
    getContainer: function () {
        return "dashboardStatisticsContainer";
    },
    onError: function (params) {
    },
    afterLoad: function (params) {
        this.initAreaSelection(params);
    },
    initAreaSelection: function (params) {
        var dashboradChartData = google.visualization.arrayToDataTable([
            ['', 'Արդար', 'Խախտում'],
            ['Քվե', params.aaa, params.aaa/2]
        ]);
        NGS.dashboradChart.draw(dashboradChartData, NGS.dashboradChartOptions);
        
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
