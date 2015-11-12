NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    afterLoad: function () {   
		jQuery('#currentUserModal').openModal();
    }
});