NGS.createAction("ngsadmin.actions.registers.update_description", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        var loadname = 'ngsadmin.loads.registers.' + this.getArgs().page;
        NGS.load(loadname, {});
    }
}, NGS.SiteAction);
