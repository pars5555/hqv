NGS.createAction("admin.actions.delete.delete_pharmacy", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.pharmacy', {});
    }
}, NGS.SiteAction);
