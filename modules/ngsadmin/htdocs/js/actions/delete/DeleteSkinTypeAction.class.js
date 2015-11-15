NGS.createAction("ngsadmin.actions.delete.delete_skin_type", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.skin_type', {});
    }
}, NGS.SiteAction);
