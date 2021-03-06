NGS.createAction("admin.actions.passport.add_real_voter", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error') {
            jQuery("#addVoterError").text(args.message);
            return;
        } else {
            jQuery("#addVoterError").text('');
        }
        NGS.load('admin.loads.passport.list', {});
        NGS.load('admin.loads.passport.add_edit', {});
        $('#real_voters_table tr').removeClass('active');
    }
});
