NGS.createAction("hqv.actions.main.add_emergency_phone", {
    onError: function (res) {

    },
    afterAction: function (transport) {
        var args = this.getArgs();
        if (args.status == 'error') {
            $("#emergencyCaptcha").attr('src', args.captcha);
            $("#emergencyErrorMessage").removeClass("hide");
            
        } else
        {
            $("#emergencyContainer").addClass('hide');
            $("#emergencyErrorMessage").addClass("hide");

        }
    }
});
