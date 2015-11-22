NGS.createLoad("admin.loads.numanalyze.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_numanalyze_li').addClass('active');
        
    }
});
