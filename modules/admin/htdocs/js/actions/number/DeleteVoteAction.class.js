NGS.createAction("admin.actions.number.delete_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
       jQuery('#caseDeleteModel').closeModal();
        NGS.load('admin.loads.number.list', {});
    }
});
