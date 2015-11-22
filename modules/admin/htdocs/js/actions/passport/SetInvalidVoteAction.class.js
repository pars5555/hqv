NGS.createAction("admin.actions.passport.set_invalid_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery('#caseInvalidModel').closeModal();
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.passport.list', {page: page, limit: limit});
    }
});
