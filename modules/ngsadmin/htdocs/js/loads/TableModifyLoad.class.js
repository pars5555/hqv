NGS.createLoad("ngsadmin.loads.table_modify", {
	getContainer : function() {
		return "modalBox";
	},

	afterLoad : function() {
		var modal = jQuery("#" + this.getContainer());
		modal.find('.f_datepicker').datepicker({
			dateFormat : 'dd/mm/yy'
		});
		modal.find('select').select2();

		var fileInputs = modal.find('input[type="file"]');
		ngs.UploadManager.init(fileInputs, {
			url : '/dyn/admin/do_upload',
			dataType : 'json',
			formData : {},
			previewMinHeight : 100,
			previewMinWidth : 0,
			previewMaxHeight : 1500,
			previewMaxWidth : 200
		}, {
			onFileUploadDone : this.onFileUploadDone.bind(this),
			onFileUploadFail : this.onFileUploadFail.bind(this)
		});
		
		jQuery("#" + this.getContainer() + " .f_trigger_upload").click(function(evt){
			var target = jQuery(evt.currentTarget);
			var field = target.attr('field_name');
			if(field){
				var fileInput = jQuery("#" + this.getContainer() + " input[name='"+field+"']");
				fileInput.click();
			}
		}.bind(this));
		this.afterParentLoad();
	},

	onFileUploadDone : function(e, data) {
		var file = data.files[0];
		var field = data.jqXHR.responseJSON.field;
		if (file.preview) {
			jQuery("#upload_preview_"+field).html(file.preview);
		}
		jQuery("#" + this.getContainer() + " input.f_upload_input[name='"+field+"']").val(data.jqXHR.responseJSON.file_name);
		jQuery('#f_error_'+field).html('');
	},

	onFileUploadFail : function(e, data) {
		var error = data.jqXHR.responseJSON.msg;
		var errorField = data.jqXHR.responseJSON.field;
		jQuery('#f_error_'+errorField).html(error);
	}
});
