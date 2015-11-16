/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2012-2013
 */
NGS.PagingManager = {
	params : {},
	load : "",
	pageCount : null,
	init : function(load, params) {
		if (params) {
			this.params = params;
		}
		if (load) {
			this.load = load;
		}
		if (jQuery("#f_pageingBox").length > 0) {

			var page = parseInt(jQuery("#f_curPage").val());
			this.pageCount = parseInt(jQuery("#f_pageCount").val());

			jQuery("#f_first").click(this.goToPage.bind(this, 1));
			jQuery("#f_prev").click(this.goToPage.bind(this, page - 1));
			jQuery("#f_next").click(this.goToPage.bind(this, page + 1));
			jQuery("#f_last").click(this.goToPage.bind(this, this.pageCount));
			jQuery("#f_pageingBox .f_pagenum").click( function(evt) {
				this.goToPage(jQuery(evt.currentTarget).attr("page"));
			}.bind(this));
			jQuery("#f_count_per_page").change(this.goToPage.bind(this, 1));
			jQuery("#f_go_to_page").keyup(function(evt){
				if(evt.keyCode==13){
					this.goToPage(jQuery(evt.currentTarget).val());
				}
			}.bind(this));
		}
	},
	updateParam : function(params) {
		this.params = params;
	},
	goToPage : function(page) {
		this.params.page = page;
		this.params.limit = jQuery("#f_count_per_page").val();
		if(page>0 && page<=this.pageCount){
			NGS.load(this.load, this.params);
		}
	},
};
