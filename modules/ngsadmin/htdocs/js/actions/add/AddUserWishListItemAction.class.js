NGS.createAction("ngsadmin.actions.add.add_user_wishlist_item", {
   
    beforeAction: function (params) {

    },
    afterAction: function () {
        jQuery("#modalBox").dialog('close');
        NGS.load('ngsadmin.loads.lists.user_wishlist', {});
    }
}, NGS.SiteAction);
