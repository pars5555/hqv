NGS.createAction("hqv.actions.main.set_data", {
    onError: function (res) {
        
    },
    afterAction: function (transport) {
        console.log(transport);
    }
});
