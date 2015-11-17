NGS.createLoad("admin.loads.analyze.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_analyze_li').addClass('active');
        this.initRowClickFunctionaliny();
    },
    initRowClickFunctionaliny: function () {
        $('#real_duplicated_voters_table tr').click(function () {
            $('#real_duplicated_voters_table tr').removeClass('active');
            $(this).addClass('active');
            var rowids = $(this).data('rowids');
            NGS.load('admin.loads.analyze.duplicated_real_voter', {ids: rowids});
        });
    }
});
