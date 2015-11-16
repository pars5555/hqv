NGS.createAction("admin.actions.delete.delete_user", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user', {});
    }
}, NGS.SiteAction);
