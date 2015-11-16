NGS.createLoad("admin.loads.main.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        alert('admin home');
    }
});
