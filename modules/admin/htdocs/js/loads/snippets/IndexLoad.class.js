NGS.createLoad("admin.loads.snippets.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
        
    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_snippets_li').addClass('active');
        
    }
});
