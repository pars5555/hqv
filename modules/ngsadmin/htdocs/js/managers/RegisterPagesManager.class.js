NGS.RegisterPagesManager = {
    init: function () {
        this.initDeleteRegisterImages();
        this.initUpdateDescription();
        this.changeDescription();
    },
    initDeleteRegisterImages: function () {
        $('#imgContainer .f_delete_register_image').on('click', function () {
            var path = $(this).data('path');
            var id = $(this).data('id');
            var page = $(this).data('page');
            var params = {
                'path': path,
                'id': id,
                'page': page
            };

            NGS.action('ngsadmin.actions.registers.delete_image', params);

        });
    },
    initUpdateDescription: function () {
        $('#updateDescription').on('click', function () {
            var page = $(this).data('page');
            var desc = $('#description_input').val();
            var params = {
                'desc': desc,
                'page': page
            };
            NGS.action('ngsadmin.actions.registers.update_description', params);
        });
    },
    changeDescription: function () {
        var addButton = $("#add_description");
        var descBlock = $("#description_block");
        var descInput = $("#description_input");
        var descText = $("#description_text");

        addButton.on("click", function () {
            descBlock.removeClass("hide");
            addButton.addClass("hide");
            if (descText.length) {
                var description = descText.html().trim();
                descInput.val(description);
                descText.addClass("hide");
            }
        });
    }
}; 