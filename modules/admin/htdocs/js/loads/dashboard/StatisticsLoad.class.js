NGS.createLoad("admin.loads.dashboard.statistics", {
    getContainer: function () {
        return "dashboardStatisticsContainer";
    },
    onError: function (params) {
    },
    afterLoad: function (params) {
        this.initAreaSelection(params);
        
        var dashboradPassportChartData = google.visualization.arrayToDataTable([
            ['', 'Ընդհանուր', 'Խախտում'],
            ['Քվե', parseInt(params.passportTotal), parseInt(params.passportFake)]
        ]);
        NGS.dashboradPassportChart.draw(dashboradPassportChartData, NGS.dashboradChartOptions);
        
        var dashboradNumberChartData = google.visualization.arrayToDataTable([
            ['', 'Ընդհանուր', 'Խախտում'],
            ['Քվե', parseInt(params.numberTotal), parseInt(params.numberFake)]
        ]);
        NGS.dashboradNumberChart.draw(dashboradNumberChartData, NGS.dashboradChartOptions);
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
