NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        jQuery('#currentUserModal').openModal(
                {
                    complete: function () {
                        NGS.load('hqv.actions.main.sale.set_data', {});
                    }
                }
        );
    }
});