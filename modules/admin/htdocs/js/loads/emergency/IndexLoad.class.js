NGS.createLoad("admin.loads.emergency.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_emergency_li').addClass('active');
        this.initDoneNotDone();
        this.initIpAddressClick();
        this.initUnblockIP();
        this.initSaveNote();
        $('#updatePageButton').click(function() {
            NGS.load('admin.loads.emergency.index', {});
        });
    },
    initIpAddressClick: function () {
        $('.ip_address_btn').click(function () {
            NGS.load('admin.loads.voters.index', {ipAddress: $(this).data('ip')});
        });
    },
    initDoneNotDone: function () {
        $('.f_validationBtn').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.emergency.set_done', {rowId: rowId, done: $(this).prop('checked') ? 1 : 0});
        });
    },
    initUnblockIP: function () {
        $('.unblockIPButton').click(function (event) {
            var ip = $(this).data('ip');
            NGS.action('admin.actions.prevote.unblock_ip', {ip: ip});
            event.preventDefault();
            return false;
        });
    },
    initSaveNote: function () {
        $('.saveNoteButton').click(function (event) {
            var note = $(this).parent().parent().find('textarea').val();
            var rowId= $(this).parent().parent().find('textarea').data('rowid');
            NGS.action('admin.actions.emergency.set_note', {rowId:rowId, note: note});
            event.preventDefault();
            return false;
        });
    }

});
