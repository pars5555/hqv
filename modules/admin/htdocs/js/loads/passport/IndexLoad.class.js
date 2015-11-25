NGS.createLoad("admin.loads.passport.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
        console.log(params);
    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_passport_li').addClass('active');
        this.initAddRealVoter();
    },
    initAddRealVoter: function () {
        $('#addRealVoterForm').submit(function () {
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var fatherName = $('#fatherName').val();
            var birthYear = $('#birthYear').val();
            var birthMonth = $('#birthMonth').val();
            var birthDay = $('#birthDay').val();
            var editRowId = $('#editRowId').val();
            var areaId = $('#p_address').val();
            var passportType = $('input[name=passportType]:checked', '#addRealVoterForm').val();
            NGS.action('admin.actions.passport.add_real_voter', {
                firstName: firstName,
                lastName: lastName,
                fatherName: fatherName,
                birthYear: birthYear,
                birthMonth: birthMonth,
                birthDay: birthDay,
                areaId: areaId,
                passportType: passportType,
                rowId: editRowId
            });
            return false;
        });
    }
});
