/**
 * @author Vahagn Kirakosyan
 * @site http://naghashyan.com
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */
NGS.OrderingManager = {
	params : {},
	load : "",
	init : function(load, params) {
		if (params) {
			this.params = params;
		}
		if (load) {
			this.load = load;
		}
		if (jQuery("#f_orderingBox").length > 0) {
                        jQuery("#f_orderingBox .f_sort").click(function(evt){
                            var orderField = jQuery(evt.currentTarget).attr('order_field');
                            var orderDirection = jQuery(evt.currentTarget).attr('order_direction');
                            this.doOrdering(orderField, orderDirection);
                        }.bind(this));
		}
	},
                
	doOrdering : function(orderField, orderDirection) {
		this.params.orderField = orderField;
                this.params.orderDirection = orderDirection;
                NGS.load(this.load, this.params);
	}
};
