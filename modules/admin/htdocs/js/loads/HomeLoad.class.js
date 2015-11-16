NGS.createLoad("admin.loads.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        alert('admin home');
    }
});
