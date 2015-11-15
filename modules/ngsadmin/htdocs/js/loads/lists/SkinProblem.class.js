NGS.createLoad("ngsadmin.loads.lists.skin_problem", {
    getContainer: function () {
        return "content";
    },
    afterListLoad: function () {
    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_skin_problem";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_skin_problem";
    },
       getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_skin_problem";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');
