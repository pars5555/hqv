NGS.createLoad("admin.loads.number.list", {
    getContainer: function () {
        return "realVotersTableContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initInvalidVotes();
        this.initPaging();
        this.initTableEdit();
    },
    initTableEdit: function () {
        $('#real_voters_table tr').click(function () {
            $('#real_voters_table tr').removeClass('active');
            $('html, body').animate({scrollTop: $("#addRealVoterNumberForm").offset().top}, 300);
            jQuery('body, html').scrollTop();
            $(this).addClass('active');
            var rowId = $(this).data('rowid');
            NGS.load('admin.loads.number.add_edit', {rowId: rowId});
            NGS.load('admin.loads.number.area_selection', {rowId: rowId});
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
        $('.invalidVoteButton').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.number.set_invalid_vote', {rowId: rowId, invalid: 1});
            event.preventDefault();
            return false;
        });
        $('.validVoteButton').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.number.set_invalid_vote', {rowId: rowId, invalid: 0});
            event.preventDefault();
            return false;
        });
    },
    reloadPageWithParams: function ()
    {
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.number.list', {page: page, limit: limit});
    }
});
