NGS.createLoad("admin.loads.prevote.list", {
    getContainer: function () {
        return "prevoteTableContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initPaging();
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
                NGS.action('admin.actions.prevote.delete', {rowId: rowId});
            }.bind(this));
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
        NGS.load('admin.loads.prevote.list', {page: page, limit: limit});
    }
});
