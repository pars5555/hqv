NGS.createAction("admin.actions.passport.get_real_voter_data", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error') {
        } else {
            $('#firstName').val(args.row.first_name);
            $('#lastName').val(args.row.last_name);
            $('#fatherName').val(args.row.father_name);
            var date = args.row.birth_date;
            var dateParts = [0, 0, 0];
            if (date !== '')
            {
                dateParts = date.split('-');
            }
            $('#birthYear').val(parseInt(dateParts[0]));
            $('#birthMonth').val(parseInt(dateParts[1]));
            $('#birthDay').val(parseInt(dateParts[2]));

            if (args.area) {
                $('#p_region').val(args.area.region);
                $('#p_community').val(args.area.community);
            }

            $('#addRealVoterForm input[type="submit"]').val('Save');
            $('#cancelEditButton').removeClass('hide');
        }
    }
});
