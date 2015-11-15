NGS.createLoad("ngsadmin.loads.lists.user", {
    getContainer: function () {
        return "content";
    },
    
    getPermalink: function(){
    	return "users";
    },
    
    onError: function (params) {

    },
    afterListLoad: function () {
    },
    getAddLoadName: function () {
        return "ngsadmin.loads.add.add_user";
    },
    getEditLoadName: function () {
        return "ngsadmin.loads.edit.edit_user";
    },
    getDeleteActionName: function () {
        return "ngsadmin.actions.delete.delete_user";
    }
}, 'ngsadmin.loads.table_list');
