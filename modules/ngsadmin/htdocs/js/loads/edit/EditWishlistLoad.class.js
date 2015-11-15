NGS.createLoad("ngsadmin.loads.edit.edit_user_wishlist", {
    
    
	afterEditLoad : function() {
	},
	onSave : function(params) {
            //to do create correspond actions 
		NGS.action('ngsadmin.actions.edit.edit_user_wishlist_item', params);
	},
        getContainer:function(){
            return 'modalBox';
        }
},'ngsadmin.loads.table_edit');