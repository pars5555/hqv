NGS.createLoad("ngsadmin.loads.add.add_pharmacy", {
   
    getMethod: function () {
        return "POST";
    },
 
    afterAddLoad: function () {
        
    },
   
    onSave: function (params) {
        NGS.action('ngsadmin.actions.add.add_pharmacy', params);
    },
    getContainer: function () {
        return 'modalBox';
    }
}, "ngsadmin.loads.table_add"); 