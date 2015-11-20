NGS.createLoad("admin.loads.index", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('.sidebar').click(function () {
            var loadName = $(this).data('loadname');
            NGS.load('admin.loads.' + loadName, {});
        });
        jQuery('#hamburgerMenuBtn').sideNav();
        $(".button-collapse").sideNav();
    }
});
