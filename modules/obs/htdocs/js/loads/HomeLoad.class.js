NGS.createLoad("obs.loads.home", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#numberInput').focus();
        $('#addForm').submit(function(){
            $('#submitButton').css({'visibility':'hidden'});
            $('#revertButton').css({'visibility':'hidden'});
        });
        $('#revertButton').click(function(){
            $('#submitButton').css({'visibility':'hidden'});
            $('#revertButton').css({'visibility':'hidden'});
        });
    }
});
