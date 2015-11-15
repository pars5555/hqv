NGS.createLoad("ngsadmin.loads.registers.mama_club", {
    getContainer: function () {
        return "content";
    },
    afterLoad: function () {
        NGS.RegisterPagesManager.init();
        NGS.UploadManager.init($("#upload_pic"), {
            url: 'dyn/registers/do_upload_image',
            dataType: 'json',
            formData: {'type': 'mama_club'},
            previewMinHeight: 100,
            previewMinWidth: 0,
            previewMaxHeight: 1500,
            previewMaxWidth: 200
        }, {
            onFileUploadDone: this.onFileUploadDone.bind(this),
            onFileUploadFail: this.onFileUploadFail.bind(this)
        });
        $(".f_trigger_upload").click(function (evt) {

            $("#upload_pic").click();
        }.bind(this));


    },
    onFileUploadDone: function (e, data) {
        NGS.load("ngsadmin.loads.registers.mama_club", {});
    },
    onFileUploadFail: function (e, data) {
        var error = data.jqXHR.responseJSON.msg;
        var errorField = data.jqXHR.responseJSON.field;
        jQuery('#f_error_' + errorField).html(error);
    }  
});
