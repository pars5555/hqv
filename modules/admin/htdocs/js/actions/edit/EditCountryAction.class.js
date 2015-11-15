NGS.createAction("admin.actions.edit.edit_country", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.country', {});
    }
}, NGS.SiteAction);
