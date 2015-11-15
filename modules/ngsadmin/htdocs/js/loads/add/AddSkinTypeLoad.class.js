NGS.createLoad("ngsadmin.loads.add.add_skin_type", {
    getMethod: function () {
        return "POST";
    },
    afterAddLoad: function () {

    },
    onSave: function (params) {
        NGS.action('ngsadmin.actions.add.add_skin_type', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, "ngsadmin.loads.table_add");
