NGS.createLoad("ngsadmin.loads.lists.country", {
    getContainer: function () {
        return "content";
    },
     afterListLoad: function () {
    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_country";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_country";
    },
     getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_country";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');
