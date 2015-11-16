NGS.createAction("admin.actions.edit.edit_skin_type", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.skin_type', {});
    }
}, NGS.SiteAction);
