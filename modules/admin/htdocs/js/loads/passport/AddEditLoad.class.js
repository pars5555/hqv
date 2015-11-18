NGS.createLoad("admin.loads.passport.add_edit", {
    getContainer: function () {
        return "addRealVoterAddEditContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        $('#cancelEditButton').click(function () {
            NGS.load('admin.loads.passport.add_edit', {});
            $('#real_voters_table tr').removeClass('active');
        });
    }
});
