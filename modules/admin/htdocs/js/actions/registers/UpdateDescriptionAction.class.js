NGS.createAction("admin.actions.registers.update_description", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        var loadname = 'admin.loads.registers.' + this.getArgs().page;
        NGS.load(loadname, {});
    }
}, NGS.SiteAction);
