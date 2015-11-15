<?php

namespace ngsadmin\loads\add {

use ngsadmin\loads\TableAddAbstractLoad;


    class AddUserWishlistLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
              $this->setFieldTitle('user_id', 'User');
              $this->setFieldTitle('product_id', 'Product');
            $this->setRelationField('user_id', 'users', 'first_name');
             $this->setRelationField('product_id', 'products', 'product_name');
            $this->removeVisibleField('added_date');
            $this->removeVisibleField('updated_date');
        }

        public function getTableName() {
            return "user_wishlist";
        }

    }

}
