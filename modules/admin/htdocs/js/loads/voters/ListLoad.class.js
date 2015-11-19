NGS.createLoad("admin.loads.voters.list", {
    getContainer: function () {
        return "realVotersTableContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initInvalidVotes();
        this.initUnblockIP();
        this.initPaging();
    },
    initUnblockIP:function(){
        $('.unblockIPButton').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.prevote.unblock_ip', {rowId: rowId});
            event.preventDefault();
            return false;
        });
        
    },
    initInvalidVotes: function () {
        $('.invalidVoteButton').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.prevote.set_invalid_vote', {rowId: rowId, invalid: 1});
            event.preventDefault();
            return false;
        });
        $('.validVoteButton').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.prevote.set_invalid_vote', {rowId: rowId, invalid: 0});
            event.preventDefault();
            return false;
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
        NGS.load('admin.loads.voters.list', {page: page, limit: limit});
    }
});
