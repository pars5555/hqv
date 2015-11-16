NGS.createAction("admin.actions.add.add_user_wishlist_item", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('admin.loads.lists.user_wishlist', {});
    }
}, NGS.SiteAction);
