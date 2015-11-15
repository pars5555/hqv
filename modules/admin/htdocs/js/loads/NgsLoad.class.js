NGS.createLoad("parentorder.loads.ngs", {
    onError: function (params) {
        if (params.code == 1) {
            window.location.href = "login";
        }
    },
    isConfirmable: function () {
        return true;
    }



});
