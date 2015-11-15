NGS.createLoad("admin.loads.main.index", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
       alert('admin index');
    }
});
