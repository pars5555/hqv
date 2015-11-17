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
        this.initAreaSelection();
    },
    initAreaSelection: function () {
        $('#p_region').change(function () {
            var selectedRegion = $('#p_region').val();
            NGS.load('admin.loads.passport.index', {selectedRegion: selectedRegion});
        });
        $('#p_community').change(function () {
            var selectedRegion = $('#p_region').val();
            var selectedRegionCommunity = $('#p_community').val();
            NGS.load('admin.loads.passport.index', {selectedRegion: selectedRegion, selectedRegionCommunity: selectedRegionCommunity});
        });
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
            NGS.action('admin.actions.passport.add_real_voter', {
                firstName: firstName,
                lastName: lastName,
                fatherName: fatherName,
                birthYear: birthYear,
                birthMonth: birthMonth,
                birthDay: birthDay,
                areaId : areaId,
                rowId: editRowId
            });
            return false;
        });
    }
});
