NGS.createLoad("hqv.loads.main.search_result", {
    getContainer: function () {
        return "searchResult";
    },
    onError: function (params) {

    },
    afterLoad: function () {   
        jQuery("#searchLoader").hide();
        jQuery("#searchResultWrapper").show();
    }
});