NGS.createAction("ngsadmin.actions.add.add_country", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.country', {});
    }
}, NGS.SiteAction);
