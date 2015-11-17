NGS.createLoad("admin.loads.passport.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
        console.log(params);
    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_passport_li').addClass('active');
    }
});
