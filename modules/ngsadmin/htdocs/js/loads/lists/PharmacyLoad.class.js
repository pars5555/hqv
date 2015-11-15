NGS.createLoad("ngsadmin.loads.lists.pharmacy", {
    getContainer: function () {
        return "content";
    },

    
    onError: function (params) {

    },
    afterListLoad: function () {
    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_pharmacy";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_pharmacy";
    },
    getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_pharmacy";
    }
}, 'ngsadmin.loads.table_list');
