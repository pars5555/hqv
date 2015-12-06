NGS.createAction("admin.actions.number.delete_vote", {
    beforeAction: function (params) {

    },
    afterAction: function () {
       jQuery('#caseDeleteModel').closeModal();
       var areaId = $('#p_address').val();
        NGS.load('admin.loads.number.list', {areaId: areaId});
    }
});
