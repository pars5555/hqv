NGS.createLoad("ngsadmin.loads.edit.edit_user_skin_type", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.edit.edit_skin_type', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');