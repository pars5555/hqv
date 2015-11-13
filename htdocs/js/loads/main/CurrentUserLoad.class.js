NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        jQuery('#currentUserModal').openModal();
        jQuery("#currentUserModalBtn").click(function(){
            alert(1);
            // jQuery('#currentUserModal').closeModal();
            jQuery('#thankModal').openModal();
            jQuery(this).removeClass('disabled');
        });
    }
});