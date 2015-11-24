NGS.createLoad("admin.loads.prevote.add_edit", {
    getContainer: function () {
        return "prevoteAddEditContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        $('#cancelEditButton').click(function () {
            NGS.load('admin.loads.passport.add_edit', {});
            $('#real_voters_table tr').removeClass('active');
        });
        $('#firstName').focus();
    }
});
