NGS.createLoad("ngsadmin.loads.table_list", {
	afterLoad : function() {
		NGS.PagingManager.init(this.getAction(), {});
		$("#f_orderingBox").ilyovSorting(this.getAction(), function(params) {

		}.bind(this));

		jQuery("#" + this.getContainer() + ' .f_add_item').click(this.addItem.bind(this));
		jQuery("#" + this.getContainer() + ' .f_edit_item').click(this.editItem.bind(this));
		jQuery("#" + this.getContainer() + ' .f_delete_item').click(this.deleteItem.bind(this));
		jQuery("#" + this.getContainer() + ' .f_export_items').click(this.exportItems.bind(this));

		jQuery("#searchBtn").click(this.doSearch.bind(this));
		jQuery("#searchText").keyup( function(evt) {
			if (evt.keyCode == 13) {
				this.doSearch();
			}
		}.bind(this));

		if ( typeof this.afterListLoad == 'function') {
			this.afterListLoad();
		}
	},
	addItem : function(evt) {
		NGS.load(this.getAddLoadName(), {});
	},
	editItem : function(evt) {
		var params = {};
		var item = jQuery(evt.currentTarget);
		var itemId = item.attr('item_id');
		if (itemId) {
			params.itemId = itemId;
			NGS.load(this.getEditLoadName(), params);
		} else {
			alert("Please provide item_id.");
		}
	},
	deleteItem : function(evt) {
		var params = {};
		var item = jQuery(evt.currentTarget);
		var itemId = item.attr('item_id');
		if (itemId) {
			params.itemId = itemId;
			var modal = jQuery("#modalBox");
			var self = this;
			modal.html('<div>Do you really want to delete this item?</div><p class="error f_error" id="f_error_general_err"></p>').dialog({
				modal : true,
				width : 700,
				title : 'Delete Item',
				buttons : [{
					text : "Delete",
					click : function() {
						NGS.action(self.getDeleteActionName(), params);
					}
				}, {
					text : "Cancel",
					click : function() {
						jQuery(this).dialog('close');
					}
				}]
			});
		} else {
			alert("Please provide item_id.");
		}
	},
	exportItems : function() {
		var http = "http://";
		if (window.location.protocol == "https:") {
			http = "https://";
		}
		var url = http + SITE_URL + "/dyn/" + this.getPackage() + "/" + this.getUrl();
		var form = jQuery("#csvExportForm");
		form.attr('action', url);
		form.submit();
	},
	doSearch : function(evt) {
		var searchField = jQuery('#searchFieldSelect').val();
		var searchText = jQuery('#searchText').val();
		NGS.load(this.getAction(), {
			searchField : searchField,
			searchText : searchText
		});
	}
});
