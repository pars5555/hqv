<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

    use ngsadmin\loads\TableListAbstractLoad;
    use NGS;

    class UserOrderHistoryLoad extends TableListAbstractLoad {

        function load() {
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setRelationField('product_id', 'products', 'product_name');
            $this->setFieldTitle('user_id', 'User');
            $this->setFieldTitle('product_id', 'Product');
                 $this->renderTable();
        }

        public function getTableName() {
            return "user_order_history";
        }

        public function getPageTitle() {
            return 'User Order History';
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/list/user_order_history.tpl";
        }

    }

}
