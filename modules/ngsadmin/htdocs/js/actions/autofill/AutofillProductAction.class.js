NGS.createAction("ngsadmin.actions.autofill.autofill_product", {
    beforeAction: function (params) {

    },
    onError: function (data) {
       var html = '<div class="autocomplete_container"><div class="autocomplete_item">No Data Found</div></div>';
        $('input[name=product_id]').parent('div').find('.f_autofill_container').html(html);
    },
    afterAction: function () {
        var params = this.getArgs();
        if (!params) {

        }
        this.drawPopup(params);
        this.setProductandId();
    },
    drawPopup: function (params) {
        var html = '<div class="autocomplete_container">';
        $.each(params, function () {
            var item = '<div class="autocomplete_item f_autocomplete_item" data-id ="' + this.id + '">' + this.product_name + '</div>';
            html = html + item;
        });
        html = html + '</div>';
        $('input[name=product_id]').parent('div').find('.f_autofill_container').html(html);

    },
    setProductandId: function () {
        $('.f_autocomplete_item').on('click', function () {
            var product_id = $(this).data('id');
            var data = $(this).html();
            $('input[name=product_id]').val(data);
            $('input[name=product_id_autofill_id]').val(product_id);
            $('input[name=product_id]').parent('div').find('.f_autofill_container').html('');
        });
    }
}, NGS.SiteAction);
