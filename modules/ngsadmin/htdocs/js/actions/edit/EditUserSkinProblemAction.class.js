NGS.createAction("ngsadmin.actions.edit.edit_user_skin_problem", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.user', {});
    }
}, NGS.SiteAction);
