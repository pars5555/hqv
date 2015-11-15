NGS.createLoad("ngsadmin.loads.registers.offer", {

	  getContainer: function () {
        return "content";
    },
    afterLoad: function () {
         NGS.RegisterPagesManager.init();
        NGS.UploadManager.init($("#upload_pic"), {
            
            url: 'dyn/registers/do_upload_image',
            dataType: 'json',
            formData: {'type':'offer'},
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

        //var params = data.jqXHR.responseJSON.params;
//		if (params.error == 1) {
//			$('.uploadError').html('Ooops');
//			return;
//		}
        NGS.load("ngsadmin.loads.registers.offer", {});
    },
    onFileUploadFail: function (e, data) {
        var error = data.jqXHR.responseJSON.msg;
        var errorField = data.jqXHR.responseJSON.field;
        jQuery('#f_error_' + errorField).html(error);
    }
  
});
