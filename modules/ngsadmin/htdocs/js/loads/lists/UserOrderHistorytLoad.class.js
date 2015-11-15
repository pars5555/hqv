NGS.createLoad("ngsadmin.loads.lists.user_order_history", {
    getContainer: function () {
        return "content";
    },
    afterListLoad: function () {

    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_user_order_history";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_user_order_history";
    },
       getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_user_order_history";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');
