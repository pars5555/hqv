NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    isSavable: false,
    validEmail: false,
    afterLoad: function () {
        this.validateEmail()
        jQuery("#currentUserModalBtn").addClass('disabled');
        this.isSavable = false;
        jQuery('#currentUserModal').openModal();
        var thisInstance = this;
        jQuery("#currentUserModalBtn").click(function (e) {
            e.preventDefault();
            if (!thisInstance.isSavable) {
                return false;
            }
            var email = $('#cu_email').val();
            var phone = $('#cu_telephone').val();
            var will_vote = $('#cu_will_vote').val();
            var will_be_in_arm = $('#cu_will_be_in_armenia').is(':checked') ? 1 : 0;
            var voter_hash = $('#voterHash').val();
            thisInstance.isSavable = false;
            NGS.action('hqv.actions.main.set_data', {email: email, phone: phone, will_vote: will_vote, will_be_in_arm: will_be_in_arm, hash: voter_hash},
            function (transport) {
                thisInstance.isSavable = true;
                var args = this.getArgs();
                if (args.status == 'error') {
                    jQuery("#ErrorMessage").text(args.message);
                    return;
                } else {
                    jQuery("#ErrorMessage").text('');
                    jQuery('#currentUserModal').closeModal();
                    NGS.load("hqv.loads.main.thank_you", {hash: transport.hash});
                }
            });
            jQuery(this).removeClass('disabled');
        });
        this.votingBtn();
    },
    isValidEmailAddress: function (emailAddress) {
        if (emailAddress) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(emailAddress);
        }
    },
    validateEmail: function () {
        var thisInstance = this;
        jQuery('#cu_email').on('input', function () {
            if (thisInstance.isValidEmailAddress(jQuery(this).val())) {
                if (jQuery('.f_vote_btn').hasClass('active')) {
                    thisInstance.isSavable = true;
                    jQuery("#currentUserModalBtn").removeClass('disabled');
                }
                thisInstance.validEmail = true;
                jQuery('#emailError').hide();
            } else {
                thisInstance.isSavable = false;
                thisInstance.validEmail = false;
                jQuery("#currentUserModalBtn").addClass('disabled');
                jQuery('#emailError').show();
            }
        });
    },
    votingBtn: function () {
        var thisInstance = this;
        jQuery('.f_vote_btn').click(function () {
            jQuery('.f_vote_btn').removeClass('active');
            jQuery(this).addClass('active');
            jQuery("#cu_will_vote").val(jQuery(this).data('ans'));

            if (thisInstance.validEmail) {
                jQuery("#currentUserModalBtn").removeClass('disabled');
                thisInstance.isSavable = true;
            }
        });
    }
});