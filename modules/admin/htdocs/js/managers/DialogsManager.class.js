NGS.DialogsManager = {
	autohideDialog : function(message) {
		var id = this.randomString(15);
		jQuery('<div class="notitle-dialog" id="notitle-' + id + '"></div>').appendTo('body');
		jQuery('<div id="' + id + '" style="text-align:center">' + message + '</div>').dialog({
			resizable : false,
			position : ['middle', 20],
			show : {
				effect : 'fade',
				speed : 1000
			},
			hide : {
				effect : 'fade',
				speed : 1000
			},
			modal : false,
			width : 400,
			close : function() {
				jQuery('#notitle-' + id).remove();
				jQuery(this).remove();
			},
			open : function(event, ui) {
				var dialog = jQuery(this);
				window.setTimeout(function() {
					dialog.dialog('close');
				}, 1000);

			}
		});
		jQuery("#" + id).parent().appendTo(".notitle-dialog");
	},
	randomString : function(length) {
		var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');

		if (!length) {
			length = Math.floor(Math.random() * chars.length);
		}

		var str = '';
		for (var i = 0; i < length; i++) {
			str += chars[Math.floor(Math.random() * chars.length)];
		}
		return str;
	}
}; 