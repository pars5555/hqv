NGS.createLoad("ngsadmin.loads.add.add_skin_problem", {
    afterAddLoad: function () {
        
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.add.add_skin_problem', params);
    },
  
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_add');