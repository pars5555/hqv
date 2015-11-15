NGS.createLoad("ngsadmin.loads.table_add", {

	afterLoad : function() {
		var modal = jQuery("#" + this.getContainer());
		var self = this;
		modal.dialog({
			modal : true,
			width : 700,
			title : 'Add Item',
			buttons : [{
				text : "Add Item",
				click : function() {
					var params = jQuery('#f_add_item_form').serializeObject();
                                      
					self.onSave(params);
				}
			}, {
				text : "Cancel",
				click : function() {
					jQuery(this).dialog('close');
				}
			}]
		});
		if(typeof this.afterAddLoad=='function'){
			this.afterAddLoad();
		}
	}
});
