NGS.createLoad("admin.loads.dashboard.area_selection", {
    getContainer: function () {
        return "dashboardAreaSelectionContainer";
    },
    onError: function (params) {
    },
    afterLoad: function () {
        this.initAreaSelection();
    },
    initAreaSelection: function () {
        $('#p_region').change(function () {
            var selectedRegion = $('#p_region').val();
            NGS.load('admin.loads.dashboard.area_selection', {selectedRegion: selectedRegion});
        });
        $('#p_community').change(function () {
            var selectedRegion = $('#p_region').val();
            var selectedRegionCommunity = $('#p_community').val();
            NGS.load('admin.loads.dashboard.area_selection', {selectedRegion: selectedRegion, selectedRegionCommunity: selectedRegionCommunity});
        });
        $('#p_address').change(function () {
            this.loadStatistics();
        }.bind(this));
        this.loadStatistics();


    },
    loadStatistics: function () {
        var areaId = $('#p_address').val();
        if (areaId > 0)
        {
            NGS.load('admin.loads.dashboard.area_statistics', {areaId: areaId});
        }
    }
});
