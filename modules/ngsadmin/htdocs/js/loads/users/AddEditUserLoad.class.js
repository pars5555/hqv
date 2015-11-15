NGS.createLoad("ngsadmin.loads.users.add_edit_user", {

	getContainer : function() {
		return 'modalBox';
	},

	afterLoad : function() {
		var modal = jQuery("#" + this.getContainer());
		if(this.getArgs().temp_user){
			modal.addClass("marge_users");
		}else{
			modal.removeClass("marge_users");
		}
		modal.dialog({
			modal : true,
			width : 700,
			title : 'Add/Edit Item',
			buttons : [{
				text : "Save Changes",
				'class': "blue-button",
				click : function(evt) {
					var params = jQuery('#f_edit_item_form').serializeObject();
					params.id = null;
					if(this.getParams().itemId){
						params.id = this.getParams().itemId;
					}
					NGS.action("ngsadmin.actions.users.add_edit_user", params, function(){
						jQuery("#" + this.getContainer()).dialog('close');
						NGS.load("ngsadmin.loads.users.user_list", this.getParams());
					}.bind(this));
				}.bind(this)
			}, {
				text : "Cancel",
				'class': "blue-button",
				click : function() {
					jQuery(this).dialog('close');
				}
			}]
		});
	}
});
