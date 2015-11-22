NGS.createLoad("admin.loads.numanalyze.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_numanalyze_li').addClass('active');
        this.initRowClickFunctionaliny();
    },
    initRowClickFunctionaliny: function () {
        $('#real_duplicated_voters_table tr').click(function () {
            $('#real_duplicated_voters_table tr').removeClass('active');
            $(this).addClass('active');
            var rowids = $(this).data('rowids');
            NGS.load('admin.loads.numanalyze.duplicated_real_voter', {ids: rowids});
        });
    }
});
