NGS.createLoad("admin.loads.login", {
    getContainer: function () {
        return "initialLoad";
    },
    afterLoad: function () {
        alert('admin login');
    }
});
