NGS.createAction("admin.actions.passport.add_real_voter", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error'){
            jQuery("#addVoterError").text(args.message);
            return;
        }else {
            jQuery("#addVoterError").text('');
        }
        NGS.load('admin.loads.passport.index', {});
        
    }
});
