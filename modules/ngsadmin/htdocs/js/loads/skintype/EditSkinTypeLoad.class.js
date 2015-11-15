NGS.createLoad("ngsadmin.loads.skintype.edit_skin_type", {

	getContainer : function() {
		return 'modalBox';
	},

	afterLoad : function() {
		var modal = jQuery("#" + this.getContainer());
		modal.dialog({
			modal : true,
			width : 700,
			title : 'Edit Item',
			buttons : [{
				text : "Save Changes",
				'class':"blue-button",
				click : function(evt) {
					var params = jQuery('#f_edit_item_form').serializeObject();
					params.id = null;
					if(this.getParams().itemId){
						params.id = this.getParams().itemId;
					}
					NGS.action("ngsadmin.actions.skintype.edit_skin_type", params, function(){
						jQuery("#" + this.getContainer()).dialog('close');
						NGS.load("ngsadmin.loads.skintype.skin_type", this.getParams());
					}.bind(this));
				}.bind(this)
			}, {
				text : "Cancel",
				'class':"blue-button",
				click : function() {
					jQuery(this).dialog('close');
				}
			}]
		});
	}
});
