NGS.createLoad("ngsadmin.loads.table_edit", {

	afterLoad : function() {
		var modal = jQuery("#" + this.getContainer());
		var self = this;
		modal.dialog({
			modal : true,
			width : 700,
			title : 'Edit Item',
			buttons : [{
				text : "Save Changes",
				className:'save',
				click : function() {
					var params = jQuery('#f_edit_item_form').serializeObject();
					self.onSave(params);
				}
			}, {
				text : "Cancel",
				click : function() {
					jQuery(this).dialog('close');
				}
			}]
		});
		if(typeof this.afterEditLoad=='function'){
			this.afterEditLoad();
		}
	}
});
