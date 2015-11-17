NGS.createAction("admin.actions.passport.add_real_voter", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error') {
            jQuery("#addVoterError").text(args.message);
            return;
        } else {
            jQuery("#addVoterError").text('');
        }
        NGS.load('admin.loads.passport.list', {});
        $('#cancelEditButton').addClass('hide');
        $('#addRealVoterForm input[type="submit"]').val('Add');
        $('#editRowId').val(0);
        $('#firstName').val('');
        $('#lastName').val('');
        $('#fatherName').val('');
        $('#birthYear').prop('selectedIndex', 0);
        $('#birthMonth').prop('selectedIndex', 0);
        $('#birthDay').prop('selectedIndex', 0);
    }
});
