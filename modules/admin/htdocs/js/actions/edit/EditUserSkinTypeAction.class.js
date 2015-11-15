NGS.createAction("admin.actions.edit.edit_user_skin_type", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user_skin_type', {});
    }
}, NGS.SiteAction);
