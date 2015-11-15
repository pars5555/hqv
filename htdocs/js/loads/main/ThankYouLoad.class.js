NGS.createLoad("hqv.loads.main.thank_you", {
    getContainer: function () {
        return "thankYouContainer";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        jQuery('#thankModal').openModal();
    }
});