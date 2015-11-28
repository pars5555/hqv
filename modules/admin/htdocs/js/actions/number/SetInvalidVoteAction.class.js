NGS.createAction("admin.actions.number.set_invalid_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery('#caseInvalidModel').closeModal();
        var page = $('#p_page').val();
        var limit = $('#p_limit').val();
        NGS.load('admin.loads.number.list', {page: page, limit: limit});
        alert('ok');
    }
});
