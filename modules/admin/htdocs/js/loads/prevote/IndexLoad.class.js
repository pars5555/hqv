NGS.createLoad("admin.loads.prevote.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_prevote_li').addClass('active');
        this.initAddRealVoter();
    },
    initAddRealVoter: function () {
        $('#addPrevoteForm').submit(function () {
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var fatherName = $('#fatherName').val();
            var birthYear = $('#birthYear').val();
            var birthMonth = $('#birthMonth').val();
            var birthDay = $('#birthDay').val();
            var areaId = $('#p_address').val();
            NGS.action('admin.actions.prevote.add_data', {
                firstName: firstName,
                lastName: lastName,
                fatherName: fatherName,
                birthYear: birthYear,
                birthMonth: birthMonth,
                birthDay: birthDay,
                areaId: areaId
            });
            return false;
        });
    }
});
