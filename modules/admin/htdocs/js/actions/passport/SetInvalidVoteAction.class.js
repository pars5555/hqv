NGS.createAction("admin.actions.passport.set_invalid_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery('#caseInvalidModel').closeModal();
    }
});
