NGS.createLoad("ngsadmin.loads.add.add_user_wishlist", {
    afterAddLoad: function () {
        this.autofillUsername();
        this.autofillProduct();
    },
    onSave: function (params) {
        //to do create correspond actions 
        NGS.action('ngsadmin.actions.add.add_user_wishlist_item', params);
    },
    autofillProduct: function () {
        $('input[name=product_id]').on('input', function (ev) {
            var _name = $(this).val();
            if (_name.trim() == '') {
                return;
            }
            NGS.action('ngsadmin.actions.autofill.autofill_product', {'searchkey': _name});
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