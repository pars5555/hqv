NGS.createLoad("admin.loads.passanalyze.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_passanalyze_li').addClass('active');
      
    }
});
