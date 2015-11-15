NGS.createLoad("ngsadmin.loads.edit.edit_user", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        NGS.action('ngsadmin.actions.edit.edit_user', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');