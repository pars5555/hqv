NGS.createLoad("admin.loads.index", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        for (var i=0;i<50;i++){ 
            history.pushState(null, null, '/');
        }
        $('.sidebar').click(function () {
            var loadName = $(this).data('loadname');
            NGS.load('admin.loads.' + loadName, {});
        });
        jQuery('#hamburgerMenuBtn').sideNav();
        $(".button-collapse").sideNav();
    }
});
