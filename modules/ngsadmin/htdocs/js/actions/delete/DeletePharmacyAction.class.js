NGS.createAction("ngsadmin.actions.delete.delete_pharmacy", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.pharmacy', {});
    }
}, NGS.SiteAction);
