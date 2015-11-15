<?php

namespace ngsadmin\actions\delete {

use ngsadmin\actions\TableDeleteAbstractAction;

    class DeletePharmacyAction extends TableDeleteAbstractAction {

        function __construct() {
            parent::__construct();
        }

        public function onItemDelete($dto) {
           
        }

        public function getTableName() {
            return "pharmacy";
        }

    }

}
