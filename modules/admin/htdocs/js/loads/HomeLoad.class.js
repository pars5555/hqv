NGS.createLoad("admin.loads.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
    	console.log(111);
    }
});
