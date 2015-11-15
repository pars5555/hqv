<?php

namespace ngsadmin\actions\delete {

use ngsadmin\actions\TableDeleteAbstractAction;
use ngsadmin\managers\ImageManager;

    class DeleteSkinProblemAction extends TableDeleteAbstractAction {

        function __construct() {
            parent::__construct();
        }

        public function onItemDelete($dto) {
           
        }

        public function getTableName() {
            return "skin_problem";
        }

    }

}
