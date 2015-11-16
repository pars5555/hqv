NGS.createLoad("admin.loads.passport.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {
        console.log(params);
    },
    afterLoad: function () {
        this.initAddRealVoter();
        this.initPaging();
        this.initTableEdit();
    },
    initTableEdit: function () {
        $('#real_voters_table tr').click(function () {
            var rowid = $(this).data('rowid');
            var firstName = $(this).data('first-name');
            var lastName = $(this).data('last-name');
            var fatherName = $(this).data('father-name');
            var birthYear = $(this).data('birth-year');
            var birthMonth = $(this).data('birth-month');
            var birthDay = $(this).data('birth-day');
            $('#editRowId').val(rowid);
            $('#firstName').val(firstName);
            $('#lastName').val(lastName);
            $('#fatherName').val(fatherName);
            $('#birthYear').val(birthYear);
            $('#birthMonth').val(birthMonth);
            $('#birthDay').val(birthDay);
        });
    },
    initPaging: function () {
        $('#p_limit').change(function () {
            $('#p_page').val(1);
        });
        $('#p_page,#p_limit').change(function () {
            this.reloadPageWithParams();
        }.bind(this));
    },
    reloadPageWithParams: function ()
    {
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.passport.index', {page: page, limit: limit})
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
            NGS.action('admin.actions.passport.add_real_voter', {
                firstName: firstName,
                lastName: lastName,
                fatherName: fatherName,
                birthYear: birthYear,
                birthMonth: birthMonth,
                birthDay: birthDay,
                rowId: editRowId
            });
            return false;
        });
    }
});
