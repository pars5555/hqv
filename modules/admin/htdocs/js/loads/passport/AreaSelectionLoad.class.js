NGS.createLoad("admin.loads.passport.area_selection", {
    getContainer: function () {
        return "addRealVoterAreaSelectionContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
         this.initAreaSelection();
    },
    initAreaSelection: function () {
        $('#p_region').change(function () {
            var selectedRegion = $('#p_region').val();
            NGS.load('admin.loads.passport.area_selection', {selectedRegion: selectedRegion});
        });
        $('#p_community').change(function () {
            var selectedRegion = $('#p_region').val();
            var selectedRegionCommunity = $('#p_community').val();
            NGS.load('admin.loads.passport.area_selection', {selectedRegion: selectedRegion, selectedRegionCommunity: selectedRegionCommunity});
        });
    },
});
