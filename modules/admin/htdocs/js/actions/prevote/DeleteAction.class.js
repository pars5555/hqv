NGS.createAction("admin.actions.prevote.delete", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery('#caseDeleteModel').closeModal();
        NGS.load('admin.loads.prevote.list', {});
    }
});
