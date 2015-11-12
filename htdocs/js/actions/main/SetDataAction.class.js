NGS.createAction("hqv.actions.main.sale.set_data", {
    onError: function (res) {
        
    },
    afterAction: function (transport) {
        console.log(transport);
    }
});
