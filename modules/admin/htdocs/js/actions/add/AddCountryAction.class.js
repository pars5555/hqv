NGS.createAction("admin.actions.add.add_country", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.country', {});
    }
}, NGS.SiteAction);
