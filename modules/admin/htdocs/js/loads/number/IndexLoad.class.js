NGS.createLoad("admin.loads.number.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
        console.log(params);
    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_number_li').addClass('active');
        this.initAddRealVoter();
    },
    initAddRealVoter: function () {
        $('#addRealVoterNumberForm').submit(function () {
            var voterNumber = $('#voterNumber').val();
            var areaId = $('#p_address').val();
            var editRowId = $('#editRowId').val();
            NGS.action('admin.actions.number.add_real_voter', {
                voterNumber: voterNumber,
                areaId: areaId,
                rowId: editRowId
            });
            return false;
        });
    }
});
