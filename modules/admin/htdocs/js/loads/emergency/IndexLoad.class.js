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
        if (NGS.emergencyTimoutId) {
            clearTimeout(NGS.emergencyTimoutId);
        }
        NGS.emergencyTimoutId = setTimeout(function () {
            if ($('#sidebar_emergency_li').hasClass('active')) {
                NGS.load('admin.loads.emergency.index', {});
            }
        }.bind(this), 5000);
    },
    initIpAddressClick: function () {
        $('.ip_address_btn').click(function () {
            NGS.load('admin.loads.voters.index', {ipAddress:$(this).data('ip')});
        });
    },
    initDoneNotDone: function () {
        $('.f_validationBtn').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.emergency.set_done', {rowId: rowId, done: $(this).prop('checked') ? 1 : 0});
        });
    }
});
