NGS.createLoad("admin.loads.main.login", {
    getContainer: function () {
        return "initialLoad";
    },
    afterLoad: function () {
        alert('admin login');
    }
});
