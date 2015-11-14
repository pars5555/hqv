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
        jQuery("#currentUserModalBtn").click(function(e){
            console.log(thisInstance.isSavable)
            if(!thisInstance.isSavable){
                return false;
            }
            alert(1)
            jQuery('#currentUserModal').closeModal();
            jQuery('#thankModal').openModal();
            jQuery(this).removeClass('disabled');
        });
        this.votingBtn();
    },
    votingBtn: function(){
        var thisInstance = this;
        jQuery('.f_vote_btn').click(function(){
            jQuery('.f_vote_btn').removeClass('active');
            jQuery(this).addClass('active');
            jQuery("#currentUserModalBtn").removeClass('disabled');
            
            thisInstance.isSavable = true;

            jQuery("#voteAnswer").val(jQuery(this).data('ans'));
        });
    },
});