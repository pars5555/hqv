NGS.createLoad("ngsadmin.loads.add.add_user_skin_type", {
    afterAddLoad: function () {
    this.autofillSkinType();
        this.autofillUsername();
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.add.add_user_skin_type', params);
    },
    autofillSkinType: function () {

        $('input[name=skin_type_id]').on('input', function (ev) {
            var _name = $(this).val();
            if (_name.trim() == '') {
                return;
            }
            NGS.action('ngsadmin.actions.autofill.autofill_skin_type', {'searchkey': _name});
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