NGS.createAction("admin.actions.passport.delete_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
       jQuery('#caseDeleteModel').closeModal();
        NGS.load('admin.loads.passport.list', {});
    }
});
