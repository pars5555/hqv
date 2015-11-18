NGS.createLoad("admin.loads.dashboard.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_dashboard_li').addClass('active');
        
    }
});
