NGS.createAction("admin.actions.edit.edit_user", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user', {});
    }
}, NGS.SiteAction);
