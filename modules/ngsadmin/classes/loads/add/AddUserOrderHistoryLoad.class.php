<?php

namespace ngsadmin\loads\add {

use ngsadmin\loads\TableAddAbstractLoad;


    class AddUserOrderHistoryLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
           $this->setFieldTitle('user_id', 'User');
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setFieldTitle('product_id', 'Product');
            $this->setRelationField('product_id', 'products', 'product_name');
            $this->removeVisibleField('added_date');
            $this->removeVisibleField('update_date');
        }

        public function getTableName() {
            return "user_order_history";
        }

    }

}
