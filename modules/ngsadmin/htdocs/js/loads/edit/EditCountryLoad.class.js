NGS.createLoad("ngsadmin.loads.edit.edit_country", {
    afterEditLoad: function () {
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.edit.edit_country', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_edit');