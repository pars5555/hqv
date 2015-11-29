NGS.createLoad("admin.loads.prevoteanalyze.list", {
    getContainer: function () {
        return "prevoteanalyzeTableContainer";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        this.initRowClickFunctionaliny();
        this.initPaging();
    },
    initPaging: function () {
        $('#p_limit').change(function () {
            $('#p_page').val(1);
        });
        $('#p_page,#p_limit').change(function () {
            this.reloadPageWithParams();
        }.bind(this));
    },
    initRowClickFunctionaliny: function () {
        $('#real_duplicated_voters_table tr').click(function () {
            $('#real_duplicated_voters_table tr').removeClass('active');
            $(this).addClass('active');
            var rowids = $(this).data('rowids');
            NGS.load('admin.loads.passanalyze.duplicated_real_voter', {ids: rowids});
        });
    },
    reloadPageWithParams: function ()
    {
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.passanalyze.list', {page: page, limit: limit});
    }
});
