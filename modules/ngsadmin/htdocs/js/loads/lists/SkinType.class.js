NGS.createLoad("ngsadmin.loads.lists.skin_type", {
    getContainer: function () {
        return "content";
    },
    afterListLoad: function () {
    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_skin_type";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_skin_type";
    },
       getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_skin_type";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');