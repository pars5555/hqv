NGS.createLoad("hqv.loads.main.search_result", {
    getContainer: function () {
        return "searchResult";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        var count = $('#searchResultCount').val();
        if (count == 0)
        {
            $('#selectYouHeaderText1').addClass('hide');
            $('#selectYouHeaderText2').addClass('hide');
        } else {
            if (count == 1)
            {
                $('#selectYouHeaderText1').addClass('hide');
                $('#selectYouHeaderText2').removeClass('hide');
            } else
            {
                $('#selectYouHeaderText1').removeClass('hide');
                $('#selectYouHeaderText2').addClass('hide');

            }
        }
        jQuery("#searchLoader").hide();
        jQuery("#searchResultWrapper").show();
        jQuery(".f_current_user").click(function () {
            var hash = $(this).data('hash');
            jQuery("#searchResultModal").closeModal();
            NGS.load("hqv.loads.main.current_user", {hash: hash});
        });
    }
});