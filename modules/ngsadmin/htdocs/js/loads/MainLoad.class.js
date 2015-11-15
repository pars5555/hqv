NGS.createLoad("ngsadmin.loads.main", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
       

        $("#leftPanelContainer .f_btn").click(function (ev) {
            ev.preventDefault();
            NGS.load($(this).attr("data-ngs-action"), {}, function () {

            });
            return false;
        });
        this.openAccordion();
    },
   
    openAccordion: function () {
        $('#openRegisterTypes').on('click', function () {
            $('#registerMenuItems').toggleClass('hide');
        });
    }
});
