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
        
        $('#passport_total_voters_count').html(params.passportTotal);
        $('#number_total_voters_count').html(params.numberTotal);
        
        for (var i=0;i<params.allTerritoryIds.length;i++)
        {
            $('#dashboardPassportTerritoryVotersCountContainer_'+params.allTerritoryIds[i]).html(params.passportTotalVotersCountByTerritoryId['t'+params.allTerritoryIds[i]]);
        }
        //dashboardPassportTerritoryVotersCountContainer
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
