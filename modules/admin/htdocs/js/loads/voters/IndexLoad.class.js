NGS.createLoad("admin.loads.voters.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_voters_li').addClass('active');

        $('#search_btn').click(function () {
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var birthYear = $('#birthYear').val();
            var birthMonth = $('#birthMonth').val();
            var birthDay = $('#birthDay').val();
            var ipAddress = $('#ipAddress').val();
            NGS.load('admin.loads.voters.list', {firstName: firstName, lastName: lastName, birthYear: birthYear, birthMonth: birthMonth, birthDay: birthDay, ipAddress :ipAddress });



        });
    }
});
