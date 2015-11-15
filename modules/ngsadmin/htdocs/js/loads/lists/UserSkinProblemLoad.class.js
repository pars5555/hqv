NGS.createLoad("ngsadmin.loads.lists.user_skin_problem", {
    getContainer: function () {
        return "content";
    },
    afterListLoad: function () {

    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_user_skin_problem";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_user_skin_problem";
    },
        getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_user_skin_problem";
    },
    onError: function (params) {

    }

}, 'ngsadmin.loads.table_list');
