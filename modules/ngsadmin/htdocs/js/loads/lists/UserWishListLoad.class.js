NGS.createLoad("ngsadmin.loads.lists.user_wishlist", {
    getContainer: function () {
        return "content";
    },
    afterListLoad: function () {

    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_user_wishlist";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_user_wishlist";
    },
    getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_user_wishlist_item";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');
