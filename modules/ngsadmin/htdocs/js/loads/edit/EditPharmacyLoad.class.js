NGS.createLoad("ngsadmin.loads.edit.edit_pharmacy", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        NGS.action('ngsadmin.actions.edit.edit_pharmacy', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');