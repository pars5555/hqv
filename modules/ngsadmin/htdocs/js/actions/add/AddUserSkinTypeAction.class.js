NGS.createAction("ngsadmin.actions.add.add_user_skin_type", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.user_skin_type', {});
    }
}, NGS.SiteAction);
