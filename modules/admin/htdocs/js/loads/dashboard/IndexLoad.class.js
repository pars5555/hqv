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
        NGS.dashboradChart = new google.visualization.ColumnChart(document.getElementById('columnchart_material'));
        NGS.dashboradChartOptions = {
            legend: {position: 'none'},
            animation: {
                duration: 1000,
                easing: 'out'
            }
        };
    }
});
