NGS.createLoad("admin.loads.number.add_edit", {
    getContainer: function () {
        return "addRealVoterNumberAddEditContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        $('#cancelEditButton').click(function () {
            NGS.load('admin.loads.number.add_edit', {});
            $('#real_voters_table tr').removeClass('active');
        });
        $('#voterNumber').focus();
        
    }
});
