NGS.SiteAction = NGS.Class({
	onError: function(data){
		jQuery("#f_error_general_err").html(data.msg);
	}	
});