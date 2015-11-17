NGS.createLoad("admin.loads.passport.list", {
    getContainer: function () {
        return "realVotersTableContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initPaging();
        this.initTableEdit();
    },
    initTableEdit: function () {
        $('#real_voters_table tr').click(function () {
            $('#real_voters_table tr').removeClass('active');
            $('html, body').animate({scrollTop: $("#addRealVoterForm").offset().top}, 300);
            jQuery('body, html').scrollTop();
            $(this).addClass('active');
            var rowid = $(this).data('rowid');
            NGS.load('admin.loads.passport.add_edit', {rowId:rowid});
        });
        $('#cancelEditButton').click(function () {
            $('#cancelEditButton').addClass('hide');
            $('#addRealVoterForm input[type="submit"]').val('Add');
            $('#editRowId').val(0);
            $('#firstName').val('');
            $('#lastName').val('');
            $('#fatherName').val('');
            $('#birthYear').prop('selectedIndex',0);
            $('#birthMonth').prop('selectedIndex',0);
            $('#birthDay').prop('selectedIndex',0);
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
        NGS.load('admin.loads.passport.list', {page: page, limit: limit});
    }
});
