NGS.createLoad("ngsadmin.loads.add.add_user_skin_problem", {
    afterAddLoad: function () {
        this.autofillSkinProblem();
        this.autofillUsername();
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.add.add_user_skin_problem', params);
    },
    autofillSkinProblem: function () {

        $('input[name=skin_problem_id]').on('input', function (ev) {
            var _name = $(this).val();
            if (_name.trim() == '') {
                return;
            }
            NGS.action('ngsadmin.actions.autofill.autofill_skin_problem', {'searchkey': _name});
        });
    },
    autofillUsername: function () {
        $('input[name=user_id]').on('input', function (ev) {
            var _name = $(this).val();
            if (_name.trim() == '') {
                return;
            }
            NGS.action('ngsadmin.actions.autofill.autofill_username', {'searchkey': _name});
        });
    },
    getContainer: function () {
        return 'modalBox';
    }
}, 'ngsadmin.loads.table_add');