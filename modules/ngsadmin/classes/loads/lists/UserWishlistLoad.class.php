<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

    use ngsadmin\loads\TableListAbstractLoad;

    class UserWishlistLoad extends TableListAbstractLoad {

        public function load() {
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setRelationField('product_id', 'products', 'product_name');
            $this->setFieldTitle('user_id', 'User');
            $this->setFieldTitle('product_id', 'Product');
            $this->renderTable();
        }

        public function getTableName() {
            return "user_wishlist";
        }

        public function getPageTitle() {
            return 'User Wishlist';
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/list/user_wishlist.tpl";
        }

    }

}