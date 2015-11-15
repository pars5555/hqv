NGS.createAction("admin.actions.edit.edit_user_order_history", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user_order_history', {});
    }
}, NGS.SiteAction);
