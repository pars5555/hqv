NGS.createLoad("ngsadmin.loads.edit.edit_user_skin_problem", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.edit.edit_skin_problem', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');