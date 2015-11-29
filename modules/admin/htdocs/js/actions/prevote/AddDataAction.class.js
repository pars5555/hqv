NGS.createAction("admin.actions.prevote.add_data", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status === 'error') {
            jQuery("#addVoterError").html(args.message);
            jQuery("#addVoterSuccess").html('');
            return;
        } else {
            jQuery("#addVoterError").html('');
            jQuery("#addVoterSuccess").html('Successfully Added');
             NGS.load('admin.loads.prevote.list', {});
        }
    }
});
