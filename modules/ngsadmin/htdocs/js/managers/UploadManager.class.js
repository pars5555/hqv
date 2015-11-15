NGS.UploadManager = {

	init : function(fileUploadInput, options, callbacks) {

		if ( typeof options !== "object") {
			options = {};
		}
		if ( typeof callbacks !== "object") {
			callbacks = {};
		}
		var uploadInput = jQuery(fileUploadInput);
		if(uploadInput.length==0){
			return false;
		}
		uploadInput.fileupload(options);
		uploadInput.on('fileuploadadd', callbacks.onFileUploadAdd);
		uploadInput.on('fileuploadsubmit', callbacks.onFileUploadSubmit);
		uploadInput.on('fileuploadsend', callbacks.onFileUploadSend);
		uploadInput.on('fileuploaddone', callbacks.onFileUploadDone);
		uploadInput.on('fileuploadfail', callbacks.onFileUploadFail);
		uploadInput.on('fileuploadalways', callbacks.onFileUploadAlways);
		uploadInput.on('fileuploadprogress', callbacks.onFileUploadProgress);
		uploadInput.on('fileuploadprogressall', callbacks.onFileUploadProgressAll);
		uploadInput.on('fileuploadstart', callbacks.onFileUploadStart);
		uploadInput.on('fileuploadstop', callbacks.onFileUploadStop);
		uploadInput.on('fileuploadchange', callbacks.onFileUploadChange);
		uploadInput.on('fileuploadpaste', callbacks.onFileUploadPaste);
		uploadInput.on('fileuploaddrop', callbacks.onFileUploadDrop);
		uploadInput.on('fileuploaddragover', callbacks.onFileUploadDragover);
		uploadInput.on('fileuploadchunksend', callbacks.onFileUploadChunksend);
		uploadInput.on('fileuploadchunkdone', callbacks.onFileUploadChunkdone);
		uploadInput.on('fileuploadchunkfail', callbacks.onFileUploadChunkfail);
		uploadInput.on('fileuploadchunkalways', callbacks.onFileUploadChunkalways);

		uploadInput.on('fileuploadprocessstart', callbacks.onFileUploadProcessStart);
		uploadInput.on('fileuploadprocess', callbacks.onFileUploadProcess);
		uploadInput.on('fileuploadprocessdone', callbacks.onFileUploadProcessDone);
		uploadInput.on('fileuploadprocessfail', callbacks.onFileUploadProcessFail);
		uploadInput.on('fileuploadprocessalways', callbacks.onFileUploadProcessAlways);
		uploadInput.on('fileuploadprocessstop', callbacks.onFileUploadProcessStop);
	}
};
