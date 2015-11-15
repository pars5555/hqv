NGS.createAction("ngsadmin.actions.add.add_user_order_history", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.user_order_history', {});
    }
}, NGS.SiteAction);
