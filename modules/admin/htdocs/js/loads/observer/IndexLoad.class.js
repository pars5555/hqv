NGS.createLoad("admin.loads.observer.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
       $('#slide-out li').removeClass('active');
        $('#sidebar_observer_li').addClass('active');
        $('.resetObserverBtn').click(function(){
            var rowId = $(this).data('rowid');
            NGS.action("admin.actions.observer.reset", {rowId:rowId});
            $(this).remove();
        });
        $('#updatePageButton').click(function() {
            NGS.load('admin.loads.observer.index', {});
        });
    }
});
