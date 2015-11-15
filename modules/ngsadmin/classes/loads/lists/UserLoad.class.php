<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

use ngsadmin\loads\TableListAbstractLoad;

    class UserLoad extends TableListAbstractLoad {

        function load() {
           
//            $this->setRelationField('pharmacy_id', 'pharmacy', 'name');
            $this->setRelationField('country_id', 'country', 'name');
            $this->setFieldTitle('country_id', 'Country');
            $this->removeVisibleField('password');
            $this->removeVisibleField('reset_password_hashcode');
            $this->removeVisibleField('reset_username_hashcode');
            $this->removeVisibleField('push_token');
                 $this->renderTable();
        }

        public function getTableName() {
            return "user";
        }

        public function getPageTitle() {
            return 'Users';
        }

    }

}