NGS.createLoad("hqv.loads.main.search_result", {
    getContainer: function () {
        return "searchResult";
    },
    onError: function (params) {

    },
    afterLoad: function () {   
        jQuery("#searchLoader").hide();
        jQuery("#searchResultWrapper").show();
        jQuery(".f_current_user").click(function(){
            jQuery("#searchResultModal").closeModal();
            NGS.load("hqv.loads.main.current_user", {});
        });
    }
});