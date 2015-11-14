NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    isSavable: false,
    afterLoad: function () {
        jQuery('#currentUserModal').openModal();
        var thisInstance = this;
        jQuery("#currentUserModalBtn").click(function (e) {
            if (!thisInstance.isSavable) {
                return false;
            }
            var email = $('#cu_email').val();
            var phone = $('#cu_telephone').val();
            var will_vote = $('#cu_will_vote').val();
            var will_be_in_arm = $('#cu_will_be_in_armenia').is(':checked')?1:0;
            var voter_hash = $('#voterHash').val();
            console.log(email);
            console.log(will_vote);
            console.log(will_be_in_arm);
            console.log(voter_hash);
            return false;
            NGS.action('hqv.actions.main.set_data', {email: email, phone: phone, will_vote: will_vote, will_be_in_arm: will_be_in_arm,hash:voter_hash});
            jQuery('#currentUserModal').closeModal();
            jQuery('#thankModal').openModal();
            jQuery(this).removeClass('disabled');
        });
        this.votingBtn();
    },
    votingBtn: function () {
        var thisInstance = this;
        jQuery('.f_vote_btn').click(function () {
            jQuery('.f_vote_btn').removeClass('active');
            jQuery(this).addClass('active');
            jQuery("#currentUserModalBtn").removeClass('disabled');
            thisInstance.isSavable = true;
            jQuery("#cu_will_vote").val(jQuery(this).data('ans'));
        });
    }
});