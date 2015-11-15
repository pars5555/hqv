NGS.createAction("ngsadmin.actions.add.add_pharmacy", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.pharmacy', {});
    }
}, NGS.SiteAction);
