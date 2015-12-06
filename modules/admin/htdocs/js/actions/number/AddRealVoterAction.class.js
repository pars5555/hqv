NGS.createAction("admin.actions.number.add_real_voter", {
    beforeAction: function (params) {

    },
    afterAction: function () {
        var args = this.getArgs();
        if (args.status == 'error') {
            jQuery("#addVoterError").text(args.message);
            return;
        } else {
            jQuery("#addVoterError").text('');
        }
         var areaId = $('#p_address').val();
        NGS.load('admin.loads.number.list', {areaId: areaId});
        NGS.load('admin.loads.number.add_edit', {});
        $('#real_voters_table tr').removeClass('active');
        
    }
});
