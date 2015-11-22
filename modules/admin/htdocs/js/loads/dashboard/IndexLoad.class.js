NGS.createLoad("admin.loads.dashboard.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_dashboard_li').addClass('active');
        this.initChart();

    },
    initChart: function () {
        NGS.dashboradPassportChart = new google.visualization.ColumnChart(document.getElementById('passport_chart'));
        NGS.dashboradNumberChart = new google.visualization.ColumnChart(document.getElementById('number_chart'));
        NGS.dashboradChartOptions = {
            legend: {
                position: 'none'
            },
            sliceVisibilityThreshold: 0,
            vAxis: {
                minValue: 0
            },
            animation: {
                duration: 1000,
                easing: 'out'
            }
        };
    }
});
