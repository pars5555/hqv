NGS.createAction("hqv.actions.main.set_data", {
    onError: function (res) {

    },
    afterAction: function (transport) {
        NGS.load("hqv.loads.main.thank_you", {hash: transport.hash});
    }
});
