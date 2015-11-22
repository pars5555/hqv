NGS.createLoad("admin.loads.passport.list", {
    getContainer: function () {
        return "realVotersTableContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initInvalidVotes();
        this.initPaging();
        this.initTableEdit();
        this.initTableDelete();
    },
    initTableDelete: function () {
        $('#real_voters_table .f_delete').click(function (event) {
            $('#real_voters_table tr').removeClass('active');
            $(this).parents('tr').addClass('active');
            event.preventDefault();
            var rowId = $(this).data('rowid');
            $('#caseDeleteModel').openModal();
            $('#deleteBtn').off('click').on('click', function (event) {
                event.preventDefault();
                NGS.action('admin.actions.passport.delete_vote', {rowId: rowId});
            }.bind(this));
        });

    },
    initTableEdit: function () {
        $('#real_voters_table .f_edit').click(function () {
            $('#real_voters_table tr').removeClass('active');
            $('html, body').animate({scrollTop: $("#addRealVoterForm").offset().top}, 300);
            $('body, html').scrollTop();
            $(this).parents('tr').addClass('active');
            var rowId = $(this).data('rowid');
            NGS.load('admin.loads.passport.add_edit', {rowId: rowId});
            NGS.load('admin.loads.passport.area_selection', {rowId: rowId});
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
    initInvalidVotes: function () {
        $('.f_validationBtn').click(function (event) {
            if ($(this).prop('checked')) {
                var rowId = $(this).data('rowid');
                NGS.action('admin.actions.passport.set_invalid_vote', {rowId: rowId, invalid: 0});
            } else {
                event.preventDefault();
                var rowId = $(this).data('rowid');
                $('#caseInvalidModel').openModal();
                $('#setInvalidDescr').val('');
                $('#setInvalidDescrErr').hide();
                $('#setInvalidBtn').off('click').on('click', function (event) {
                    event.preventDefault();
                    if ($('#setInvalidDescr').val()) {
                        var note = $('#setInvalidDescr').val();
                        NGS.action('admin.actions.passport.set_invalid_vote', {rowId: rowId, invalid: 1, note: note});
                        return;
                    }
                    // Show error
                    $('#setInvalidDescrErr').show();
                }.bind(this));
            }
        });       
    },
    reloadPageWithParams: function ()
    {
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.passport.list', {page: page, limit: limit});
    }
});
