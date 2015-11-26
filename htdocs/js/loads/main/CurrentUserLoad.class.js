NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    isSavable: false,
    validEmail: false,
    afterLoad: function () {
        this.chooseAnswer();
        jQuery("#currentUserModalBtn").addClass('disabled');
        this.isSavable = false;
        jQuery('#currentUserModal').openModal();
        var thisInstance = this;
        jQuery("#currentUserModalBtn").off('click').on('click',function (e) {
            e.preventDefault();
            if (!thisInstance.isSavable) {
                return false;
            }
            var email = $('#cu_email').val();
            var phone = $('#cu_telephone').val();
            var will_vote = $('#cu_will_vote').val();
            var will_be_in_arm = $('#cu_will_be_in_armenia').val();
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
    chooseAnswer: function(){
        if(jQuery(".f_choose_btn").length > 0){
            var thisInstance = this;
            jQuery('.f_choose_btn').click(function(){
                var answerVal = jQuery(this).data('ans'); 
                var answerId = jQuery(this).data('to');
                var group = jQuery(this).data('group');
                // Set Value
                jQuery("#" + answerId).val(answerVal);
                console.log(answerId)
                console.log(jQuery("#" + answerId))
                // Mark as Checked
                jQuery(this).find('i').removeClass('hide');
                
                thisInstance.checkIsSavable();
                // Make Sure that the other is unchecked
                if(answerVal == 0){
                    jQuery('.f_choose_btn[data-group=' + group + '][data-ans=1]').find('i').addClass('hide');
                    return;
                }
                jQuery('.f_choose_btn[data-group=' + group + '][data-ans=0]').find('i').addClass('hide');
            });
        }
    },
    checkIsSavable: function(){
        console.log(jQuery('#voteAnswer').val())
        console.log(jQuery('#appearAnswer').val())
        if(jQuery('#voteAnswer').val() && jQuery('#appearAnswer').val()){
            jQuery("#currentUserModalBtn").removeClass('disabled');
            this.isSavable = true;
        }else {
            jQuery("#currentUserModalBtn").addClass('disabled');
            this.isSavable = false;
        }
    },
    votingBtn: function () {
        var thisInstance = this;
        jQuery('.f_vote_btn').click(function () {
            jQuery('.f_vote_btn').removeClass('active');
            jQuery(this).addClass('active');
            jQuery("#cu_will_vote").val(jQuery(this).data('ans'));

            // if (thisInstance.validEmail) {
                jQuery("#currentUserModalBtn").removeClass('disabled');
                thisInstance.isSavable = true;
            // }
        });
    }
});