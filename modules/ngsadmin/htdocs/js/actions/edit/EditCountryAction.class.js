NGS.createAction("ngsadmin.actions.edit.edit_country", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.country', {});
    }
}, NGS.SiteAction);
