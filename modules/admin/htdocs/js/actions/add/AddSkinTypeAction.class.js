NGS.createAction("admin.actions.add.add_skin_type", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.skin_type', {});
    }
}, NGS.SiteAction);
