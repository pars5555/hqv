NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        this.chooseAnswer();
        $("#currentUserModalBtn").addClass('disabled');
        $('#currentUserModal').openModal();
        var thisInstance = this;
        $("#currentUserModalBtn").off('click').on('click', function (e) {
            e.preventDefault();
            if (!thisInstance.checkIsSavable()) {
                return false;
            }
            var email = $('#cu_email').val();
            var phone = $('#cu_telephone').val();
            var will_be_in_arm = $('#inArmAnswer').val();
            var will_vote = $('#willVoteAnswer').val();
            var voter_hash = $('#voterHash').val();
            NGS.action('hqv.actions.main.set_data', {email: email, phone: phone, will_vote: will_vote, will_be_in_arm: will_be_in_arm, hash: voter_hash},
            function (transport) {
                var args = this.getArgs();
                if (args.status == 'error') {
                    $("#ErrorMessage").text(args.message);
                    return;
                } else {
                    $("#ErrorMessage").text('');
                    $('#currentUserModal').closeModal();
                    NGS.load("hqv.loads.main.thank_you", {hash: transport.hash});
                }
            });
            $(this).removeClass('disabled');
        });
        this.votingBtn();
    },
    chooseAnswer: function () {
        if ($(".f_choose_btn").length > 0) {
            var thisInstance = this;
            $('.f_choose_btn').click(function () {
                var answerVal = $(this).data('ans');
                var answerId = $(this).data('to');
                var group = $(this).data('group');
                $(this).find('i').removeClass('hide');
                $("#" + answerId).val(answerVal);
                // Make Sure that the other is unchecked
                if (answerVal == 0) {
                    $('.f_choose_btn[data-group=' + group + '][data-ans=1]').find('i').addClass('hide');
                } else {
                    $('.f_choose_btn[data-group=' + group + '][data-ans=0]').find('i').addClass('hide');
                }
                if ($('#inArmAnswer').val() === '0') {
                    $('#willVoteAnswerContainer').addClass('hide');
                } else
                {
                    $('#willVoteAnswerContainer').removeClass('hide');

                }
                thisInstance.checkIsSavable();
            });
        }
    },
    checkIsSavable: function () {
        if ($('#inArmAnswer').val() === '0' || 
                ($('#inArmAnswer').val() === '1' && $('#willVoteAnswer').val() !== '')) {
            $("#currentUserModalBtn").removeClass('disabled');
            return true;
        } else {
            $("#currentUserModalBtn").addClass('disabled');
            return false;
        }
    },
    votingBtn: function () {
        $('.f_vote_btn').click(function () {
            $('.f_vote_btn').removeClass('active');
            $(this).addClass('active');
            $("#cu_will_vote").val($(this).data('ans'));
        });
    }
});