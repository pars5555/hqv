NGS.createAction("admin.actions.delete.delete_user_skin_problem", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user_skin_problem', {});
    }
}, NGS.SiteAction);