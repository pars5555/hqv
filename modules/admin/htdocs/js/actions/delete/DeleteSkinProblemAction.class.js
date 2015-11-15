NGS.createAction("admin.actions.delete.delete_skin_problem", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.skin_problem', {});
    }
}, NGS.SiteAction);
