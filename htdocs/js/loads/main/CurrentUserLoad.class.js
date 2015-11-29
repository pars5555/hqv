NGS.createLoad("hqv.loads.main.current_user", {
    getContainer: function () {
        return "currentUser";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        this.chooseAnswer();
        this.initEmergency();
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
            var is_death = $('#deathAnswer').val();
            var will_vote = $('#willVoteAnswer').val();
            var voter_hash = $('#voterHash').val();
            NGS.action('hqv.actions.main.set_data', {email: email, phone: phone, will_vote: will_vote, will_be_in_arm: will_be_in_arm, is_death: is_death, hash: voter_hash},
            function (transport) {
                var args = this.getArgs();
                if (args.status == 'error') {
                    $("#emergencyContainer").removeClass('hide');
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
    initEmergency: function () {
        $('#emergencyPhoneNumberSubmitBtn').click(function () {
            var phone = $('#emergencyPhoneNumber').val();
            if (phone.trim()==='')
            {
                return false;
            }
            NGS.action('hqv.actions.main.add_emergency_phone', {phoneNumber: phone});
            $("#emergencyContainer").addClass('hide');
        });


    },
    chooseAnswer: function () {
        $('#death_checkbox').click(function () {
            if ($(this).find('i.fa-check').hasClass('hide')) {
                
                $(this).find('i.fa-check').removeClass('hide');
                $(this).find('i.fa-square-o').addClass('hide');
                
                $('.f_choose_btn').addClass('hide');
                $('#deathAnswer').val(1);

            } else
            {
                $(this).find('i.fa-check').addClass('hide');
                $(this).find('i.fa-square-o').removeClass('hide');
                
                $('.f_choose_btn').removeClass('hide');
                $('#deathAnswer').val(0);

            }
            thisInstance.checkIsSavable();
        });
        if ($(".f_choose_btn").length > 0) {
            var thisInstance = this;
            $('.f_choose_btn').click(function () {
                var answerVal = $(this).data('ans');
                var answerId = $(this).data('to');
                var group = $(this).data('group');
                $(this).find('i.fa-check').removeClass('hide');
                $(this).find('i.fa-square-o').addClass('hide');
                $("#" + answerId).val(answerVal);
                $('.f_choose_btn[data-group=' + group + '][data-ans='+(answerVal=='0'?1:0)+']').find('i.fa-square-o').removeClass('hide');
                $('.f_choose_btn[data-group=' + group + '][data-ans='+(answerVal=='0'?1:0)+']').find('i.fa-check').addClass('hide');
                // Make Sure that the other is unchecked
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
        if ($('#deathAnswer').val() === '1' || $('#inArmAnswer').val() === '0' ||
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