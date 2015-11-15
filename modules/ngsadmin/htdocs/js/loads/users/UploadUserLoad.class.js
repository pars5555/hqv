NGS.createLoad("ngsadmin.loads.users.upload_user", {
	getContainer : function() {
		return "content";
	},
	getPermalink : function() {
		return "users";
	},
	afterLoad : function() {
		NGS.UploadManager.init($("#upload_user"), {
			url : 'dyn/users/do_upload_user',
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
		$(".f_trigger_upload").click( function(evt) {
			$("#upload_user").click();
		}.bind(this));

		$('#exportUsers').on('click', function() {
			$("#csvExportUsers").trigger('submit');
		});
	},

	onFileUploadDone : function(e, data) {

		var params = data.jqXHR.responseJSON.params;
		if (params.existed == 1) {
			NGS.load("ngsadmin.loads.users.upload_user_list", {});
			return;
		}
		NGS.load("ngsadmin.loads.users.user", {});
	},

	onFileUploadFail : function(e, data) {
		var error = data.jqXHR.responseJSON.msg;
		var errorField = data.jqXHR.responseJSON.field;
		jQuery('#f_error_' + errorField).html(error);
	}
});
