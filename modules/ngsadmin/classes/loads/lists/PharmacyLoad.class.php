<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

use ngsadmin\loads\TableListAbstractLoad;

    class PharmacyLoad extends TableListAbstractLoad {

        function load() {
                 $this->renderTable();
        }

        public function getTableName() {
            return "pharmacy";
        }

        public function getPageTitle() {
            return 'Pharmacy';
        }

    }

}