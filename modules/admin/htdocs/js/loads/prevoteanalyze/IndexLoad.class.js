NGS.createLoad("admin.loads.prevoteanalyze.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_prevoteanalyze_li').addClass('active');
      
    }
});
