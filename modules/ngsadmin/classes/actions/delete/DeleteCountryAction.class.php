<?php

namespace ngsadmin\actions\delete {

use ngsadmin\actions\TableDeleteAbstractAction;
use ngsadmin\managers\ImageManager;

    class DeleteCountryAction extends TableDeleteAbstractAction {

        function __construct() {
            parent::__construct();
        }

        public function onItemDelete($dto) {
           
        }

        public function getTableName() {
            return "country";
        }

    }

}
