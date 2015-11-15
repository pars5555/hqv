NGS.createAction("ngsadmin.actions.delete.delete_user", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.user', {});
    }
}, NGS.SiteAction);
