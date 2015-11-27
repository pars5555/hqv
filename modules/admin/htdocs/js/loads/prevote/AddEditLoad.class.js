NGS.createLoad("admin.loads.prevote.add_edit", {
    getContainer: function () {
        return "prevoteAddEditContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        $('#firstName').focus();
    }
});
