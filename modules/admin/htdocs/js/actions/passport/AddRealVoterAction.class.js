NGS.createAction("admin.actions.passport.add_real_voter", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error')
        {
            alert(args.message);
            return;
        }
        NGS.load('admin.loads.passport.index', {});
        
    }
});
