NGS.createLoad("ngsadmin.loads.edit.edit_user_order_history", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.edit.edit_user_order_history', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');