NGS.createLoad("admin.loads.home", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
		$('select').material_select();
    }
});
