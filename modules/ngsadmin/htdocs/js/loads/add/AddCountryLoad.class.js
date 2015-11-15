NGS.createLoad("ngsadmin.loads.add.add_country", {
    afterAddLoad: function () {

    },
    onSave: function (params) {
        //to do create correspond actions 
        console.log(params);
        NGS.action('ngsadmin.actions.add.add_country', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_add');