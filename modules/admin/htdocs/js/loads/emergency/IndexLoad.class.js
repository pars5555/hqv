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
        if (NGS.emergencyTimoutId) {
            clearTimeout(NGS.emergencyTimoutId);
        }
        NGS.emergencyTimoutId = setTimeout(function () {
            if ($('#sidebar_emergency_li').hasClass('active')) {
            NGS.load('admin.loads.emergency.index', {});
            }
        }.bind(this), 5000);
    },
    initDoneNotDone: function () {
        $('.f_validationBtn').click(function (event) {
            var rowId = $(this).data('rowid');
            NGS.action('admin.actions.emergency.set_done', {rowId: rowId, done: $(this).prop('checked') ? 1 : 0});
        });
    }
});
